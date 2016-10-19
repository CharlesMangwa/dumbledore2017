# Dumbledore 2017 🔮

### Setup

- Install `Composer` (if you don't have it yet):

```
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
```

- Install `Yarn`:

```
npm i -g yarn
```

- In the `themes` folder where you've setuped your Wordpress install, run:

```
git clone https://github.com/CharlesMangwa/dumbledore2017.git dumbledore2017 && cd dumbledore2017 && composer install && yarn && yarn start
```

- Then, open your Wordpress, set it up, and choose `Dumbledore 2017 🔮`
