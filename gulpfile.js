var pkg = require('./package.json');
var gulp = require('gulp');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var DEV_DIR = './src';
var BUILD_DIR = './dist';

gulp.task('js', function () {
    gulp.src(DEV_DIR + '/js/main.js')
        .pipe(uglify())
        .pipe(rename('bundle.js'))
        .pipe(gulp.dest(BUILD_DIR + '/js'));
});

gulp.task('css', function () {
    gulp.src(DEV_DIR + '/scss/main.scss')
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(rename('style.css'))
        .pipe(gulp.dest(BUILD_DIR + '/css'));
});

gulp.task('default', ['js', 'css']);

gulp.task('watch', function(){
    gulp.watch(DEV_DIR + '/js/**/*.js', ['js']);
    gulp.watch(DEV_DIR + '/scss/**/*.scss', ['css']);
});
