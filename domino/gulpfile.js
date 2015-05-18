var gulp        = require('gulp');
var watch       = require('gulp-watch');
var less          = require('gulp-less');
var minifyCss     = require('gulp-minify-css');
var header        = require('gulp-header');
var config        = require('./config');
var stripComments = require('gulp-strip-css-comments');

var LessPluginAutoPrefix = require('less-plugin-autoprefix');
var autoprefix = new LessPluginAutoPrefix({browsers: ["last 2 versions"]});

var paths = {
  less: "./less",
  sass: "./sass",
  root: "../"
};

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

gulp.task('less', function() {
  return gulp.src('./less/style.less')
    .pipe(less({
      plugins: [autoprefix]
    }))
    .pipe(stripComments({all: true}))
    // .pipe(minifyCss())
    .pipe(header(themeBanner, {theme: config.theme}))
    .pipe(gulp.dest('../'))
});

gulp.task('watch', function() {
  gulp.watch('./less/**/*.less', ['less']);
});