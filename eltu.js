$(document).ready(function(){
  
  //TODO: use random to choose between 0, 300, 600 for image_x0, image_x1, image_x2
  var image_x0 = 0; var image_x1 = 300; var image_x2 = 600;
  var image_y = 0;
  
  //TODO: Loop all of this
  
  //initialize audio and mp3 name
  var audionum = 1;
  /*var audioElement = document.createElement('audio');      
  audioElement.setAttribute('src', audionum+'.mp3');
  audioElement.setAttribute('autoplay', 'autoplay');
  $.get();
  audioElement.addEventListener("load", function(){
    audioElement.play();
    }, true);
  
  //Repeat sound button   
  $("#play").click(function(){
    audioElement.play();
  });*/
  
  //GUI Squares

  $(".choice").css("background-image","url("+'"'+"lessons/Na'vi Numbers 1-8/lesson.jpg"+'"'+")");
  $("#choice_a").css("background-position",image_x0+"px "+image_y+"px");
  $("#choice_b").css("background-position",image_x1+"px "+image_y+"px");
  $("#choice_c").css("background-position",image_x2+"px "+image_y+"px");
  
  //What to do with the GUI Squares
  $(".incorrect").mousedown(function(){
    $(this).css("border","4px solid red");
  });
  $(".incorrect").mouseup(function(){
    $(this).css("border","2px solid navy");
  });
  $(".correct").mousedown(function() {
     $(this).css("border","4px solid lime");
  });
  $(".correct").mouseup(function() {
      $(this).css("border","2px solid navy");
  });
  
  //the following on click for .choice
  //TODO: Green Circle / Red X, Feedback sounds
  //    make divs to go on top of the current divs and set their css to invisible, use jquery to make them visible
  //TODO: Reset
  
  //audionum += 1;
  //image_y += 300;


});