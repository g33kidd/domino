var gulp    = require('gulp');
var plugins = require('gulp-load-plugins')({camelize: true});
var config  = require('../../config').watch;

gulp.task('watch-browsersync', ['browsersync'], function() {
  gulp.watch(config.src.styles, ['styles']);
  gulp.watch(config.src.scripts, ['scripts']);
  gulp.watch(config.src.images, ['images']);
  gulp.watch(config.src.theme, ['theme']);
});

gulp.task('watch-livereload', ['livereload'], function() {
  gulp.watch(config.src.styles, ['styles']);
  gulp.watch(config.src.scripts, ['scripts']);
  gulp.watch(config.src.images, ['images']);
  gulp.watch(config.src.theme, ['theme']);
  gulp.watch(config.src.livereload).on('change', function(file) {
    plugins.livereload.changed(file.path);
  });
});

gulp.task('watch', ['watch-' + config.watcher]);

// gulp.task('watch', function() {
//   gulp.watch('./styles/**/*.{less,scss,sass,css}', ['compile:style', 'header:style']);
//   gulp.watch('./styles/**/*.less', ['compile:less']);
//   gulp.watch('./styles/**/*.css', ['compile:postcss']);
//   gulp.watch('./styles/**/*.{sass,scss}', ['compile:sass']);
// });
