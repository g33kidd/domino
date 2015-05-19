/*
  gulpfile.js
  ===========
  This file requires all of the tasks from the tasks
  folder. Easier to maintain and faster.
*/

var requireDir = require('require-dir');
requireDir('./tasks', {recurse: true});

// var gulp        = require('gulp');
// var fs          = require('fs');
// var watch       = require('gulp-watch');
// var less          = require('gulp-less');
// var sass          = require('gulp-sass');
// var postcss       = require('gulp-postcss');
// var minifyCss     = require('gulp-minify-css');
// var header        = require('gulp-header');
// var config        = require('./config');
// var stripComments = require('gulp-strip-css-comments');

// var LessPluginAutoPrefix = require('less-plugin-autoprefix');
// var autoprefix = new LessPluginAutoPrefix({browsers: ["last 2 versions"]});

// var themeBanner =['/*',
//   'Theme Name: <%= theme.name %>',
//   'Theme URI: <%= theme.uri %>',
//   'Author: <%= theme.author %>',
//   'Author URI: <%= theme.authorUri %>',
//   'Description: <%= theme.description %>',
//   'Version: <%= theme.version %>',
//   'License: <%= theme.license %>',
//   'License URI: <%= theme.licenseUri %>',
//   'Text Domain: <%= theme.textDomain %>',
//   'Tags: <%= theme.tags %>',
//   '*/', ''].join('\n');

// gulp.task('style', function() {
//   return gulp.src('./styles/less/style.less')
//     .pipe(less({
//       plugins: [autoprefix]
//     }))
//     .pipe(stripComments({all: true}))
//     // .pipe(minifyCss()) // This freezes sometimes...
//     .pipe(header(themeBanner, {theme: config.theme}))
//     .pipe(gulp.dest('../'))
// });

// gulp.task('less', function() {
//   return gulp.src(['!./styles/less/**/_*.less', './styles/less/**/*.less', '!./styles/less/style.less'])
//     .pipe(less({
//       plugins: [autoprefix]
//     }))
//     // .pipe(minifyCss()) // This freezes sometimes...
//     .pipe(gulp.dest('../assets/css'))
// });

// gulp.task('sass', function() {
//   gulp.src(['!./styles/sass/**/_*.{scss,sass}', './styles/sass/**/*.{sass,scss}'])
//     .pipe(sass())
//     .pipe(gulp.dest('../assets/css'))
// });

// gulp.task('postcss', function() {
//   var autoprefixer = require('autoprefixer-core');
//   var processors = [require('cssnext'), require('cssgrace'), autoprefixer({browsers: 'last 2 versions'})];
//   return gulp.src(['./styles/css/**/*.css', './styles/sass/**/*.css', './styles/less/**/*.css'])
//     .pipe(postcss([
//       require('cssnext'), require('cssgrace')
//     ]))
//     .pipe(gulp.dest('../assets/css'))
// });

// gulp.task('copy', function() {
// });

// /**
//  * Builds the theme for production. Minifies CSS and JS.
//  */
// gulp.task('build', function() {
// });

// /**
//  * Resets the entire project to a default basic theme.
//  */
// gulp.task('reset', function() {
// });

// /**
//  * Watches less/sass folders for file changes and runs the 
//  * less or sass task.
//  */
// gulp.task('watch', function() {
//   // if(fs.existsSync('./styles/less/') && !fs.existsSync('./styles/sass/')) {
//     gulp.watch('./styles/less/style.less', ['style']);
//     gulp.watch('./styles/less/**/*.less', ['less']);
//   // }else if(fs.existsSync('./styles/sass/') && !fs.existsSync('./less')) {
//     gulp.watch('./styles/sass/**/*.{sass,scss}', ['sass']);
//     gulp.watch('./styles/css/**/*.css', ['postcss']);
//   // }
// });