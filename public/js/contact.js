(function($) {
    "use strict";

    $('#contact-form').submit(function(event) {
      var $form = $(this);

      var formData = {
           'first_name'    : $form.find('input[name=first_name]').val(),
           'last_name'     : $form.find('input[name=last_name]').val(),
           'email'         : $form.find('input[name=email]').val(),
           'comments'      : $form.find('textarea[name=comments]').val()
      };

      if(isEmail(formData['email']))
      {
        $.post('/contact/send', formData)
          .success(function(data) {
            $form.find('input, textarea').not('input[type="submit"]').val('');
            $form.find('.alert-success').show();
          })
          .error(function(data) {
            $form.find('.alert-danger').show();
          });
      } else {
        alert("email is invalid");
      }

      console.log(formData);
      event.preventDefault();
    });

    function isEmail(email)
    {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }

})(jQuery);
