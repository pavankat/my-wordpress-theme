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

});