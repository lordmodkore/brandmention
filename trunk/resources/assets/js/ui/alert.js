/**
 * Sweetalerts demo page
 */
(function ($) {
  'use strict';
  $('.demo10').on('click', function () {
    swal({
      title: 'Ajax request example',
      text: 'Submit to run ajax request',
      type: 'info',
      showCancelButton: true,
      closeOnConfirm: false,
      showLoaderOnConfirm: true,
    }, function () {
      setTimeout(function () {
        swal('Ajax request finished!');
      }, 2000);
    });
  });
})(jQuery);