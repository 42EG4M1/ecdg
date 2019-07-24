const gulp   = require('gulp');
const config = require('../config').js;
const $      = require('gulp-load-plugins')();


// gulp.task('js', ['uglify'], () => {
//   return gulp.src([
//     'node_modules/jquery/dist/jquery.min.js',
//     'src/assets/scripts/libraries/jquery.lazyload.min.js',
//     config.dest + 'app.min.js'
//   ])
//     .pipe($.concat('app.min.js'))
//     .pipe(gulp.dest(config.dest));
// });

gulp.task('uglify', () => {
  return gulp.src(config.src)
    .pipe($.plumber())
    .pipe($.uglify())
    .pipe($.rename('app.min.js'))
    .pipe(gulp.dest(config.dest));
});

gulp.task('js', gulp.series('uglify', () => {
  return gulp.src([
    'node_modules/jquery/dist/jquery.min.js',
    'src/assets/scripts/libraries/jquery.lazyload.min.js',
    config.dest + 'app.min.js'
  ])
    .pipe($.concat('app.min.js'))
    .pipe(gulp.dest(config.dest));
}));
