
(function($) {
    "use strict";

        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(4.6328757,-74.0710098,17)
            };

            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);

            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'images/map-marker.png',
                map: map
            });

           var styles =  [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#8d8d8d"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f5f5f5"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
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
        "elementType": "all",
        "stylers": [
            {
                "color": "#dbdbdb"
            },
            {
                "visibility": "on"
            }
        ]
    }
]
            map.setOptions({styles: styles});
        }
        
        google.maps.event.addDomListener(window, 'load', initialize);

        
})(jQuery);