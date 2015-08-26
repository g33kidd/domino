var gulp    = require('gulp');
var gutil   = require('gulp-util');
var plugins = require('gulp-load-plugins')({camelize: true});
var config  = require('../../config').styles;
var autoprefixer = require('autoprefixer-core');

gulp.task('styles-ruby-sass', function() {
  return gulp.src(config.build.src)
    .pipe(plugins.sourcemaps.init())
    .pipe(plugins.rubySass(config.rubySass))
    .on('error', gutil.log)
    .pipe(plugins.dest(config.build.dest))
    .pipe(plugins.rename(config.rename))
    .pipe(plugins.minifyCss(config.minify))
    .pipe(gulp.dest(config.build.dest));
});

gulp.task('styles-libsass', function() {
  return gulp.src(config.build.src)
    .pipe(plugins.sourcemaps.init())
    .pipe(plugins.sass(config.libsass).on('error', plugins.sass.logError))
    .pipe(plugins.postcss([autoprefixer(config.autoprefixer)]))
    .pipe(plugins.sourcemaps.write())
    .pipe(gulp.dest(config.build.dest))
    .pipe(plugins.rename(config.rename))
    .pipe(plugins.sourcemaps.init())
    .pipe(plugins.minifyCss(config.minify))
    .pipe(plugins.sourcemaps.write('./'))
    .pipe(gulp.dest(config.build.dest));
});

gulp.task('styles', ['styles-' + config.compiler]);

// gulp.task('compile:style', function() {
//   return gulp.src('./styles/style.less')
//     .pipe(less())
//     .on('error', function(error) {
//       console.log(error)
//     })
//     .pipe(gulp.dest('../'))
// });
