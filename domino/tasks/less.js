var gulp    = require('gulp');
var less    = require('gulp-less');
var config  = require('../config');

var LessPluginAutoPrefix = require('less-plugin-autoprefix');
var autoprefix = new LessPluginAutoPrefix({browsers: ["last 2 versions"]});

gulp.task('compile:less', function() {
  return gulp.src([config.less.srcPath, config.less.ignore, config.ignoreGlobal])
    .pipe(less({ plugins: [autoprefix] }))
    .pipe(gulp.dest('../assets/css'))
});