


$(document).ready(function(){


  // slideMenu
  var controller = new slidebars();
  controller.init();

// Toggle Slidebars
$( '.toggle-id-1' ).on( 'click', function ( event ) {
  event.stopPropagation();
  event.preventDefault();

  // Toggle the Slidebar with id 'id-1'
  controller.toggle( 'id-1' );
} );

$( '.toggle-id-2' ).on( 'click', function ( event ) {
  event.stopPropagation();
  event.preventDefault();

  // Toggle the Slidebar with id 'id-2'
  controller.toggle( 'id-2' );
} );

  googleTranslator();


  // Search Bar
  $('#searchBtnHP').on('click', function(event) {
      event.preventDefault();
      window.location.href = 'https://berkeleycollege.edu/search-results.html';
  });
    
  // Dropdown links color 
  var dropDownBG = $(".dropdown-menu");

  dropDownBG.mouseenter(function(){
    $(this).parent().addClass('nav-link-hover');
    $(this).parent().children().css('color','#172e81');
  });

  dropDownBG.mouseleave(function(){
    $(this).parent().removeClass('nav-link-hover');
    $(this).parent().children().css('color','#fff');
  });
  
  //new styles for schema new elements
  var dropDownLinkDesk = $(".dropdownLinkDesk");
  var dropDownDesk = $(".dropdownMenuDesk");
  
  dropDownLinkDesk.mouseenter(function(){
    $(this).children().children().css('color','#172e81');
  })

  dropDownLinkDesk.mouseleave(function(){ 
    $(this).children().children().css('color','#fff');
  })

  dropDownDesk.mouseenter(function(){
     $(this).parent().children().children().css('color','#172e81');
  });

  dropDownDesk.mouseleave(function(){
    $(this).parent().children().children().css('color','#fff');
  });


// Skip to content
  var skipLinks = document.createElement("a");
  skipLinks.textContent ='Skip to Main Content';
  skipLinks.setAttribute("class", "skip-main");
  skipLinks.setAttribute("href", "#degreeCert");
  skipLinks.setAttribute("tabindex", "0");
  skipLinks.style.top='-160px';
  //document.body.insertBefore(skipLinks, document.body.firstChild);





});



// Google translate plugin copy
$(window).on('resize', function(){
    googleTranslator();
});

function googleTranslator(){
  var win = $(window);
  if (win.width() <=576) {
    $('#google_translate_element1').detach().appendTo('#google_translate_element3');                          
  }
}


// Menu bar effect
$(window).on('scroll', function () {
  if ($(window).scrollTop() >= 430) {
    $(".mainLogo img").removeClass("grow").addClass("decrease");
    $("#menu").addClass("moveDown").removeClass("moveTop");
  } 
  else{
    $(".mainLogo img").removeClass("decrease").addClass("grow");
    $("#menu").addClass("moveTop").removeClass("moveDown");
  }
});


//livechat Trigger
$( "#lcBtnLink" ).click(function() {
    $( ".livPersTrig div" ).trigger( "click" );
});

$( "#lcBtnLinkTop" ).click(function() {
    $( ".livPersTrig div" ).trigger( "click" );
});

$( "#lcBtnLinkBottom" ).click(function() {
        $( ".livPersTrig div" ).trigger( "click" );
});



//Scroll to top
backToTopBtn = document.getElementById("toTopBtn");

if (backToTopBtn !== null) {

  backToTopBtn.innerHTML = '<i class="fas fa-angle-up"></i>'; 

  window.onscroll = function() {scrollFunction()};

  backToTopBtn.addEventListener("click", function(){
      document.body.scrollTo({top: 0, behavior: 'smooth'}); // For Safari
    document.documentElement.scrollTo({top: 0, behavior: 'smooth'}); // For Chrome, Firefox, IE and Opera
  })

}

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
}



//sticky CTAs for mobile
window.onload = function(){
  const alert = document.querySelector("#msgAlert");
  const ctas = document.querySelector("#mobileCtaGroup");
     
var header = document.getElementsByClassName("mobileCtas");

if (header.length>0) {
  window.onscroll = function() { makingItSticky() };
  var sticky = header[0].offsetTop;
}


function makingItSticky() {

  if (ctas) {
  var ctasHeight = ctas.offsetHeight;
  } else {
  var ctasHeight = 0;
  }

  Array.from(header).forEach(function (el) {

    if (window.pageYOffset > sticky) {
          el.classList.add("sticky");
    } else {
      el.classList.remove("sticky");
    }
           
    if (el.classList.contains("mobNBig")) {
      el.style.top = ctasHeight+alert.offsetHeight+'px';
       // console.log(alert.offsetHeight)
    }
    
  });
}

};

//cookie functions
function setCookie(cname, cvalue, exdays) {
   var d = new Date();
   d.setTime(d.getTime() + (exdays*24*60*60*1000));
   var expires = "expires="+ d.toUTCString();
   document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
   var name = cname + "=";
   var decodedCookie = decodeURIComponent(document.cookie);
   var ca = decodedCookie.split(';');
   for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
         c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
         return c.substring(name.length, c.length);
      }
   }
   return "";
}