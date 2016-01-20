//JS script for Joomla template


$jsmart(document).ready(function(){
	$window = $jsmart(window);

	menu_offset_top = $jsmart('.header-nav').offset().top;	
	//menu_offset_top = 172;
	function processScroll() {

		var scrollTop = $window.scrollTop();

		if ( scrollTop >= menu_offset_top) {

			$jsmart('.header-nav').addClass('subnav-fixed');

		} else if (scrollTop <= menu_offset_top) {

			$jsmart('.header-nav').removeClass('subnav-fixed');

		}

	}

	if($jsmart('.header-nav')){

		// fix sub nav on scroll

		processScroll();

		$window.scroll(function(){

			processScroll();

		});

	}

});