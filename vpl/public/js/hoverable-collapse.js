$(document).ready(function() {
  $('.nav-link[data-bs-toggle="collapse"]').click(function() {
      var target = $(this).attr('href');
      $('.collapse').not(target).collapse('hide');
  });
});