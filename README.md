# [Theme Wordpress avec sage 9](https://roots.io/sage/)
[![Packagist](https://img.shields.io/packagist/vpre/roots/sage.svg?style=flat-square)](https://packagist.org/packages/roots/sage)
[![devDependency Status](https://img.shields.io/david/dev/roots/sage.svg?style=flat-square)](https://david-dm.org/roots/sage#info=devDependencies)
[![Build Status](https://img.shields.io/travis/roots/sage.svg?style=flat-square)](https://travis-ci.org/roots/sage)

Ceci est thème WordPress créé pour mon portfolio personnel. J'ai utilisé Sage & Bedrock afin de développer celui-ci.
Si vous souhaitez utiliser cette base pour votre site personnel, merci de modifier l'apparence des vues afin de ne pas avoir le même design que mon site. 

## Fonctionnalités

* Compilation des fichiers SASS
* Fichiers Javascript Modernes
* [Webpack](https://webpack.github.io/) pour compiler, optimier les images et minifier les fichiers.
* [Browsersync](http://www.browsersync.io/) pour avoir une live-preview en codant
* [Blade](https://laravel.com/docs/5.6/blade) comme moteur de templates
* [Controller](https://github.com/soberwp/controller) pour passer des données à la vue.
* Framework CSS : [Bootstrap 4](https://getbootstrap.com/)

## Requis

Si vous souhaitez utiliser ce dépot git, voici la liste des pré-requis.

* [WordPress](https://wordpress.org/) >= 4.7
* [PHP](https://secure.php.net/manual/en/install.php) >= 7.1.3 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 8.0.0
* [Yarn](https://yarnpkg.com/en/docs/install)

## Installation du thème

1. Faite un "git clone" afin de télécharger le dépôt git sur votre pc.
2. Faite un "composer install" afin de télécharger toutes les dépendances php nécessaire.
3. Tapez "yarn" afin d'installer les dépendances Javascript.

## Structure du thème

```shell
themes/your-theme-name/   # → Root of your Sage based theme
├── app/                  # → Theme PHP
│   ├── Controllers/      # → Controller files
│   ├── admin.php         # → Theme customizer setup
│   ├── filters.php       # → Theme filters
│   ├── helpers.php       # → Helper functions
│   └── setup.php         # → Theme setup
│   └── customize.php     # → Fichier gérant le customizer API de wordPress.
├── composer.json         # → Autoloading for `app/` files
├── composer.lock         # → Composer lock file (never edit)
├── dist/                 # → Built theme assets (never edit)
├── node_modules/         # → Node.js packages (never edit)
├── package.json          # → Node.js dependencies and scripts
├── resources/            # → Theme assets and templates
│   ├── assets/           # → Front-end assets
│   │   ├── config.json   # → Settings for compiled assets
│   │   ├── build/        # → Webpack and ESLint config
│   │   ├── fonts/        # → Theme fonts
│   │   ├── images/       # → Theme images
│   │   ├── scripts/      # → Theme JS
│   │   └── styles/       # → Theme stylesheets
│   ├── functions.php     # → Composer autoloader, theme includes
│   ├── index.php         # → Never manually edit
│   ├── screenshot.png    # → Theme screenshot for WP admin
│   ├── style.css         # → Theme meta information
│   └── views/            # → Theme templates
│       ├── layouts/      # → Base templates
│       └── partials/     # → Partial templates
└── vendor/               # → Composer packages (never edit)
```

## Développement

* Lancer `yarn` afin d'installer toutes les dépendances du thème lié au développement.
* Mettre à jours le fichier `resources/assets/config.json` :
  * `devUrl` doit représenter le chemin d'accès à votre thème local.
  * `publicPath` doit représenter la structure de votre thème WordPress (`/wp-content/themes/wordpress-portfolio` pour une installation n'utilisant pas [Bedrock](https://roots.io/bedrock/))

### Build commands

* `yarn start` — Compile les assets automatiquement à chaque changement, démarre Browsersync
* `yarn build` — Compile et optimize les fichiers dans votre dossier assets.
* `yarn build:production` — Compile les fichiers pour la production (retire les CSS non utilisé)

## Documentation

* [Sage documentation](https://roots.io/sage/docs/)
* [Controller documentation](https://github.com/soberwp/controller#usage)

## Contribution

Vous pouvez [contribuer à sage](https://github.com/roots/guidelines/blob/master/CONTRIBUTING.md) en lisant ceci.
Pour ce qui est de ce thème, vous êtes également libre de faire des pull request pour régler des problèmes, optimiser une partie de code ou corriger fautes d'orthographes.
