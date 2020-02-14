// Gulp.js configuration
'use strict';

const gulp = require('gulp');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass');


//var reload = browserSync.reload;
// compile scss to css

gulp.task('sass', function(){
	return gulp.src('./sass/**/*.scss')
		.pipe(plumber())
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('./'))

});

gulp.task('sass-watch', function () {
	gulp.watch('./sass/**/*.scss', gulp.series('sass'));
});

