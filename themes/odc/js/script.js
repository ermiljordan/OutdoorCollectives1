(function($) {
  $('#subscribe').on('click', function() {
    event.preventDefault();
    $('.wpcf7-email').toggleClass('search-visble');
  })

  // $('.wpcf7-submit').on('blur keyup', function() {
  //   if($('.wpcf7-email').valid()) {
  //     $('.wpcf7-submit').prop('disabled', false);
  //   } else {
  //     $('.wpcf7-submit').prop('disabled', 'disabled');
  //   }
  // })
})(jQuery);