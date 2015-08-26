var gulp    = require('gulp');
var plugins = require('gulp-load-plugins')({camelize: true});
var config  = require('../../config').utils;

gulp.task('bower', ['bower-normalize']);

gulp.task('bower-normalize', function() {
  return gulp.src(config.normalize.src)
    .pipe(plugins.changed(config.normalize.dest))
    .pipe(plugins.rename(config.normalize.rename))
    .pipe(gulp.dest(config.normalize.dest));
});
