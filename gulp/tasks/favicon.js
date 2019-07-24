const gulp        = require('gulp');
const config      = require('../config.js').favicon;
const realFavicon = require('gulp-real-favicon');
const fs          = require('fs');
//const runSequence = require('run-sequence');

const FAVICON_DATA_FILE = 'faviconData.json';
const siteName = 'ecdesigngallery';
const startUrl = 'http://ecdesigngallery.com/';


// gulp.task('favicon', (callback) => {
//   runSequence(
//     'generate-favicon',
// //    'inject-favicon-markups',
//     'check-for-favicon-update',
//     callback
//   );
// });


/**
 * 各種ファビコン画像の生成
 * 設定ファイルが含まれているので、そのサイトにあったカラーとURL、サイト名等を変更する。
 * 設定の詳細については、本家（http://realfavicongenerator.net/）を確認。
 * それぞれのデバイスにあった設定を行うことができる。
 */
gulp.task('generate-favicon', (done) => {
  realFavicon.generateFavicon({
    masterPicture: config.src,
    dest: config.dest,
    iconsPath: config.iconPath,
    design: {
      ios: {
        pictureAspect: 'backgroundAndMargin',
        backgroundColor: '#ffffff',
        margin: '3%',
        assets: {
          ios6AndPriorIcons: false,
          ios7AndLaterIcons: false,
          precomposedIcons: false,
          declareOnlyDefaultIcon: true
        }
      },
      desktopBrowser: {},
      windows: {
        pictureAspect: 'noChange',  // favicon白抜き
        backgroundColor: '#e4fafe', // faviconのテーマカラーに変更（背景色となる）
        onConflict: 'override',
        assets: {
          windows80Ie10Tile: false,
          windows10Ie11EdgeTiles: {
            small: false,
            medium: true,
            big: false,
            rectangle: false
          }
        }
      },
      androidChrome: {
        pictureAspect: 'noChange',
        themeColor: '#ffffff',
        manifest: {
          name: siteName,
          startUrl: startUrl,
          display: 'standalone',
          orientation: 'notSet',
          onConflict: 'override',
          declared: true
        },
        assets: {
          legacyIcon: false,
          lowResolutionIcons: false
        }
      },
      safariPinnedTab: {
        pictureAspect: 'silhouette',
        themeColor: '#00a6c1' // faviconのテーマカラーに変更（背景色となる）
      }
    },
    settings: {
      scalingAlgorithm: 'Mitchell',
      errorOnImageTooSmall: false
    },
    markupFile: FAVICON_DATA_FILE
  }, () => {
    done();
  });
});


/**
 * srcのfavicon.phpにファヴィコンをタグを自動挿入。これは一度だけ実行すればよく、以降はタスクをコメントアウト。
 * distファイルに対してではなく、srcファイルに出力しているので、その後、「npm run gulp」でdistに出力（コピー）する必要がある。
 * これは、「npm run gulp」のcopyタスクで上書きされてしまうのを防止するため。
 * 画像までのパスが相対となるため、WordPressの場合には、フルパスとなるよう書き換える必要がある（get_template_directory_uri）。
 */
gulp.task('inject-favicon-markups', function() {
  return gulp.src(config.srcFile + 'favicon.php') // ファビコンのコードを挿入するファイルを指定
    .pipe(realFavicon.injectFaviconMarkups(JSON.parse(fs.readFileSync(FAVICON_DATA_FILE)).favicon.html_code))
    .pipe(gulp.dest(config.srcFile)); // 出力先のパスを指定
});


/**
 * 最新デバイスやブラウザをチェックするためのアップデート
 */
gulp.task('check-for-favicon-update', (done) => {
  var currentVersion = JSON.parse(fs.readFileSync(FAVICON_DATA_FILE)).version;
  realFavicon.checkForUpdates(currentVersion, function(err) {
    if (err) {
      throw err;
    }
  });
  done();
});


gulp.task('favicon', gulp.series(
  'generate-favicon',
//  'inject-favicon-markups',
  'check-for-favicon-update'
));
