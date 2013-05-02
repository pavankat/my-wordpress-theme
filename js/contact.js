$(function() {
  
  //contact form ajax
  $('#contact').submit(function(event) {

    /* stop form from submitting normally */
    event.preventDefault();

    var values = $(this).serialize();
    console.log("JavaScript serialize(): " + values);
    /* Send the data using post 
    and put the results in a div */
    var request = $.ajax({
      url: "/wp-content/themes/ventureLateralBootstrap/contact_form.php",
      type: "POST",
      data: values
    });
     
    request.done(function(data) {
      $("#contact").fadeOut();

      $("#message").html(data);
    });
     
    request.fail(function(jqXHR, textStatus) {
      console.log( "Request failed: " + textStatus );
    });

  });

});