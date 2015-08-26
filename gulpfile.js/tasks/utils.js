var gulp    = require('gulp');
var plugins = require('gulp-load-plugins')({camelize: true});
var del     = require('del');
var config  = require('../../config').utils;

gulp.task('utils-wipe', ['bower'], function(cb) {
  del(config.wipe, cb);
});

gulp.task('utils-clean', ['build', 'utils-wipe'], function(cb) {
  del(config.clean, cb);
});

gulp.task('utils-dest', ['utils-clean'], function() {
  return gulp.src(config.dist.src).pipe(gulp.dest(config.dist.dest));
});
