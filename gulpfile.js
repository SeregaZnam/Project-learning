const gulp           = require('gulp');
const watch          = require('gulp-watch');
const less           = require('gulp-less');
const path           = require('path');
const LessAutoprefix = require('less-plugin-autoprefix');
const autoprefix     = new LessAutoprefix({ browsers: ['last 2 versions'] });
const browserSync    = require('browser-sync');
const babel          = require('gulp-babel');
const cssnano        = require('gulp-cssnano');
const rename         = require('gulp-rename');
const fileinclude    = require('gulp-file-include');

gulp.task('less', () => {
  gulp.src('./app/less/**/*.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ],
      plugins: [autoprefix]
    }))
    .pipe(cssnano())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./dist/css'))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('fileinclude', function() {
  gulp.src('app/**/*.html')
    .pipe(fileinclude({
      prefix: '@@',
      basepath: '@file'
    }))
    .pipe(gulp.dest('./dist'))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('css-libs', ['less'], () => {
  gulp.src('dist/css/styles.css')
    .pipe(cssnano())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/css'));
});

gulp.task('browser-sync', () => {
	browserSync({
		server: {
			baseDir: 'dist'
		},
		notify: false
	})
});

gulp.task('scripts', () => {
	gulp.src('app/**/*.js')
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(gulp.dest('./dist'))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('watch', ['browser-sync', 'less', 'fileinclude', 'scripts'], () => {
	gulp.watch('app/less/**/*.less', ['less']);
	gulp.watch('app/**/*.html', ['fileinclude']);
	gulp.watch('app/js/**/*.js', ['scripts']);
});