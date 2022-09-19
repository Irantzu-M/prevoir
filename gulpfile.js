//Requires
const gulp = require('gulp');
const sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();
//Variables
var source = 'src/scss/**/*.scss';
var dest = 'assets/css';
//compile scss into css
function style() {
    return gulp.src(source)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error',sass.logError))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(dest))
    .pipe(browserSync.stream());
}

function watch() {
    browserSync.init({
        proxy: {
            target: "prevoir.desarrollo.com",
            ws: true
        }
    });
    gulp.watch(source, style)
    gulp.watch('./*/*.html').on('change',browserSync.reload);
    gulp.watch('./*.php').on('change',browserSync.reload);
    gulp.watch('./*/*.php').on('change',browserSync.reload);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
}

exports.watch = watch;
exports.style = style;