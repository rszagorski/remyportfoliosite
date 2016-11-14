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
			'opacity': 1,
			'pointer-events': 'auto'
		});
		// $('.back-to-main').css({
		// 	'opacity': 1
		// });
	});

	$('.back-to-main').on('click', function(){
		$('html, body').animate({
			scrollTop: $('header').offset().top
		}, 1000);
		$(this).css({
			'opacity': 0,
			'pointer-events': 'none'
		});
	});

 //on hover of z- want gif 1 to be the svg that appears and hide other 3 svgs
 //on hover of developer want gif developer svg to appear and hide all other svgs
 //on hover of design want gif designer svg appear and hide all other svgs
 //have 
	// $('.Z').mouseenter(function(){
	// 	var $pattern1Pattern = $('#developer_z');
	// 	var $pattern1img = $('#developer_z image');
	// 	var $defs = $('<defs>');

	// 	console.log('mouseenter');
	// 	$('.z-pattern').remove();
	// 	console.log($pattern1img);
	// 	console.log($pattern1Pattern);
	// 	console.log($defs);
	// 	$pattern1Pattern.append($pattern1img);
	// 	console.log($pattern1Pattern, 'second p1p');
	// 	$defs.append($pattern1Pattern);
	// 	$('.Z').prepend($defs);
	// 	// $('#about_z').css({
	// 	// 	'opacity': 1
	// 	// });
	// }).mouseleave(function(){
	// 	console.log('mouseleave');
	// 	$('#about_z').css({
	// 		'opacity': 0
	// 	});
	// });

	// $('.designer-container').mouseenter(function(){
	// 	console.log('mouseenter');
	// 	$('.z-pattern').css({
			
	// 	});
	// 	$('#designer_z')
	// }).mouseleave(function(){
	// 	console.log('mouseleave');

	// });

	// $('.developer-container').mouseenter(function(){
	// 	console.log('mouseenter');
	// 	$('.z-pattern').css({
			
	// 	});
	// 	$('#developer_z')
	// }).mouseleave(function(){
	// 	console.log('mouseleave');
		
	// });

$('.z-container-inner').mouseenter(function(){
	$('.z-about-container').css({
		'opacity': 1
	});
}).mouseleave(function(){
	$('.z-about-container').css({
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