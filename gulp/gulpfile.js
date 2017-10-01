var gulp = require('gulp');
var bs = require('browser-sync');


gulp.task('server', function() {
  bs.init({
    proxy:'super-shop:90/Diploma'
  });
  gulp.watch("Diploma/*.php").on('change', bs.reload);
  gulp.watch("Diploma/css/*.css").on('change', bs.reload);
  gulp.watch("Diploma/cms/*.php").on('change', bs.reload);
  gulp.watch("Diploma/cms/css/*.css").on('change', bs.reload);
});
