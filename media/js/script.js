//loading anim
$(document).ready(function() {
    window.setTimeout(function(){
        $('body').removeClass("loading").addClass('loaded');
    }, 3000);
});

//chat window
$(window).load(function(){
	$('.komentar').animate({scrollTop: $('.komentar')[0].scrollHeight}, 2000);
});

//Page Preset
$(document).ready(function(){
$(".main").onepage_scroll({
		sectionContainer: "section",
		easing: "cubic-bezier(0.180, 0.900, 0.410, 1.210)"
	});
});
	
//redirect
$(function(){
	$('a#start').click(function(){
		$(".main").moveTo(2);
		$('.pull').slideToggle();
		$('.wp1').addClass('animated flipInX');
		$('.wp2').addClass('animated fadeInUp');
		return false;
	});
});

$(function(){
	$('a#feat').click(function(){
		$(".main").moveTo(3);
		$('.pull').slideToggle();
		$('.wp2').toggleClass("slideInLeft");
		return false;
	});
});

$(function(){
	$('a#testi').click(function(){
		$(".main").moveTo(4);
		$('.pull').slideToggle();
		return false;
	});
});

$(function(){
	$('a#about').click(function(){
		$(".main").moveTo(5);
		$('.pull').slideToggle();
		return false;
	});
});

$(function(){
	$('a#back').click(function(){
		$(".main").moveTo(1);
		return false;
	});
});

// nav slide
$(document).ready(function() {
	$('.nav_slide').click(function(e){
		e.preventDefault();
		
		$('.pull').slideToggle();
		$('.login-tab').toggle("slow");
	});
});

//login slide
$(document).ready(function () {
    $('#login').click(function(e){
    	e.preventDefault();
    	var logintab = $('.login-tab');
    	var logintabWidth = $('.login-tab').width();
    	
    	logintab.toggleClass("buka");
    	
    	if (logintab.hasClass("buka")) {
	    	logintab.animate({left: "0px"});	
    	} else {
	    	logintab.animate({left: -logintabWidth}, 250);	
    	}
    });
	$('#close').click(function(event){
		event.preventDefault();
		var logintabWidth = $('.login-tab').width();
		
		$('.login-tab').animate({left: -logintabWidth}, 250);
	});
});

//slideshow
$(document).ready(function() {
  $('.slider').flexslider({
    animation: "slide",
	controlNav: true
  });
});

$(document).ready(function() {
  $('.slider1').flexslider({
    animation: "slide",
    directionNav: false,
    controlNav: false,
    touch: false,
  });
  $('.prev, .next').click(function() {
	  var href = $(this).attr('href');
	  $('.slider1').flexslider(href)
	  return false;
	});
});

/* 
============
///Perlu Revisi

$(function(){
	$('.passthru').click(function(){
			var pwd = document.getElementById("pwd");
			if(pwd.getAttribute("type")=="text"){
				pwd.setAttribute("type","password");
			} else {
				pwd.setAttribute("type","text");
			}
	 });
});

======

//chat window no anim
$(window).load(function(){
	var height = $('.komentar')[0].scrollHeight;
	
	$('.komentar').scrollTop(height);
});

======*/