$(document).ready(function(){


//Center Title Course Schedules
$("#CSTitle").parent().addClass("centerBlock");

//removing padding top on the 2nd content div in CS
$("#CSUnderGrad").parent().parent().parent().parent().css("padding-top","0");



// by the numbers trigger
if( $('#byTheNumbers2').length ) {

  var number1 = $('#byTheNumbers1').text();
  var number2 = $('#byTheNumbers2').text();
  var number3 = $('#byTheNumbers3').text();

  var waypoint = new Waypoint({
    element: document.getElementById('byTheNumbers2'),
    handler: function() {
      numAnimate(number1, number2, number3);
    },
    offset: 700
  });

}


// slick slider
 if( $('.onlineSlider').length ) {
    $('.onlineSlider').slick({
      dots: true,
      arrows: false,
      useCSS: true
    });
  }



});




// by the numbers number animation
var numAnimate = function(num1, num2, num3){

  var options = {
    useEasing: false, 
    useGrouping: true, 
    separator: ',', 
    decimal: '.', 
  };

  var byTheNumbers1 = new CountUp('byTheNumbers1', 0, num1, 0, 0.75, options);

   if (!byTheNumbers1.error) {
  byTheNumbers1.start();

  } else {
  console.error(byTheNumbers1.error);
  }

  var byTheNumbers2 = new CountUp('byTheNumbers2', 0, num2, 0, 1, options);
  if (!byTheNumbers2.error) {
  byTheNumbers2.start();
  } else {
  console.error(byTheNumbers2.error);
  }

  var byTheNumbers3 = new CountUp('byTheNumbers3', 0, num3, 0, 1.5, options);
  if (!byTheNumbers3.error) {
  byTheNumbers3.start();
  } else {
  console.error(byTheNumbers3.error);
  }

}



// BTS img effect
  $('.btsImg')
    // tile mouse actions
    .on('mouseover', function(){
      $(this).children('img').css({'transform': 'scale(1.05)'});
    })
    .on('mouseout', function(){
      $(this).children('img').css({'transform': 'scale(1)'});
  })

