const gulp = require('gulp');
const bourbon = require('node-bourbon');
const sass = require('gulp-sass');
const frontnote = require("gulp-frontnote");
const uglify = require("gulp-uglify");
const browser = require("browser-sync");
const plumber = require("gulp-plumber");
const notify = require('gulp-notify');
const csscomb = require('gulp-csscomb');
const csslint = require('gulp-csslint');
const jshint = require('gulp-jshint');
const imagemin = require('gulp-imagemin');
const svgmin = require('gulp-svgmin');
const pngquant = require('imagemin-pngquant');
const pleeease = require('gulp-pleeease');
const babel = require('gulp-babel');
const sourcemaps = require('gulp-sourcemaps');
const browserify = require('browserify');
const babelify = require('babelify');
const source = require('vinyl-source-stream');

//ファイルパス関係
const f_root = "../";
const f_html = "../wp-content/themes/komakusakai/";
const f_css = "../wp-content/themes/komakusakai/";
const f_js = "../wp-content/themes/komakusakai/assets/js/";
const f_image = "assets/img/";
const f_image_min = "../wp-content/themes/komakusakai/" + f_image;
const f_sass = "sass/";
const f_es6 = "es6/";
const f_es5 = "es5/";
const other = "other/";
const f_php = "php/";
const f_image_gulp = "img/";
const root_font_px = 16;
// const proxy = 'http://localhost:10038/';
const proxy = 'http://komakusa-kai.wp/';
const browsers = [
    "last 4 versions",
    "Android 4.4",
];

gulp.task('browser-sync', function() {
    browser({
        proxy: proxy
    });
});

bourbon.with( f_sass + '/style.scss');
//sass
gulp.task('sass', () => {
  return gulp.src(f_sass + '**/*.scss')
    .pipe(plumber({
      errorHandler: notify.onError('<%= error.message %>')
    }))
    .pipe(sass({
      includePaths: bourbon.includePaths
    }))

    .pipe(pleeease({
      browsers: browsers,
      minifier: false, //変更
      mqpacker: true,
      rem: [root_font_px + "px"]
    }))
    .pipe(csscomb())
    .pipe(gulp.dest(f_css))
    //ブラウザリロード
    .pipe(browser.reload({
      stream: true
    }));
});

//cssComb実行
gulp.task('styles', () => {
    return gulp.src([f_css + "**/*.css", "!" + f_css + "min/**/*.css"])
        .pipe(csscomb())
        .pipe(gulp.dest(f_css));
});

//css構文チェック
gulp.task('csslint', () => {
    gulp.src([f_css + "**/*.css", "!" + f_css + "min/**/*.css"])
        .pipe(csslint())
        .pipe(csslint.reporter());
});

//スタイルガイド作成
gulp.task('guide', () => {
    gulp.src(f_sass + '**/*.scss').pipe(frontnote({
        css: '../css/style.css'
    }));
});

//HTML構文チェック
gulp.task('htmllint', () => {
    gulp.src(f_html + '**/*.html')
        .pipe(htmlhint())
        .pipe(htmlhint.reporter());
});

//JSのminify化
gulp.task("js", () => {
    gulp.src([f_js + "**/*.js", "!" + f_js + "min/**/*.js"])
        .pipe(plumber({
            errorHandler: notify.onError('<%= error.message %>')
        }))
        .pipe(uglify())
        .pipe(gulp.dest(f_js + "min"))
        //ブラウザリロード
        .pipe(browser.reload({
            stream: true
        }));
});

//jsチェック
gulp.task('jslint', () => {
    return gulp.src(f_js + '**/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

//画像圧縮
gulp.task('image', () => {
    return gulp.src([f_image_gulp + '**/*.+(jpg|jpeg|png|gif)'])
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{
                removeViewBox: false
            }],
            use: [pngquant()]
        }))
        .pipe(gulp.dest(f_image_min));
});
//svg圧縮
gulp.task('svgmin', () => {
    return gulp.src([f_image_gulp + '**/*.+(svg)'])
        .pipe(svgmin({
            progressive: true,
            svgoPlugins: [{
                removeViewBox: false
            }],
            use: [pngquant()]
        }))
        .pipe(gulp.dest(f_image_min));
});

//ベンダープレフィレクスとメディアクエリとコンブ
gulp.task('ple', () => {
    return gulp.src([f_css + "**/*.css", "!" + f_css + "min/**/*.css"])
        .pipe(plumber({
            errorHandler: notify.onError('<%= error.message %>')
        }))
        .pipe(pleeease({
            browsers: browsers,
            minifier: false, //変更
            mqpacker: true,
            rem: [root_font_px + "px"]
        }))
        .pipe(csscomb())
        .pipe(gulp.dest(f_css))
        .pipe(browser.reload({
            stream: true
        }));
});


gulp.task('browserify', () => {
    browserify(f_es6 + 'browserify/common.js', { debug: true })
        .transform(babelify, {presets: ['es2015']})
        .bundle()
        .on("error", function(err) { console.log("Error : " + err.message); })
        .pipe(source('common.js'))
        .pipe(gulp.dest(f_js + 'js/'))
});


gulp.task('babel', () => {
    gulp.src([f_es6 + '**/*.js', "!" + f_es6 + 'browserify/*'])
        .pipe(plumber({
            errorHandler: notify.onError('<%= error.message %>')
        }))
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(sourcemaps.write('maps', {
            includeContent: false,
            sourceRoot: '/public/resources/maps'
        }))
        .pipe(gulp.dest(f_js))

    gulp.src(f_es5 + '**/*.js')
        .pipe(gulp.dest(f_js))
});

gulp.task('move', () => {
    gulp.src(other + '**/*')
        .pipe(gulp.dest(f_html))
});

gulp.task('php', () => {

    gulp.src([f_php + "**/*.php"])
        .pipe(browser.reload({
            stream: true
        }))
        .pipe(gulp.dest(f_html))
});

gulp.task("default", ['sass', 'babel', 'browserify', 'image', 'svgmin', 'move', 'php', 'browser-sync'], () => {
    gulp.watch(f_sass + "**/*.scss", ['sass']);
    gulp.watch(f_es6 + '**/*.js', ['babel']);
    gulp.watch(f_es6 + 'browserify/**/*.js', ['browserify']);
    gulp.watch(f_es5 + '**/*.js', ['babel']);
    gulp.watch(f_php + '**', ['php']);
    gulp.watch(f_image_gulp + '**', ['image','svgmin']);
});
gulp.task("comp", ['styles', 'js']);
gulp.task("check", ['csslint', 'jslint']);
