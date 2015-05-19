var gulp    = require('gulp');
var postcss = require('gulp-postcss');
var config  = require('../config');

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

gulp.task('compile:postcss', function() {
  return gulp.src(config.postcss.srcPath)
    .pipe(postcss(processors))
    .on('error', function(error) {
      console.log(error)
    })
    .pipe(gulp.dest(config.paths.cssDest))
});