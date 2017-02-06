$(function(){
    $(window).scroll(function(){
        if( $(this).scrollTop() > 25 )
            $('.navbar-fixed-top').addClass('sm-header');
        else
            $('.navbar-fixed-top').removeClass('sm-header');
    });
    .hover(

        function () {
            alert('sd');
            var hoverImg = $(this).find('img').attr('alt');
            //var outImg = $(this).find('img').attr('src');
            $(this).find('img').attr({'src', hoverImg});
        },

        function () {
            $(this).css({"background-color":"blue"});
        }
    );

});

$('.team-img a').hover(
    function () {
        /*if (isMSIE) {
            if( $(this).find('span').length  === 0 )
                $('<span class="ie-hover">').appendTo(this);
        }*/
        srcImg = $(this).find('img').attr('src');
        altImg = $(this).find('img').attr('alt');
        $(this).find('img').attr('src', $(this).find('img').attr('alt'));
    },
    function () {
        $(this).find('img').attr('src', srcImg);
        $(this).find('img').attr('alt', altImg);
        //$(this).find('img').attr('alt', $(this).find('img').attr('src'));
    }
);


Temporary form on home page
(function($) {
  'use strict';

  var closeBtns = document.querySelectorAll(".close");

  var $launchFormMod = $('#launchFormModal'),
    $formMod = $('#formModal');

  $launchFormMod.on('click touch', function() {
    // $formMod[0].showModal();
   // $("#formModal").css({"display":"block"});
  });
  // just below not effective on temporary form close button
  $('.close').on('click touch', function() {
    $formMod[0].close();
  });

  for (var i = 0; i < closeBtns.length; i++) {
      closeBtns[i].addEventListener("click", function(e) {
        $("#formModal").hide();
      });
  }

})(jQuery);



function initMap() {

  // JSON. Specify features and elements to define styles for the map.
  var styleArray = [
    {
      "featureType": "administrative.country",
      "elementType": "geometry.stroke",
      "stylers": [
        {
          "lightness": -5
        },
        {
          "color": "#b0b0b0"
        },
        {
          "weight": 1.7
        }
      ]
    },
    {
      "featureType": "administrative.province",
      "elementType": "all",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "landscape",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#FFB3B3"
        },
        {
          "lightness": 26
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#FFB3B3"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "all",
      "stylers": [
        {
          "color": "#FFB3B3"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "all",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "road.local",
      "elementType": "all",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "transit",
      "elementType": "all",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#FFB3B3"
        },
        {
          "lightness": 66
        }
      ]
    }
  ];

  var myLatLng = {lat: 38.904652, lng: -77.058628};
  var centerLoc = {lat: 38.904652, lng: -77.072258};

  // Javascript plain objects. Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: centerLoc,
    scrollwheel: false,
    // Apply the map style array to the map.
    styles: styleArray,
    zoom: 15
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Babyscripts'
  });
}



