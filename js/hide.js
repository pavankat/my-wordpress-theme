$(function() {
  
  /*hide the parts of the reviews
  that are too long*/
  $('#orangeMoreView').hide();
  $('#langMoreView').hide();

  /*hide in the process*/
  $('#processMoreView').hide();

  /*hide in the about*/
  $('#collegeMoreView').hide();

  /*when click on see more link, more 
  of the review gets shown and the link
  disappears*/ 
  $('#orangeMore').on('click', function() {
  	$('#orangeMore').hide();
  	$('#orangeMoreView').show();

  	return false;
  });

  /*when click on see less link, more 
  of the review gets hidden and the see
  more link appears*/ 
  $('#orangeLess').on('click', function() {
  	$('#orangeMoreView').hide();
  	$('#orangeMore').show();

  	return false;
  });

  /*when click on see more link, more 
  of the review gets shown and the link
  disappears*/ 
  $('#langMore').on('click', function() {
  	$('#langMore').hide();
  	$('#langMoreView').show();

  	return false;
  });

  /*when click on see less link, more 
  of the review gets hidden and the see
  more link appears*/ 
  $('#langLess').on('click', function() {
  	$('#langMoreView').hide();
  	$('#langMore').show();
  	
  	return false;
  });

  /*when click on see more link, more 
  of the process gets shown and the link
  disappears*/ 
  $('#processMore').on('click', function() {
    $('#processMore').hide();
    $('#processMoreView').show();

    return false;
  });

  /*when click on see less link, more 
  of the process gets hidden and the see
  more link appears*/ 
  $('#processLess').on('click', function() {
    $('#processMoreView').hide();
    $('#processMore').show();
    
    return false;
  });

  //on default
  $('#collegeLess').hide();

  /*when click on see more link, more 
  of the college gets shown and the link
  disappears*/ 
  $('#collegeMore').on('click', function() {
    $('#collegeMore').hide();
    $('#collegeMoreView').show();
    $('#collegeLess').show();

    return false;
  });

  /*when click on see less link, more 
  of the college gets hidden and the see
  more link appears*/ 
  $('#collegeLess').on('click', function() {
    $('#collegeLess').hide();
    $('#collegeMoreView').hide();
    $('#collegeMore').show();
    
    return false;
  });

});