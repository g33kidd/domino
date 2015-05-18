//gulp plugins
var gulp = require('gulp');
var watch = require('gulp-watch');
var less = require('gulp-less');
// var path = require('path');
// var minifyCSS = require('gulp-minify-css');
// var LessPluginAutoPrefix = require('less-plugin-autoprefix');
// var autoprefix = new LessPluginAutoPrefix({ browsers: ["last 2 versions"] });
var concat = require('gulp-concat');

//paths
var paths = {
  styles: ['./less/'],
  bootstrap_scripts: [
  		'bower_components/bootstrap/js/transition.js',
		'bower_components/bootstrap/js/alert.js',
		'bower_components/bootstrap/js/button.js',
		'bower_components/bootstrap/js/carousel.js',
		'bower_components/bootstrap/js/collapse.js',
		'bower_components/bootstrap/js/dropdown.js',
		'bower_components/bootstrap/js/modal.js',
		'bower_components/bootstrap/js/tooltip.js',
		'bower_components/bootstrap/js/popover.js',
		'bower_components/bootstrap/js/scrollspy.js',
		'bower_components/bootstrap/js/tab.js',
		'bower_components/bootstrap/js/affix.js'
	]
};

gulp.task('default', function() {
  //place code for your default task here
});

//compile and prefix less into css
gulp.task('less', function () {
  return gulp.src('./less/app.less')
    .pipe(less({
    	plugins: [autoprefix],
      	paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(gulp.dest('./theme/css/'));
});

//minify css
gulp.task('minify', function() {
  return gulp.src('./style.css')
    .pipe(minifyCSS({keepBreaks:true}))
    .pipe(gulp.dest('../'))
});

//concat js
gulp.task('scripts', function() {
	return gulp.src('bootstrap_scripts')
	.pipe(concat('scripts.js'))
	.pipe(gulp.dest('../scripts/'));
});

gulp.task('watch', function() {
  gulp.watch(paths.less, ['less']);
});