var gulp        = require('gulp');
var watch       = require('gulp-watch');
var config      = require('../config');

gulp.task('watch', function() {
  gulp.watch('./styles/less/**/*.less', ['compile:less']);
  gulp.watch('./styles/css/**/*.css', ['compile:postcss']);
  gulp.watch('./styles/sass/**/*.{sass,scss}', ['compile:sass']);
});