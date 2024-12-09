const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

function compileSass() {
    return gulp.src('./assets/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css/'))
        .pipe(cleanCSS())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('./assets/css/'))
        .pipe(browserSync.stream({ match: '**/*.css' })); // Chỉ inject CSS
}

function watch() {
    browserSync.init({
        proxy: 'http://127.0.0.1/'
    });

    gulp.watch('./assets/sass/**/*.scss', compileSass);
    gulp.watch('**/*.php').on('change', browserSync.reload);
}

exports.default = gulp.series(compileSass, watch);
