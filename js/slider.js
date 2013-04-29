$(function() {

  var counter = 0;

  $('#bigOrange').hide();
  $('#weCord').hide();
  $('#languageDirections').hide();

  $('#caseStudyNameTwo').hide();
  $('#caseStudyNameThree').hide();
  $('#caseStudyNameFour').hide();

  var caseStudyNames = new Array(
    "caseStudyNameOne", 
    "caseStudyNameTwo", 
    "caseStudyNameThree", 
    "caseStudyNameFour");

  var caseStudies = new Array(
    "inrTracker", 
    "weCord", 
    "bigOrange", 
    "languageDirections");

  $('#next').on('click', function() {
  	if (counter != 3) {
  		counter++; 
  	}else {
  		counter = 0;
  	}

		switch(counter) {
			case 0:
				console.log('0!');
				$('#' + caseStudies[3]).fadeOut();
				$('#' + caseStudies[0]).fadeIn();
        $('#' + caseStudyNames[3]).hide();
        $('#' + caseStudyNames[0]).show();
				break;
			case 1:
				console.log('1!');
				$('#' + caseStudies[0]).fadeOut();
				$('#' + caseStudies[1]).fadeIn();
        $('#' + caseStudyNames[0]).hide();
        $('#' + caseStudyNames[1]).show();
				break;		
			case 2:
				console.log('2!');
				$('#' + caseStudies[1]).fadeOut();
				$('#' + caseStudies[2]).fadeIn();
        $('#' + caseStudyNames[1]).hide();
        $('#' + caseStudyNames[2]).show();
				break;
			case 3:
				console.log('3!');
				$('#' + caseStudies[2]).fadeOut();
				$('#' + caseStudies[3]).fadeIn();
        $('#' + caseStudyNames[2]).hide();
        $('#' + caseStudyNames[3]).show();
				break;
		}

  	return false;
  });

  $('#previous').on('click', function() {
  	if (counter != 0) {
  		counter--; 
  	}else {
  		counter = 3;
  	}

		switch(counter) {
			case 0:
				console.log('0!');
				$('#' + caseStudies[0]).fadeIn();
				$('#' + caseStudies[1]).fadeOut();
        $('#' + caseStudyNames[0]).show();
        $('#' + caseStudyNames[1]).hide();
				break;
			case 1:
				console.log('1!');
				$('#' + caseStudies[1]).fadeIn();
				$('#' + caseStudies[2]).fadeOut();
        $('#' + caseStudyNames[1]).show();
        $('#' + caseStudyNames[2]).hide();
				break;		
			case 2:
				console.log('2!');
				$('#' + caseStudies[2]).fadeIn();
				$('#' + caseStudies[3]).fadeOut();
        $('#' + caseStudyNames[2]).show();
        $('#' + caseStudyNames[3]).hide();
				break;
			case 3:
				console.log('3!');
				$('#' + caseStudies[3]).fadeIn();
				$('#' + caseStudies[0]).fadeOut();
        $('#' + caseStudyNames[3]).show();
        $('#' + caseStudyNames[0]).hide();
				break;
		}

  	return false;
  });

  /*hide the parts of the reviews
  that are too long*/
  $('#orangeMoreView').hide();
  $('#langMoreView').hide();
  $('#processMoreView').hide();
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

  /* for the hire page: */

  var topNav = new Array(
    "ideaH",
    "businessH",
    "contractH",
    "learnH"
    );

  var hireSections = new Array(
    "custom",
    "conversion",
    "seo",
    "learn",
    "myProcess",
    "lean",
    "fast",
    "mobile",
    "market",
    "hype",
    "sales",
    "motivate",
    "trust");

  //on default have the h1 say this:
  $('#hireHeading').html($("#" + topNav[0]).html());

  //on default have this part 
  //of the topNav be highlighted
  $("#" + topNav[0]).addClass('highlight');

  //on default have this subject is set
  $("input[name='subject']").val("build my idea");

  /*
  change the hire sections shown
  change the h1 tag
  change the highlighting of the nav*/
  $('#ideaH').on('click', function() {
    
    //remove highlighting of all top nav items
    for (var i=0; i<topNav.length; i++) {
      $("#" + topNav[i]).removeClass('highlight');
    }

    //add highlighting to specific item
    $("#" + topNav[0]).addClass('highlight');

    //change subject to
    $("input[name='subject']").val("build my idea");

    //show all hire sections
    for (var i=0; i<hireSections.length; i++) {
      $("#" + hireSections[i]).show();
    }

    //hide one part of the hire section
    $("#" + hireSections[3]).hide();

    //over ride the h1 and show this
    $('#hireHeading').html($("#" + topNav[0]).html());

    return false;
  
  });

  /*
  change the hire sections shown
  change the h1 tag
  change the highlighting of the nav*/
  $('#businessH').on('click', function() {
    
    //remove highlighting of all top nav items
    for (var i=0; i<topNav.length; i++) {
      $("#" + topNav[i]).removeClass('highlight');
    }

    //add highlighting to specific item
    $("#" + topNav[1]).addClass('highlight');

    //change subject to
    $("input[name='subject']").val("business needs");

    //show all hire sections
    for (var i=0; i<hireSections.length; i++) {
      $("#" + hireSections[i]).show();
    }

    //hide two parts of the hire section
    $("#" + hireSections[3]).hide();
    $("#" + hireSections[4]).hide();

    //over ride the h1 and show this
    $('#hireHeading').html($("#" + topNav[1]).html());

    return false;
  
  });
  
  /*
  change the hire sections shown
  change the h1 tag
  change the highlighting of the nav*/
  $('#contractH').on('click', function() {
    
    //remove highlighting of all top nav items
    for (var i=0; i<topNav.length; i++) {
      $("#" + topNav[i]).removeClass('highlight');
    }

    //add highlighting to specific item
    $("#" + topNav[2]).addClass('highlight');

    //change subject to
    $("input[name='subject']").val("contract work");

    //show all hire sections
    for (var i=0; i<hireSections.length; i++) {
      $("#" + hireSections[i]).show();
    }

    //hide two parts of the hire section
    $("#" + hireSections[3]).hide();
    $("#" + hireSections[4]).hide();

    //over ride the h1 and show this
    $('#hireHeading').html($("#" + topNav[2]).html());

    return false;
  
  });
  
  /*
  change the hire sections shown
  change the h1 tag
  change the highlighting of the nav*/
  $('#learnH').on('click', function() {
    
    //remove highlighting of all top nav items
    for (var i=0; i<topNav.length; i++) {
      $("#" + topNav[i]).removeClass('highlight');
    }

    //add highlighting to specific item
    $("#" + topNav[3]).addClass('highlight');

    //change subject to
    $("input[name='subject']").val("learning web dev");

    //hide all hire sections
    for (var i=0; i<hireSections.length; i++) {
      $("#" + hireSections[i]).hide();
    }

    //show one part of the hire section
    $("#" + hireSections[3]).show();

    //over ride the h1 and show this
    $('#hireHeading').html($("#" + topNav[3]).html());

    return false;
  
  });



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