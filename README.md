Domino
======

Domino is a beta development theme used by Themazing to experiment with while we work on our theme framework that is TBA.

# Installation & Setup #

#### Install Development Dependencies ####

We use npm and bower for dependencies. Make sure you have npm, gulp, and bower installed globally on your system. As far as running commands, you will be running all gulp commands in the `domino` directory within the theme.

```bash
cd <theme_directory>/domino/
npm install && bower install
```

## Using domino-cli (soon)
Install the domino-cli package: `npm install domino`

**Note:** This package is not available yet. Checkout the [repository](http://github.com/Themazing/domino-cli) and test it out locally.

#### Setup ####
Before you get started, run the following commands:
```bash
gulp copy:assets
gulp watch
```

# Commands #
`gulp copy:assets` copies all fonts and js files required by domino.

`gulp compile:style` compiles style.less to style.css and adds the theme header.

`gulp compile:less` compiles anything except style.less.

`gulp compile:bootstrap` compiles all bootstrap js into bootstrap.js

`gulp watch` watches for file changes and compiles less/sass/postcss

# Structure #
**domino/** holds all less/sass stylesheets and gulp tasks

**assets/** contains theme assets including js, css, fonts, etc..

**templates/** template parts and modules

**functions/** the main functionality of domino including blox, customizer, and helper functions.
