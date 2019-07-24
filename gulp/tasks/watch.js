const gulp   = require('gulp');
const config = require('../config');
//const $      = require('gulp-load-plugins')();


// gulp.task('watch', () => {
//   $.watch(config.sass.watch, function(event) {
//     gulp.start(['sass']);
//   });
//   $.watch(config.js.watch, function(event) {
//     gulp.start(['js']);
//   });
//   $.watch(config.images.watch, function(event) {
//     gulp.start(['imagemin']);
//   });
//   $.watch(config.copy.watch, function(event) {
//     gulp.start(['copy']);
//   });
// });

gulp.task('watch', () => {
  gulp.watch(config.sass.watch, gulp.task('sass'));
  gulp.watch(config.js.watch, gulp.task('js'));
  gulp.watch(config.images.watch, gulp.task('imagemin'));
  gulp.watch(config.copy.watch, gulp.task('copy'));
});
