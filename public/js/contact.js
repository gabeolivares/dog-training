(function($) {
    "use strict";

    $('form').submit(function(event) {
      console.log("submitting stuff");

console.debug($(this).find('input'));
      var formData = {
           'first_name'    : $(this).find('input[name=first_name]').val(),
           'last_name'     : $(this).find('input[name=last_name]').val(),
           'email'         : $(this).find('input[name=email]').val(),
           'comments'      : $(this).find('textarea[name=comments]').val()
      };

      if(isEmail(formData['email']))
      {
        $.post('/contact/send', formData)
          .success(function(data) {
            console.log("success");
            console.log(data);
          })
          .error(function(data) {
            console.log("error");
            console.log(data);
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
