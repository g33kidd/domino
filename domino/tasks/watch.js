var gulp        = require('gulp');
var watch       = require('gulp-watch');
var config      = require('../config');

/**
 * Watches for file changes.
 */
gulp.task('watch', function() {
  gulp.watch('./styles/**/*.{less,scss,sass,css}', ['compile:style', 'header:style']);
  gulp.watch('./styles/**/*.less', ['compile:less']);
  gulp.watch('./styles/**/*.css', ['compile:postcss']);
  gulp.watch('./styles/**/*.{sass,scss}', ['compile:sass']);
});