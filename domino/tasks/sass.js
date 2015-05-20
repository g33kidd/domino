var gulp      = require('gulp');
var sass      = require('gulp-sass');
var config    = require('../config');

gulp.task('compile:sass', function() {
  return gulp.src([config.sass.srcPath, config.sass.ignore, config.ignoreGlobal])
    .pipe(sass())
    .pipe(gulp.dest(config.paths.cssDest))
});