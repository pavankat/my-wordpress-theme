$(function() {

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

});