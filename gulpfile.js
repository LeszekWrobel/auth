var gulp = require('gulp'),
    // less = require('gulp-less'),
    livereload = require('gulp-livereload');

// gulp.task('less', function() {
//   gulp.src('less/*.less')
//     .pipe(less())
//     .pipe(gulp.dest('css'))
//     .pipe(livereload());
//});

//gulp.task('test', function() {
 // console.log('test gulpa');
//});

 gulp.task('watch', function() {
   livereload.listen();
   gulp.watch('public/*', livereload.reload); //  gulp.watch('blog/*.less', ['less']);
 });

// gulp.task('watch', function() {
//   livereload.listen();
//   gulp.watch('blog/*'); //  gulp.watch('blog/*.less', ['less']);
// });//
