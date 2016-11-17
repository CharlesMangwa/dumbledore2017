const path = require('path')
const root = path.resolve(__dirname)


module.exports = {
    context: __dirname,
    node: {
        __filename: true
    },
    watch: true,
    entry: {
        app: ["./assets/scripts/main.js"]
    },
    output: {
        path: path.resolve(__dirname , "./dist/scripts/main.js"),
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
}
