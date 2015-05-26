var gulp = require("gulp");
var config = require('../config');

/**
 * Gulp Copy task for copying fonts and other assets
 * into the main theme directory.
 */
gulp.task('copy:assets', function() {
  gulp.src('./components/bootstrap/fonts/**/*')
    .pipe(gulp.dest('../assets/fonts'));
  gulp.src('./components/fontawesome/fonts/**/*')
    .pipe(gulp.dest('../assets/fonts'));
  gulp.src('./components/jquery/dist/jquery.min.js')
    .pipe(gulp.dest('../assets/js'));
});