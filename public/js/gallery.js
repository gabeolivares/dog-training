(function($) {
    "use strict";

    var URL = '//res.cloudinary.com/thebarkinbonesinn/image/upload';

    var buildImageHtml = function(imageData, idx) {
      var $col = $('<div class="col-lg-4 col-sm-6"></div>');
      var $a = $('<a href="#galleryModal" class="gallery-box" data-toggle="modal"></a>');
      var $img = $('<img class="img-responsive" alt="Image ' + idx + '"/>');

      $a.data('src', URL + '/f_auto/v' + imageData.version + '/' + imageData.public_id + '.' + imageData.format);
      $img.attr('src', URL + '/w_610,h_410,f_auto/v' + imageData.version + '/' + imageData.public_id + '.' + imageData.format);

      $a.append($img);
      $a.append(
          '<div class="gallery-box-caption">' +
          '   <div class="gallery-box-content">' +
          '     <div>' +
          '        <i class="icon-lg ion-ios-search"></i>' +
          '     </div>' +
          '   </div>' +
          '</div>'
        );

      $col.append($a);
      return $col;
    };

    $('#galleryModal').on('show.bs.modal', function (e) {
       $('#galleryImage').attr("src",$(e.relatedTarget).data("src"));
    });

    $.ajax({
      method: 'GET',
      url: '/data.json'
    }).then(function(data)
    {
      var $container = $('#gallery-container');
      $container.html('');

      for(var i = 0; i < data.length; i++)
      {
        $container.append(buildImageHtml(data[i], i));
      }
    })
})(jQuery);
