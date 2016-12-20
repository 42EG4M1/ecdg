const gulp   = require('gulp');
const config = require('../config.js').svg;
const $      = require('gulp-load-plugins')();

gulp.task('svg', () => {
  gulp.src(config.src)
  .pipe($.svgmin())
  .pipe($.svgstore({ inlineSvg: true }))
  .pipe($.cheerio({
    run: ($, file) => {
      $('style,title,defs').remove();
      $('[id]:not(symbol)').removeAttr('id');
      $('[class^="st"],[class^="cls"]').removeAttr('class');
      $('[style]:not(svg)').removeAttr('style');
      $('[data-name]').removeAttr('data-name');
      $('[fill]').removeAttr('fill');
      $('svg').attr({
        style: 'display:none'
      });
      const symbols = $('svg > symbol').map(function() {
        return {
          id: $(this).attr('id')
        };
      }).get();
      const temp   = require('gulp-template');
      const rename = require('gulp-rename');
      gulp.src(config.html)
      .pipe(temp({
        inlineSvg: $('svg'),
        symbols: symbols
      }))
      .pipe(rename('_sample.html'))
      .pipe(gulp.dest('./'));
    },
    parserOptions: {
      xmlMode: true
    }
  }))
  .pipe($.rename('sprite.min.svg'))
  .pipe(gulp.dest(config.dest));
});