/**
 * Form wizard demo
 */
(function ($) {
  'use strict';

  // Credit card form
  // $('#wizardForm').card({
  //   container: '.credit-card'
  // });

  // Checkbo plugin
  $('.checkbo').checkBo();

  // Jquery validator
  var $validator = $('#wizardForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
        minlength: 3
      },
      name: {
        required: true,
        minlength: 3
      },
      password: {
        required: true,
        minlength: 6
      },
      cpasswordfield: {
        required: true,
        minlength: 6,
        equalTo: '#password'
      },
    }
  });

  function checkValidation() {
    var $valid = $('#wizardForm').valid();
    if (!$valid) {
      $validator.focusInvalid();
      return false;
    }
  }
  function lastStep(){
    return false;
  }
  // Twitter bootstrap wizard
  $('#rootwizard').bootstrapWizard({
    tabClass: '',
    'nextSelector': '.button-next',
    'previousSelector': '.button-previous',
    onNext: checkValidation,
    onLast: lastStep,
    onTabClick: checkValidation
  });
})(jQuery);