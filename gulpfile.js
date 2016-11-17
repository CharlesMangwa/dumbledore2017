/* eslint no-multi-spaces: 0 */
/* eslint prefer-template: 0 */

// Plugins
const argv         = require('minimist')(process.argv.slice(2))
const autoprefixer = require('gulp-autoprefixer')
const babel        = require('gulp-babel')
const browsersync  = require('browser-sync')
const changed      = require('gulp-changed')
const concat       = require('gulp-concat')
const cssnano      = require('gulp-cssnano')
const del          = require('del')
const eslint       = require('gulp-eslint')
const flatten      = require('gulp-flatten')
const gulp         = require('gulp')
const gulpif       = require('gulp-if')
const imagemin     = require('gulp-imagemin')
const imageminJpg  = require('imagemin-jpeg-recompress')
const imageminPng  = require('imagemin-pngquant')
const notify       = require('gulp-notify')
const plumber      = require('gulp-plumber')
const rename       = require('gulp-rename')
const runSequence  = require('run-sequence')
const sass         = require('gulp-sass')
const sourcemaps   = require('gulp-sourcemaps')
const uglify       = require('gulp-uglify')
const webpack      = require('webpack-stream')

// Get project config
const way          = require('path')
const root         = way.resolve(__dirname)
const config       = require('./assets/config.json')
const path         = config.path
const dependencies = config.dependencies

// Command line options
const enabled = {
  // Enable production build argument
  production: argv.production,
}

// Custom error handler to send native system notifications
const onError = (err) => {
  notify.onError({
    title: 'Gulp',
    message: '<%= error.message %>',
  })(err)
  this.emit('end')
}

const plumberOptions = {
  errorHandler: onError,
}

//
// Tasks
//

// ## Styles
// 'gulp styles' - Compiles, autoprefixes, minifies and generates source maps
// for styles.
gulp.task('styles', () => (
    gulp.src(dependencies.styles)
        .pipe(plumber(plumberOptions))
        .pipe(gulpif(!enabled.production, sourcemaps.init()))
        .pipe(concat('main.css'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(sass({
          outputStyle: 'nested',
        }))
        .pipe(autoprefixer({
          browsers: ['last 2 versions'],
        }))
        .pipe(cssnano())
        .pipe(gulpif(!enabled.production, sourcemaps.write()))
        .pipe(gulp.dest(path.dist + 'styles'))
        .pipe(browsersync.stream())
))

// ## Scripts
// 'gulp scripts' - Lints, transpiles ES6, combines, minifies and generates
// source maps for scripts
gulp.task('webpack', () => (
  gulp.src("./assets/scripts/main.js").pipe(webpack(require('./webpack.config.js'))).pipe(gulp.dest("dist/scripts/"))
))

gulp.task('scripts', ['lint', 'webpack'], () => (
    gulp.src(dependencies.scripts)
        .pipe(plumber(plumberOptions))
        .pipe(gulpif(!enabled.production, sourcemaps.init()))
        .pipe(concat('main.js'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(babel({
          presets: ['es2015', 'babel-preset-stage-0'],
        }))
        .pipe(uglify())
        .pipe(gulpif(!enabled.production, sourcemaps.write()))
        .pipe(gulp.dest(path.dist + 'scripts'))
        .pipe(browsersync.stream())
))

// ## Images
// 'gulp images' - Optimizes images with imagemin
gulp.task('images', () => (
    gulp.src(path.assets + 'images/**/*')
        .pipe(changed(path.dist + 'images'))
        .pipe(imagemin(
            [imageminPng(), imageminJpg()],
            { verbose: true }
        ))
        .pipe(gulp.dest(path.dist + 'images'))
        .pipe(browsersync.stream())
))

// ## Fonts
// 'gulp fonts' - Gathers font files and outputs to flat directory structure
gulp.task('fonts', () => (
    gulp.src([
      path.assets + 'fonts/**/*.eot',
      path.assets + 'fonts/**/*.svg',
      path.assets + 'fonts/**/*.ttf',
      path.assets + 'fonts/**/*.woff',
      path.assets + 'fonts/**/*.woff2',
    ])
      .pipe(flatten())
      .pipe(gulp.dest(path.dist + 'fonts'))
      .pipe(browsersync.stream())
))

// ## Lint
// 'gulp lint' - Lints main project scripts with eslint
gulp.task('lint', () => (
    gulp.src(path.assets + 'scripts/**/*.js')
        .pipe(plumber(plumberOptions))
        .pipe(eslint())
        .pipe(eslint.format())
))

// ## Clean
// 'gulp clean' - Deletes the dist directory
gulp.task('clean', del.bind(null, [path.dist]))

// ## Reload
// 'gulp reload' - Forces a manual browser reload
gulp.task('reload', () => {
  browsersync.reload()
})

// ## Build
// 'gulp build' - Builds all assets without cleaning dist, you
//  should use the `gulp` task to ensure a proper build
gulp.task('build', () => {
  require('gulp-stats')(gulp)
  runSequence('styles', 'scripts', ['fonts', 'images'], 'webpack')
})

// ## Gulp
// 'gulp' - Builds all assets
// 'gulp --production' - Builds all assets for production (no source maps)

gulp.task('default', [
    'clean', 'build', 'images', 'watch'
], () => (
  gulp.src("./assets/scripts/main.js").pipe(webpack({
      context: __dirname,
      node: {
          __filename: true
      },
      watch: false,
      entry: {
          app: ["./assets/scripts/main.js"]
      },
      output: {
          path: way.resolve(__dirname , "./dist/scripts/main.js"),
          filename: "bundle.js"
      },
      module: {
          loaders: [
              {
                  test: /\.js$/,
                  exclude: /(nodes_modules|bower_components)/,
                  include:root,
                  loader: "babel",
                  query: {
                      presets: ['es2015', 'babel-preset-stage-0']
                  }
              }
          ]
      }
    }))
  .pipe(gulp.dest('app/dist/js/'))
))

// ## Watch
// 'gulp watch' - Monitors theme files and assets for changes and live reloads
// with Browsersync. You must update your devUrl in config.json to reflect your
// local development hostname.
gulp.task('watch', () => {
  browsersync.init({
    proxy: config.devUrl,
    snippetOptions: {
      whitelist: ['/wp-admin/admin-ajax.php'],
      blacklist: ['/wp-admin/**'],
    },
  })
  gulp.watch(['**/*.php'], ['reload'])
  gulp.watch([path.assets + 'styles/**/*'], ['styles'])
  gulp.watch([path.assets + 'images/**/*'], ['images'])
  gulp.watch([path.assets + 'scripts/**/*'], ['scripts', 'webpack'])
  gulp.watch([path.assets + 'fonts/**/*'], ['fonts'])
})
