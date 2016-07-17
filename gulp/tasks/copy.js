const gulp        = require('gulp');
const browserSync = require('browser-sync');
const config      = require('../config').copy;
const $           = require('gulp-load-plugins')();


gulp.task('copy', () => {
  return gulp.src(config.src)
  .pipe($.changed(config.dest))
  .pipe(gulp.dest(config.dest))
  .pipe(browserSync.reload({
    stream: true,
    once: true
  }));
});