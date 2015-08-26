var gulp    = require('gulp');
var plugins = require('gulp-load-plugins')({camelize: true});
var config  = require('../../config').utils;

// Start the livereload server; not asynchronous
gulp.task('livereload', ['build'], function() {
  plugins.livereload.listen(config.port, function (err) {
    if (err) {
      return console.log(err);
    };
  });
});
