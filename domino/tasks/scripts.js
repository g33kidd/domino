// TODO: Add coffeescript compile and normal theme.js compile.

var gulp = require('gulp');
var concat = require('gulp-concat');

/**
 * Compiles the necessary bootstrap files in
 * the correct file order.
 */
gulp.task('compile:bootstrap', function() {
  gulp.src(['./components/bootstrap/js/transition.js',
    './components/bootstrap/js/alert.js',
    './components/bootstrap/js/button.js',
    './components/bootstrap/js/carousel.js',
    './components/bootstrap/js/collapse.js',
    './components/bootstrap/js/dropdown.js',
    './components/bootstrap/js/modal.js',
    './components/bootstrap/js/tooltip.js',
    './components/bootstrap/js/popover.js',
    './components/bootstrap/js/scrollspy.js',
    './components/bootstrap/js/tab.js',
    './components/bootstrap/js/affix.js'])
    .pipe(concat('bootstrap.js'))
    .pipe(gulp.dest('../assets/js'))
});
