
$(document).ready(function()
{
	var body = $(document.body);

	var menuInMobileModeBreakpoint = 991;

	function openMobileMenu()
	{
		body.addClass('state--mobile-menu-open');
	};

	function closeMobileMenu()
	{
		body.removeClass('state--mobile-menu-open');
		$('.js-top-nav__item, .js-top-nav__item-l2, .js-top-nav__item-l3').removeClass('open');
	};

	function openDeskMenu()
	{
		body.addClass('state--desk-menu-open');
	};

	function closeDeskMenu()
	{
		body.removeClass('state--desk-menu-open');
		$('.js-top-nav__item, .js-top-nav__item-l2, .js-top-nav__item-l3').removeClass('open');
	};


	body.off('click.openMobileMenu', '.js-open-mobile-menu').on('click.openMobileMenu', '.js-open-mobile-menu', function() {
		openMobileMenu();
	});

	body.off('click.overlayClosesAll', '.js-overlay').on('click.overlayClosesAll', '.js-overlay', function()
	{
		closeMobileMenu();
	});


	body.off('click.closeAll', '.js-close-mobile-menu').on('click.closeAll', '.js-close-mobile-menu', function()
	{
		closeMobileMenu();
	});

	// navigation on mobile
	$('.js-top-nav__btn, .js-top-nav__btn-l2, .js-top-nav__btn-l3, .js-top-nav__back')
		.off('click.mobileNavigation').on('click.mobileNavigation', function(e)
	{
		var t = $(this);

		if(window.innerWidth > menuInMobileModeBreakpoint)
			return;

		t.closest('.js-top-nav__item, .js-top-nav__item-l2, .js-top-nav__item-l3').toggleClass('open', !t.hasClass('js-top-nav__back'));
		e.preventDefault();
	});

	// navigation on desktop
	$('.js-top-nav__btn')
		.off('click.deskNavigation').on('click.deskNavigation', function(e)
	{
		var t = $(this);

		if(window.innerWidth > menuInMobileModeBreakpoint)
		{
			openDeskMenu();

			t.closest('.top-nav-menu').find('.open').removeClass('open');
			t.closest('.js-top-nav__item').addClass('open');
			e.preventDefault();
			return;
		}
	});

	//close desk menu when click outside
	$(document).on('click', function(e) {
		if(window.innerWidth > menuInMobileModeBreakpoint && body.hasClass('state--desk-menu-open'))
		{
			if (!$(e.target).closest(".top-nav").length) {
				body.find('.open').removeClass('open');
				body.removeClass('state--desk-menu-open');
			}
			e.stopPropagation();
		}
	});

	window.onscroll = function() {stickyMenu()};

	// Get the navbar
	var navbar = document.getElementById("top-menu");

	// Get the offset position of the navbar
	var sticky = navbar.offsetTop;

	// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
	function stickyMenu() {
		if(window.innerWidth > menuInMobileModeBreakpoint){
			if (window.pageYOffset > sticky) {
				navbar.classList.add("sticky-menu")
			} else {
				navbar.classList.remove("sticky-menu");
			}
		}
	};


	//Слайдер в header
	$('#slider-header').owlCarousel({
		lazyLoad:true,
	    loop: true,
	    nav: false,
	    dots: true,
	    margin: 10,
	    checkVisible: false,
	    items: 1,
	    navSpeed: 300,
	    autoplay: true,
		autoplayTimeout: 10000,
		autoplayHoverPause: false
	});


	//карусель для новостей
	var owlNews = $('#slider-news');
	owlNews.owlCarousel({
		lazyLoad:true,
	    loop: false,
	    dots: false,
	    checkVisible: true,
	    navSpeed: 300,
		lazyLoadEager: 1,
		navElement: 'span',
		responsive: {
	        0: {
	            items: 1
	        },
	        768: {
	            items: 2
	        },
	        992: {
	            items: 3
	        }
    	},
        onInitialized: function() {
        	$("#news-prev").addClass("disabled")
        }

	});

	owlNews.on('translated.owl.carousel resized.owl.carousel', function(event) {
		if (event.item.index == 0) $("#news-prev").addClass("disabled");
        else $("#news-prev").removeClass("disabled");

        if (event.item.index == (event.item.count - event.page.size)) $("#news-next").addClass("disabled");
        else $("#news-next").removeClass("disabled");
	});

	$('#news-next').click(function() {
    	owlNews.trigger('next.owl.carousel');
	});
	$('#news-prev').click(function() {
    	owlNews.trigger('prev.owl.carousel');
	});

	// #карусель для новостей

	//анимация преимуществ
	if ( $( ".section-feature" ).length ) {

		function animateFeature(){
			$('.feature-counter').each(function(i, elem){
				$(elem).countTo({
					from: 0,
					to: $(elem).html(),
					speed: 2000,
					refreshInterval: 60
				});
			});
		};


		var waypoint = new Waypoint({
			element: $('.section-feature')[0],
			handler: function(direction) {
				if(window.innerWidth > menuInMobileModeBreakpoint)
				{
					if (direction === 'down') {
						animateFeature();
						this.destroy();
					}
				}
			},
			offset: 'bottom-in-view'
		});
	};

	//Слайдер партнеров
	var partners = $('#slider-partners');
	partners.owlCarousel({
	    loop: true,
	    nav: false,
	    checkVisible: true,
	    navSpeed: 300,
		center:true,
		autoWidth: true,
		navElement: 'span',
		margin: 60,
		dots: false,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		responsive: {
	        0: {
	            items: 1
	        },
	        768: {
	            items: 3
	        },
	        1200: {
	            items: 5
        	}
	    }
	});

	$('#partner-next').click(function() {
    	partners.trigger('next.owl.carousel');
	});
	$('#partner-prev').click(function() {
    	partners.trigger('prev.owl.carousel');
	});

	//Слайдер ссылок
	var links = $('#slider-links');
	links.owlCarousel({
	    loop: true,
	    nav: false,
	    checkVisible: true,
	    navSpeed: 300,
		autoWidth: true,
		navElement: 'span',
		margin: 60,
		dots: false,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:true,
		responsive: {
	        0: {
	            items: 1
	        },
	        768: {
	            items: 3
	        },
	        1200: {
	            items: 5
        	}
	    }
	});

	$('#links-next').click(function() {
    	links.trigger('next.owl.carousel');
	});
	$('#links-prev').click(function() {
    	links.trigger('prev.owl.carousel');
	});




});

$(window).on('load', function () {
    $preloader = $('.preloader');
    $preloader.fadeOut('slow');
  });
