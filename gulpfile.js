//////////////////////////////////////////////////////
// Required Modules
//////////////////////////////////////////////////////

/*
npm install --save-dev gulp typescript gulp-typescript gulp-util gulp-concat gulp-rename gulp-uglify gulp-ng-annotate gulp-typescript gulp-less gulp-clean-css gulp-autoprefixer browser-sync yargs gulp-connect-php gulp-load-plugins gulp-imagemin imagemin-pngquant gulp-task-listing gulp-plumber 
*/
var config = require('./gulpconfig')();
var gulp = require('gulp');
var util = require('gulp-util');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var ngAnnotate = require('gulp-ng-annotate');
var typeScript = require('gulp-typescript');
var less = require('gulp-less');
var cleanCss = require('gulp-clean-css');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var argv = require('yargs').argv;
var php = require('gulp-connect-php');
var $ = require('gulp-load-plugins')({
    lazy: true
});

var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

//////////////////////////////////////////////////////
// Dependencies
//////////////////////////////////////////////////////
gulp.task('cssdependencies', function() {
    return gulp
        .src(config.cssdependencies)
        .pipe(concat(config.libcssExport))
        .pipe(cleanCss())
        .pipe(gulp.dest(config.cssfolder));
});
gulp.task('jsdependencies', function() {
    return gulp
        .src(config.jsdependencies)
        .pipe(concat(config.libjsExport))
        .pipe(
            rename({
                suffix: '.min'
            })
        )
        .pipe(uglify())
        .pipe(gulp.dest(config.jsfolder));
});
gulp.task('fontsdependencies', function() {
    return gulp.src(config.fontsdependencies).pipe(gulp.dest(config.fontfolder));
});
gulp.task('installdeps', ['cssdependencies', 'jsdependencies']);

//////////////////////////////////////////////////////
// LESS
//////////////////////////////////////////////////////
gulp.task('imagemin', function() {
    return gulp
        .src('images/**')
        .pipe(
            imagemin({
                progressive: true,
                use: [pngquant()]
            })
        )
        .pipe(gulp.dest('imagemin'));
});

gulp.task('styles', function() {
    return gulp
        .src(config.lessCompile)
        .pipe($.plumber())
        .pipe($.less())
        .pipe(
            $.autoprefixer({
                browsers: ['last 2 version', '> 5%']
            })
        )
        .pipe(cleanCss())
        .pipe(gulp.dest(config.cssfolder))
        .pipe(
            browserSync.reload({
                stream: true
            })
        );
});
//////////////////////////////////////////////////////
// TYPESCRIPT
//////////////////////////////////////////////////////

//////////////////////////////////////////////////////
// WATCHERS
//////////////////////////////////////////////////////
gulp.task('less-watcher', function() {
    gulp.watch(config.lessWatch, ['styles']);
});

//////////////////////////////////////////////////////
// BROWSERSYNC
//////////////////////////////////////////////////////
gulp.task('php', function() {
    php.server({
        //base: config.serve.base,
        port: 8080,
        keepalive: true
    });
});
gulp.task('browser-sync', ['php'], function() {
    browserSync({
        proxy: '127.0.0.1:8080/' + config.serve.main,
        port: 8080,
        open: true,
        notify: true,
        ghostMode: {
            clicks: true,
            location: false,
            forms: true,
            scroll: true
        }
    });
});
gulp.task('run', ['styles', 'browser-sync'], function() {
    gulp.watch(config.lessWatch, ['styles']);
    gulp.watch(config.jsWatch).on('change', browserSync.reload);
    gulp.watch(config.htmlWatch).on('change', browserSync.reload);
});

gulp.task('runwatch', ['styles'], function() {
    gulp.watch(config.lessWatch, ['styles']);
});

//////////////////////////////////////////////////////
// Help
//////////////////////////////////////////////////////
gulp.task('help', function() {
    $.taskListing();
});
gulp.task('default', ['help']);
