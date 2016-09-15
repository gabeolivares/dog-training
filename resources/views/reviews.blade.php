@extends('layout')

@section('head')
@stop

@section('content')
<section id="review">
  <div id="reviews-container" style="display: none;">
    <table class="table">
      <thead>
        <tr>
          <td>Image</td>
          <td>Full Name</td>
          <td>Message</td>
          <td>Rating</td>
          <td>Reviewed On</td>
          <td>-</td>
        </tr>
      </thead>

      <tbody>
      </tbody>
    </table>

  </div>

  <div id="no-reviews">
    <h2>There are currently no reviews.</h2>
  </div>
</section>
@stop

@section('footer')
<script>
var database, reviewsRef;

var buildData = function(key)
{
  var $columns = $('#' + key).find('td:not(".buttons")');
  var data = {};

  $columns.each(function(i, item) {
    var key = $(item).data('key');
    var val = $(item).html();

    if ( key === 'rating' ){
      val = $(item).find('input[name*=rating]:checked').val()
    }

    data[key] = val;
  });

  return data;
}

function deleteReview(key)
{
  database.ref('/reviews/' + key).remove().then(function() {
    $('#' + key).remove();

    if( $('#reviews-container').find('tbody tr').length == 0 )
    {
      $('#reviews-container').hide();
      $('#no-reviews').show();
    }
  });
}

function approveReview(key)
{
  var data = buildData(key);
  data['approved'] = true;
console.log(data);

  database.ref('/reviews/' + key).update(data).then(function() {
    $('#' + key).find('button.approve').remove();
  });
}

var renderReview = function(data)
{
  $('#no-reviews').hide();

  var $reviewsContainer = $('#reviews-container');
  $reviewsContainer.show();

  var review = data.val();

  var buttons = '<button class="btn btn-danger remove" onclick="deleteReview(\'' + data.key + '\')">X Remove</button>';
  if( review.approved !== true )
  {
    buttons += '<button class="btn btn-success approve" onclick="approveReview(\'' + data.key + '\')">+ Approve</button>';
  }

  var html =
    '<tr id="' + data.key + '">' +
      '<td data-key="image">' + review.image + '</td>' +
      '<td data-key="fullName">' + review.fullName + '</td>' +
      '<td data-key="message">' + review.message + '</td>' +
      '<td data-key="rating" class="rating-column">' +
        '<fieldset class="rating">' +
          '<input type="radio" id="star5' + data.key + '" name="rating' + data.key + '" value="5" ' + (review.rating == 5 ? 'checked' : '') + '/><label for="star5' + data.key + '" title="Rocks!">5 stars</label>' +
          '<input type="radio" id="star4' + data.key + '" name="rating' + data.key + '" value="4" ' + (review.rating == 4 ? 'checked' : '') + '/><label for="star4' + data.key + '" title="Pretty good">4 stars</label>' +
          '<input type="radio" id="star3' + data.key + '" name="rating' + data.key + '" value="3" ' + (review.rating == 3 ? 'checked' : '') + '/><label for="star3' + data.key + '" title="Meh">3 stars</label>' +
          '<input type="radio" id="star2' + data.key + '" name="rating' + data.key + '" value="2" ' + (review.rating == 2 ? 'checked' : '') + '/><label for="star2' + data.key + '" title="Kinda bad">2 stars</label>' +
          '<input type="radio" id="star1' + data.key + '" name="rating' + data.key + '" value="1" ' + (review.rating == 1 ? 'checked' : '') + '/><label for="star1' + data.key + '" title="Sucks big time">1 star</label>' +
        '</fieldset>' +
      '</td>' +
      '<td data-key="reviewed_on">' + review.reviewed_on + '</td>' +
      '<td class="buttons">' + buttons + '</td>' +
    '</tr>';

  $reviewsContainer.find('tbody').append(html);
};

$(document).ready(function() {
  database = firebase.database();
  reviewsRef = database.ref('reviews');

  reviewsRef.on('child_added', renderReview);

  // Create new review via ajax
  // var data = {
  //   fullName: 'John Doe',
  //   message: 'This person is very good, love her!'
  // };
  //
  // var newKey = database.ref().child('reviews').push().key;
  //
  // // this returns a promise
  // var review = database.ref('/reviews/' + newKey).set(data);
});
</script>
@stop
