(function($) {
    "use strict";

    $('#review-form').submit(function() {
      console.log('in here');
      var $form = $('#review-form');

      var formData = {
           'full_name'  : $form.find('input[name=full_name]').val(),
           'message'    : $form.find('textarea[name=message]').val(),
           'rating'     : $form.find('input[name=rating]:checked').val()
      };

      if( typeof formData['rating'] === 'undefined' )
      {
        alert("You must select a rating to continue");
      } else
      {
        $.post('/review/send', formData)
          .success(function(data) {
            $form.find('input, textarea').not('input[type="submit"]').val('');
            $form.find('input[type=radio])').prop('checked', false);
          })
          .error(function(data) {
            alert("Something wrong happend. Please try again later.")
          });
      }

      console.log(formData);
      event.preventDefault();
    });

})(jQuery);
