const gulp        = require('gulp');
const browserSync = require('browser-sync');
const config      = require('../config').copy;


gulp.task('copy', () => {
  return gulp.src(config.src)
  .pipe(gulp.dest(config.dest))
  .pipe(browserSync.reload({
    stream: true,
    once: true
  }));
});