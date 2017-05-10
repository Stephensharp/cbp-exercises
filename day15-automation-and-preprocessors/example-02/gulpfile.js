// load everything
var gulp = require('gulp');

var browserSync = require('browser-sync').create();
var clean = require('gulp-clean');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var watch = require('gulp-watch');
var autoprefixer = require('autoprefixer');
var postcss = require('gulp-postcss');

// deletes css files
gulp.task('cssclean', function(){
	return gulp.src('*.css', { read: false }).pipe(clean());
});

// CSS compilation + deletes css files first with previously defined task
gulp.task('csscompile', ['cssclean'], function(){
	return gulp
		.src('index.scss') // this is the source of for compilation
		.pipe(sass().on('error', sass.logError))
		.pipe(postcss([autoprefixer()])) // tell us about a problem
		.pipe(sourcemaps.init()) // creates a sourcemap
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./')) // destination of the result
		.pipe(browserSync.stream()); // tell browsersync to reload CSS (injects)
		
});

gulp.task('develop', ['csscompile'], function(){
	browserSync.init({ // initalize Browsersync
		// set what files be served

    proxy: {
        target: 'http://www.cbp-exercises.local/php'
    },
    host: 'www.cbp-exercises.local',
    port: 3000,

		files: ['*.css', '*.html', '**/*.php'] // watch for changes all files named anything.css and anything.html in the same folder gulpfile.js is located
	});
	gulp.watch('*.scss', ['csscompile']); // watch for changes in scss
});

gulp.task('default', ['develop']); // set develop as a default task
