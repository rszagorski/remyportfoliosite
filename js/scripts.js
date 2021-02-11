var devPortfolio = {};

devPortfolio.toggleZ = function(toToggle){
	$('.Z').css({
		'display': 'none'
	});
	$(toToggle).css({
		'display': 'block'
	});
};

devPortfolio.mobileResize = function(){
	if ($(window).width() < 618){
		console.log('i am less than 680');
		$('.back-to-main').addClass('z-gone');
		$('.back-to-main').removeClass('z-appear');	
	} else {
		console.log('i am more than 680');
		$('.back-to-main').removeClass('z-gone');
		// $('.back-to-main').addClass('z-appear');
	};
};

//window.on('scroll', function(){
//do shit 
//});

// window.on('resize', function(){ //do shit });

// devPortfolio.scrollpast = function(){
// 	if ($(window)
// 		scrollTop: $('about').offset().top
// };


devPortfolio.events = function(){
	$(window).resize(function(){
		var currentWindowWidth = $(window).width();
		devPortfolio.mobileResize();
		$('.main').css({
			'transition': 'none'
		});
		$('.left').css({
			'transition': 'none'
		});
		$('.right').css({
			'transition': 'none'
		});
		if ($(this.resizeTO)){
			clearTimeout(this.resizeTO);
		}
		this.resizeTO = setTimeout(function(){
			$(this).trigger('resizeEnd');
		}, 100);

	});
	$(window).bind('resizeEnd', function(){
		$('.main').css({
			'transition': 'transform 0.8s cubic-bezier(0.780, 0.340, 0.275, 0.475)'
		});
		$('.left').css({
			'transition': 'transform 0.8s cubic-bezier(0.780, 0.340, 0.275, 0.475)'
		});
		$('.right').css({
			'transition': 'transform 0.8s cubic-bezier(0.780, 0.340, 0.275, 0.475)'
		});
		console.log($(window).scrollTop());
		console.log($('.about').offset().top);
		// if ($(window).width() > 618 && $(window).scrollTop() > $('header').offset().top) {
		// 	$('html,body').animate({
		// 		scrollTop: $('header').offset().top
		// 	}, 1000);
		// }
	});
	//on the resize of the browser take that stupid fucking transition off of it. 

	$('.developer-container').on('click', function() {
		$('.z-page').toggleClass('z-page-left');

		if ($('.developer-title').text() === 'Developer') {
			setTimeout(function(){
				$('.developer-title').text('Close');
			}, 800);
		} else if ($('.developer-title').text() === 'Close') {
			setTimeout(function(){
				$('.developer-title').text('Developer');
			}, 800);
		};
	});

	$('.designer-container').on('click', function() {
		$('.z-page').toggleClass('z-page-right');

		if ($('.designer-title').text() === 'Designer') {
			setTimeout(function(){
				$('.designer-title').text('Close');
			}, 800);
		} else if ($('.designer-title').text() === 'Close') {
			setTimeout(function(){
				$('.designer-title').text('Designer');
			}, 800);
		};

	});

	

	// $('.developer-container').on('click', function(){
	// 	//on click of the developer h3
	// 	//have the left side go from position off the screen to position on the screen
	// 	if ($('.developer-title').text() === 'Developer') {
	// 		$('.left').css({
	// 			'left': 0 
	// 		});
	// 		$('.main').css({
	// 			'left': '85%'
	// 		});
	// 		setTimeout(function(){
	// 			$('.developer-title').text('Close');
	// 		}, 800);
	// 	} else if ($('.developer-title').text() === 'Close') {
	// 		$('.left').css({
	// 			'left': '-85%'
	// 		});
	// 		$('.main').css({
	// 			'left': 0
	// 		});
	// 		setTimeout(function(){
	// 			$('.developer-title').text('Developer');
	// 		}, 800);
	// 	};
	// 	//also move the entire main div off the screen to the right
	// 	//change "developer" to say "close"
	// 	//on click of "close" container, move left side off screen to original position
	// 	//and also move the entire main div back onto the screen
	// }); //end of click event for develop

	// $('.designer-container').on('click', function(){
	// 	if ($('.designer-title').text() === 'Designer') {
	// 		$('.right').css({
	// 			'right': 0
	// 		});
	// 		$('.main').css({
	// 			'left': '-85%'
	// 		});
	// 		setTimeout(function(){
	// 			$('.designer-title').text('Close');
	// 		}, 800);
	// 	} else if ($('.designer-title').text() === 'Close') {
	// 		$('.right').css({
	// 			'right': '-85%'
	// 		});
	// 		$('.main').css({
	// 			'left': 0
	// 		});
	// 		setTimeout(function(){
	// 			$('.designer-title').text('Designer');
	// 		}, 800);
	// 	};
	// }); //end of click event for design

	//on click of giant Z want to scroll down to /(reveal) the about section of the page
	//the small Z logo and back to top text will fade in after everythings scrolled
	//on click of the z logo again the user will be brought back to the main page (scroll up)
	//and the small z logo and back to top text will disappear

	if ($(window).width() > 768){
		$('.z-about-container').on('click', function(){
			$('html, body').animate({
				scrollTop: $('.about').offset().top
			}, 1000);
			$('.back-to-main').addClass('z-appear');
			$('.back-to-main').removeClass('z-gone');
		});

		$('.back-to-main').on('click', function(){
			$('html, body').animate({
				scrollTop: $('header').offset().top
			}, 1000);
			$(this).removeClass('z-appear');
			$(this).addClass('z-gone');
		});
	}

	// Touch Support
	var tap = ('ontouchstart' in document.documentElement);

	// If the browser doesn't support touch.
	if (!tap) {
		//on hover of z- want gif 1 to be the svg that appears and hide other 3 svgs
		//on hover of developer want gif developer svg to appear and hide all other svgs
		//on hover of design want gif designer svg appear and hide all other svgs
		//have 
		$('.designer-container').mouseenter(function(){
			console.log('mouseenter');
			devPortfolio.toggleZ('.Z.sylv-designer_z');
		}).mouseleave(function(){
			console.log('mouseleave');
			devPortfolio.toggleZ('.Z:last-of-type');
		});

		$('.developer-container').mouseenter(function(){
			console.log('mouseenter');
			devPortfolio.toggleZ('.Z.sylv-developer_z')
		}).mouseleave(function(){
			console.log('mouseleave');
			devPortfolio.toggleZ('.Z:last-of-type');
		});

		//on hover of inner-z- show the about me arrow section- off of hover, don't show it
		// also have about gif show on enter and not on leave

		$('.z-container-inner').mouseenter(function(){
			$('.z-about-container').css({
				'opacity': 1
			});
			devPortfolio.toggleZ('.Z.sylv-about_z');
		});
	}

}; // end of function


devPortfolio.init = function(){
	devPortfolio.events();
	setTimeout(function() { 
		$('html, body').scrollTop(0)
	}, 750);
	devPortfolio.toggleZ('.Z:last-of-type');

	if ($(window).width() < 768){
		devPortfolio.toggleZ('.Z.sylv-designer_z');
	};
};

$(function(){
	devPortfolio.init();
});