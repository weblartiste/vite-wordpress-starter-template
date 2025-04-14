# Wordpress Vite.js starter Template

![](src/screenshot.png)

## Features
- [Vite.js](https://vitejs.dev/) to compile theme assets
- Live reload
- /src structure 
- [SASS](http://sass-lang.com/) (@use)
- composer demo
- [ES6](https://github.com/lukehoban/es6features#readme) for JavaScript
- Polylang ready
- And more...

## Requirements

* [Node](https://nodejs.org/)

## Usage

First, clone this repository in your WordPress themes directory.

Then, run the following commands in the theme's directory :

	pnpm install

Launch your watch for assets with :

	pnpm dev

For production sites, create your build with :

	pnpm build

If you need :

    composer update

Check src/functions/composer_demo.php for more informations about autoload!