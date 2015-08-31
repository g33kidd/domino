var gulp      = require('gulp'),
    gutil     = require('gulp-util'),
    changed   = require('gulp-changed'),
    dest      = require('gulp-dest'),
    imagemin  = require('gulp-imagemin'),
    config    = require('../../config').images;

// Copy changed images from the source folder to build
gulp.task('images', function() {
  return gulp.src(config.build.src)
    .pipe(changed(config.build.dest))
    .pipe(gulp.dest(config.build.dest));
});

// This will be very slow...
gulp.task('images-dist', ['utils-dist'], function() {
  return gulp.src(config.dist.src)
    .pipe(imagemin(config.imagemin))
    .pipe(gulp.dest(config.dist.dest));
});
