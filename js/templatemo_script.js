var top_menu_height = 0;
jQuery(function($) {

        $(window).load( function() {
            $('.external-link').unbind('click');    
        });

        $(document).ready( function() {

            // load google map
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
            'callback=initialize';
        document.body.appendChild(script);

        top_menu_height = $('.templatemo-top-menu').height();
        // scroll spy to auto active the nav item
        $('body').scrollspy({ target: '#templatemo-nav-bar', offset: top_menu_height+10 });

        $('.external-link').unbind('click');

        // scroll to top
        $('#btn-back-to-top').click(function(e){
            e.preventDefault();
            scrollTo('#templatemo-top');
        });

        // scroll to specific id when click on menu
        $('.templatemo-top-menu .navbar-nav a').click(function(e){
            e.preventDefault(); 
            var linkId = $(this).attr('href');
            scrollTo(linkId);
            if($('.navbar-toggle').is(":visible") == true){
                $('.navbar-collapse').collapse('toggle');
            }
            $(this).blur();
            return false;
        });
		
		//test
		$('.carousel-inner .item a').click(function(e){
            e.preventDefault(); 
            var linkId = $(this).attr('href');
            scrollTo(linkId);
            if($('.navbar-toggle').is(":visible") == true){
                $('.navbar-collapse').collapse('toggle');
            }
            $(this).blur();
            return false;
        });

        // to stick navbar on top
        $('.templatemo-top-menu ').stickUp();

        // gallery category
        $('.templatemo-gallery-category a').click(function(e){
            e.preventDefault(); 
            $(this).parent().children('a').removeClass('active');
            $(this).addClass('active');
            var linkClass = $(this).attr('href');
            $('.gallery').each(function(){
                if($(this).is(":visible") == true){
                   $(this).hide();
                };
            });
            $(linkClass).fadeIn();  
        });

        //gallery light box setup
        $('a.colorbox').colorbox({
                                    rel: function(){
                                        return $(this).data('group');

                                    }
        });
    });
});

function initialize() {
	var myLatlng = new google.maps.LatLng(-6.116616, 106.760806);

    var mapOptions = {
		center: myLatlng,
		draggable: false,
		scaleControl: false,
		scaleControl: true,
		draggable: false,
		zoom: 16,
		panControl: false,
		center: myLatlng
    }; 
	
	//var tanda = new google.maps.Marker(-6.116616,106.760806);
	var map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions);
	
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Fingertechnology'
 	});

	google.maps.event.addListener(map, 'click', function(event){
		// disableMovement(false);
		this.setOptions({
			draggable: true
		});
	});
	
	/*
	google.maps.event.addListener(marker, 'dragstart', function() {
		disableMovement(true);
	});

	google.maps.event.addListener(marker, 'dragend', function() {
		disableMovement(false);
	}); */
    //var map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions);

}

function disableMovement(disable) {
    var mapOptions;
    if (disable) {
        mapOptions = {
            draggable: false,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            zoomControl: false
        };
    } else {
        mapOptions = {
            draggable: true,
            scrollwheel: true,
            disableDoubleClickZoom: false,
            zoomControl: true
        };
    }
    map.setOptions(mapOptions);
}

function tandai(lokasi){
	    $(-6.116616).val(lokasi.lat());
	    $(106.760806).val(lokasi.lng());
	    tanda = new google.maps.Marker({
	        position: lokasi,
	        map: map-canvas
	    });
}

// scroll animation 
function scrollTo(selectors)
{

    if(!$(selectors).size()) return;
    var selector_top = $(selectors).offset().top - top_menu_height;
    $('html,body').animate({ scrollTop: selector_top }, 'slow');
}