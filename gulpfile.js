/* File: gulpfile.js */

// grab our gulp packages
var gulp   = require('gulp'),
    jshint = require('gulp-jshint'),
    sass   = require('gulp-sass'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    order  = require('gulp-order'),
    gutil  = require('gulp-util');

// create a default task and just log a message
gulp.task('default', function() {
  return gutil.log('Gulp is running!')
});

// define the default task and add the watch task to it
gulp.task('default', ['watch']);

// configure the jshint task
gulp.task('jshint', function() {
  return gulp.src('js/**/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('build-css', function() {
  return gulp.src('scss/**/*.scss')
    .pipe(order(['scss/abase.scss', 'scss/**/*.scss']))
    .pipe(concat('main.css'))
    .pipe(sass())
    .on('error', function(err) {
      notify().write(err);
      this.emit('end');
    })
    .pipe(gulp.dest('public/assets/stylesheets'));
});

gulp.task('build-js', function() {
  return gulp.src('js/**/*.js')
    .pipe(concat('bundle.js'))
    //only uglify if gulp is ran with '--type production'
    .pipe(gutil.env.type === 'production' ? uglify() : gutil.noop()) 
    .on('error', function(err) {
      notify().write(err);
      this.emit('end');
    })
    .pipe(gulp.dest('public/assets/javascript'));
});

gulp.task('build', function() {
  gulp.start('build-js');
  gulp.start('build-css');
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
  gulp.watch('js/**/*.js', ['jshint', 'build-js']);
  gulp.watch('scss/**/*.scss', ['build-css']);
});
