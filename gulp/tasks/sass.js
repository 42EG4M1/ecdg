const gulp        = require('gulp');
const browserSync = require('browser-sync');
const config      = require('../config').sass;
const $           = require('gulp-load-plugins')();


gulp.task('sass', () => {
  return gulp.src(config.src)
    .pipe($.sass().on('error', $.sass.logError))
    .pipe($.pleeease({
      minifier: true, //true or false
      out: 'all.min.css'
    }))
    .pipe(gulp.dest(config.dest))
    .pipe(browserSync.reload({
      stream: true,
      once: true
    }));
});
