var gulp      = require('gulp');
var sass      = require('gulp-sass');
var less      = require('gulp-less');
var postcss   = require('gulp-postcss');
var header    = require('gulp-header');
var config    = require('../config');

var autoprefixer = require('autoprefixer-core');
var processors = [
  require('postcss-mixins'),
  require('postcss-nested'),
  require('postcss-simple-vars'),
  require('postcss-simple-extend'),
  autoprefixer({browsers: ['last 2 versions']})
  // Add the postcss processors here.
  // https://github.com/postcss/postcss#plugins
];

/**
 * Compiles style.less
 *
 * TODO: Allow the use of SASS or PostCSS
 */
gulp.task('compile:style', function() {
  return gulp.src('./styles/style.less')
    .pipe(less())
    .on('error', function(error) {
      console.log(error)
    })
    .pipe(gulp.dest('../'))
});

/**
 * Adds the theme header to style.css when it compiles.
 */
gulp.task('header:style', ['compile:style'], function() {
  var themeBanner =['/*',
  'Theme Name: <%= theme.name %>',
  'Theme URI: <%= theme.uri %>',
  'Author: <%= theme.author %>',
  'Author URI: <%= theme.authorUri %>',
  'Description: <%= theme.description %>',
  'Version: <%= theme.version %>',
  'License: <%= theme.license %>',
  'License URI: <%= theme.licenseUri %>',
  'Text Domain: <%= theme.textDomain %>',
  'Tags: <%= theme.tags %>',
  '*/', ''].join('\n');

  gulp.src('../style.css')
    .pipe(header(themeBanner, {theme: config.theme}))
    .pipe(gulp.dest('../'))
});