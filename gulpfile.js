const gulp = require('gulp');
const uglify = require('gulp-uglify');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

// Minifiziere und optimiere CSS
function styles() {
  return gulp.src('assets/css/styles.css')
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('assets/css'));
}

// Minifiziere JavaScript
function minifyJS() {
  return gulp.src('assets/js/app.js')
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('assets/js'));
}

// Watch-Task
function watch() {
  gulp.watch('assets/css/styles.css', styles);
  gulp.watch('assets/js/app.js', minifyJS);
}

// Standard-Task
exports.default = gulp.series(
  gulp.parallel(styles, minifyJS),
  watch
);
