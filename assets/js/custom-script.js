
$('.carousel').carousel({
  interval: 8000,
});

//=====Slick Slider setting Js======
// Init AOS
function aos_init() {
  AOS.init({
    duration: 600,
    easing: "ease-in-out",
    once: true,
    mirror: false
  });
}

$(window).on('load', function() {
  aos_init();
});
// Web and mobile menu-----------------------------------
$(document).ready(function() {
"use strict";
$('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
$('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
// $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">&nbsp;</a>");
$(".menu > ul > li").hover(function(e) {
if ($(window).width() > 943) {
  $(this).children("ul").stop(true, false).fadeToggle(150);
  e.preventDefault();
}
});
});
// $(".menu > ul > li").click(function() {
// if ($(window).width() <= 943) {
//   $(this).children("ul").fadeToggle(150);
// }
// });
// $(".menu-mobile").click(function(e) {
// $(".menu > ul").toggleClass('show-on-mobile');
// e.preventDefault();
// });
// });

// $(window).resize(function() {
// $(".menu > ul > li").children("ul").hide();
// $(".menu > ul").removeClass('show-on-mobile');
// });
// end web and mobile menu-------------------------------------------

$(window).scroll(function() {
if ($(document).scrollTop() > 50) {
$('#header').addClass('shrink');
$('#header').addClass('megaMenu');
//$('nav').addClass('menu-mobile');

} else {
$('#header').removeClass('shrink');
$('#header').removeClass('megaMenu');
//$('nav').removeClass('menu-mobile');
}
});


// tabs
var tabLinks = document.querySelectorAll(".tablinks");
var tabContent = document.querySelectorAll(".tabcontent");


tabLinks.forEach(function(el) {
  el.addEventListener("click", openTabs);
});


function openTabs(el) {
  var btnTarget = el.currentTarget;
  var name = btnTarget.dataset.name;

  tabContent.forEach(function(el) {
      el.classList.remove("active");
  });

  tabLinks.forEach(function(el) {
      el.classList.remove("active");
  });

  document.querySelector("#" + name).classList.add("active");
  
  btnTarget.classList.add("active");
}


$(".open-btn").click(function(){
  $(".btn-list").fadeToggle("fast");
});

// Customer logo
$(document).ready(function(){
$('.customer-logos').slick({
slidesToShow: 6,
Infinity:true,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 2000,
arrows: false,
dots: false,
pauseOnHover: false,
responsive: [{
    breakpoint: 1024,
    settings: {
    slidesToShow: 4,
    slidesToScroll: 4,
    //infinite: true,
    //dots: true
    }
  },
{
    breakpoint: 768,
    settings: {
        slidesToShow: 3
    }
}, {
    breakpoint: 520,
    settings: {
        slidesToShow: 2
    }
}]
});
});

//Testimonilal setting

$(document).ready(function($){
var $slickElement = $('.slideshow');
$slickElement.slick({
autoplay: true,
arrows: false,
dots: false,
speed:1000,
autoplaySpeed: 2000,
slidesToShow: 1,
Infinity:true,
slidesToScroll: 1,
responsive: [{
  breakpoint: 768,
  settings: {
      slidesToShow: 1
  }
}, {
  breakpoint: 520,
  settings: {
      slidesToShow: 1
  }
}]
});

});


// Smooth scrolling for any links that point to an anchor on the same page
 $('.anchorLink').click(function(){
  $('html, body').animate({
      scrollTop: $( $(this).attr('href')).offset().top - 60
  }, 700,);
  return false;
  });

//=====Scroll Bottom to Top Js======
  
$(document).ready(function () {
  $(window).scroll(function () {
    if($(this).scrollTop() > 786){
      $('#backToTop').fadeIn();
    }else{
      $('#backToTop').fadeOut();
    }
  });

  $('#backToTop').click(function (){
    $("html, body").animate({
      scrollTop:0
    }, 600);
    return false;
  })
});
 

// Cookies alert

jQuery(document).ready(function($) {
  
  //check to see if the submited cookie is set, if not check if the popup has been closed, if not then display the popup
  if( getCookie('popupCookie') != 'accepted' && getCookie('popupCookie') != 'customised' ){ 
      $('.popup-overlay').css("display", "flex").hide().fadeIn();
  } else {
    // $('.popup-overlay').show(0).delay(3000);
  }
  
  $('a.customise').click(function(){
    $('.popup-overlay').fadeOut();
    
    //sets the coookie to one minute if the popup is closed (whole numbers = days)
    setCookie( 'popupCookie', 'customised', 30 );
  });
  
  $('a.accept').click(function(){
    $('.popup-overlay').fadeOut();
    //sets the coookie to five minutes if the popup is submited (whole numbers = days)
    setCookie( 'popupCookie', 'accepted', 30 );
  });

  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
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

  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
});


// pagescroll indicator
  window.onscroll = function() {myfunction()};
  function myfunction(){
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    let height = document.documentElement.scrollHeight - 800;
    let scrolled = (winScroll / height) * 100;
  document.getElementById('myBar').style.width = scrolled + "%";
}


// More or Less
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "block";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "block";
  }
}


function myText() {
  document.getElementById("first_name").focus();
}


// navigatioin slide down when window scroll up
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});

// show and hide mobile menu 
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

