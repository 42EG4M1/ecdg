const gulp        = require('gulp');
const config      = require('../config').default;
//const runSequence = require('run-sequence');


// gulp.task('default', (callback) => {
//   runSequence(
//     ['sass', 'js', 'imagemin', 'copy'],
//    // 'bs',
//     'watch',
//     callback
//   );
// });

gulp.task('default', gulp.series(
  gulp.parallel('sass', 'js', 'imagemin', 'copy'),
  'watch'
));
