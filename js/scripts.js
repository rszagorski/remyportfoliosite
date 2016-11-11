var devPortfolio = {};


devPortfolio.events = function(){
	$('.developer-container').on('click', function(){
		//on click of the developer h3
		//have the left side go from position off the screen to position on the screen
		if ($('.developer-title').text() === 'Developer') {
			$('.left').css({
				'left': 0 
			});
			$('.main').css({
				'left': '85%'
			});
			setTimeout(function(){
				$('.developer-title').text('Close');
			}, 800);
		} else if ($('.developer-title').text() === 'Close') {
			$('.left').css({
				'left': '-85%'
			});
			$('.main').css({
				'left': 0
			});
			setTimeout(function(){
				$('.developer-title').text('Developer');
			}, 800);
		};
		//also move the entire main div off the screen to the right
		//change "developer" to say "close"
		//on click of "close" container, move left side off screen to original position
		//and also move the entire main div back onto the screen
	}); //end of click event for develop

	$('.designer-container').on('click', function(){
		if ($('.designer-title').text() === 'Designer') {
			$('.right').css({
				'right': 0
			});
			$('.main').css({
				'left': '-85%'
			});
			setTimeout(function(){
				$('.designer-title').text('Close');
			}, 800);
		} else if ($('.designer-title').text() === 'Close') {
			$('.right').css({
				'right': '-85%'
			});
			$('.main').css({
				'left': 0
			});
			setTimeout(function(){
				$('.designer-title').text('Designer');
			}, 800);
		};
	}); //end of click event for design

	//on click of giant Z want to scroll down to /(reveal) the about section of the page
	//the small Z logo and back to top text will fade in after everythings scrolled
	//on click of the z logo again the user will be brought back to the main page (scroll up)
	//and the small z logo and back to top text will disappear

	$('.Z').on('click', function(){
		$('html, body').animate({
			scrollTop: $('.about').offset().top
		}, 1000);
		$('.back-to-main').css({
			'opacity': 1
		});
	});

	$('.back-to-main').on('click', function(){
		$('html, body').animate({
			scrollTop: $('header').offset().top
		}, 1000);
		$(this).css({
			'opacity': 0
		});
	});

}; // end of function


devPortfolio.init = function(){
	devPortfolio.events();
	setTimeout(function() { 
		$('html, body').scrollTop(0)
	}, 750);
};

$(function(){
	devPortfolio.init();
});