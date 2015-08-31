var gulp = require('gulp');

gulp.task('default', ['watch']);

// images, scripts, styles, theme
gulp.task('build', ['images', 'styles', 'theme']);

// Dist task chain: wipe -> build -> clean -> copy -> images/styles
// NOTE: This is a resource-intensive task
// gulp.task('dist', ['images-dist', 'styles-dist']);
