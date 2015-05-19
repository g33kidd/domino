var gulp      = require('gulp');
var sass      = require('gulp-sass');
var config    = require('../config');

var path = config.sass.srcPath + "**/*.{scss,sass}";
var iPath = "!" + config.sass.srcPath + "**/_*.{scss,sass}";

gulp.task('compile:sass', function() {
  return gulp.src([path, iPath])
    .pipe(sass())
    .pipe(gulp.dest(config.paths.cssDest))
});