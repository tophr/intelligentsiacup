/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
 
$(document).ready(function() {
	var $window = $(window);
   
    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize < 760) {
            $('body').addClass('js');
			  var $menu = $('#nav'),
				  $menulink = $('.menu-link'),
				  $menuTrigger = $('.menu-item-has-children > a');

			$menulink.click(function(e) {
				e.preventDefault();
				$menulink.toggleClass('active');
				$menu.toggleClass('active');
			});

			$menuTrigger.click(function(e) {
				e.preventDefault();
				var $this = $(this);
				$this.toggleClass('active').next('ul').toggleClass('active');
			});
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);	
		
});

window.onscroll=function () {
    var top = window.pageXOffset ? window.pageXOffset : document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop;
    if(top > 142){
		//document.getElementById("header").style.opacity = "0";
    	//document.getElementById("header-fix").style.opacity = "1";
		$("#navigation").addClass('fixed');
    }
    else {
    	//document.getElementById("header").style.opacity = "1";
		//document.getElementById("header-fix").style.opacity = "0";
		$("#navigation").removeClass('fixed');
    }
};
