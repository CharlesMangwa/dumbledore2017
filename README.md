# Dumbledore 2017 🔮

🇫🇷 Pour la magie du changement ! 🇫🇷

### Setup

- Install `Yarn` (if needed):

```
npm i -g yarn
```

- In the `themes` folder where you've setup your Wordpress, run:

```
git clone https://github.com/CharlesMangwa/dumbledore2017.git dumbledore2017 && cd dumbledore2017 && yarn && gulp
```

- Then, open your Wordpress, set it up, and choose `Dumbledore 2017 🔮`

### Development

- For `BrowserSync` change your `devUrl` in `./assets/config.json` with your Wordpress path

- Simply run `gulp` and you're good to go!

### Production

- Run `gulp --production` and that's it!
