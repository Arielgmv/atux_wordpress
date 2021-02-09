function digital_agency_lite_menu_open_nav() {
	window.digital_agency_lite_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function digital_agency_lite_menu_close_nav() {
	window.digital_agency_lite_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   	});
});

jQuery(document).ready(function () {
	window.digital_agency_lite_currentfocus=null;
  	digital_agency_lite_checkfocusdElement();
	var digital_agency_lite_body = document.querySelector('body');
	digital_agency_lite_body.addEventListener('keyup', digital_agency_lite_check_tab_press);
	var digital_agency_lite_gotoHome = false;
	var digital_agency_lite_gotoClose = false;
	window.digital_agency_lite_responsiveMenu=false;
 	function digital_agency_lite_checkfocusdElement(){
	 	if(window.digital_agency_lite_currentfocus=document.activeElement.className){
		 	window.digital_agency_lite_currentfocus=document.activeElement.className;
	 	}
 	}
 	function digital_agency_lite_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.digital_agency_lite_responsiveMenu){
			if (!e.shiftKey) {
				if(digital_agency_lite_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				digital_agency_lite_gotoHome = true;
			} else {
				digital_agency_lite_gotoHome = false;
			}

		}else{

			if(window.digital_agency_lite_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.digital_agency_lite_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.digital_agency_lite_responsiveMenu){
				if(digital_agency_lite_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					digital_agency_lite_gotoClose = true;
				} else {
					digital_agency_lite_gotoClose = false;
				}
			
			}else{

			if(window.digital_agency_lite_responsiveMenu){
			}}}}
		}
	 	digital_agency_lite_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
	jQuery(window).load(function() {
	    jQuery("#status").fadeOut();
	    jQuery("#preloader").delay(1000).fadeOut("slow");
	})
	$(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
});

/**** Hidden search box ***/
jQuery('document').ready(function($){
	$('.search-box span a').click(function(){
        $(".serach_outer").slideDown(1000);
    	digital_agency_lite_Keyboard_loop($('.serach_outer'));
    });

    $('.closepop a').click(function(){
        $(".serach_outer").slideUp(1000);
    });
});	

jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 100) {
	        jQuery('.scrollup i').fadeIn();
	    } else {
	        jQuery('.scrollup i').fadeOut();
	    }
	});
	jQuery('.scrollup').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});
});

var digital_agency_lite_Keyboard_loop = function (elem) {

    var digital_agency_lite_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');

    var digital_agency_lite_firstTabbable = digital_agency_lite_tabbable.first();
    var digital_agency_lite_lastTabbable = digital_agency_lite_tabbable.last();
    /*set focus on first input*/
    digital_agency_lite_firstTabbable.focus();

    /*redirect last tab to first input*/
    digital_agency_lite_lastTabbable.on('keydown', function (e) {
        if ((e.which === 9 && !e.shiftKey)) {
            e.preventDefault();
            digital_agency_lite_firstTabbable.focus();
        }
    });

    /*redirect first shift+tab to last input*/
    digital_agency_lite_firstTabbable.on('keydown', function (e) {
        if ((e.which === 9 && e.shiftKey)) {
            e.preventDefault();
            digital_agency_lite_lastTabbable.focus();
        }
    });

    /* allow escape key to close insiders div */
    elem.on('keyup', function (e) {
        if (e.keyCode === 27) {
            elem.hide();
        };
    });
};