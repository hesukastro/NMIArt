// Regular map
function regular_map() {
    var var_location = new google.maps.LatLng(14.620971, 121.110948);
    var var_marker_location = new google.maps.LatLng(14.619971, 121.110948);

    var var_mapoptions = {
        center: var_location,
        zoom: 17
    };

    var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

    var var_marker = new google.maps.Marker({
        position: var_marker_location,
        map: var_map,
        title: "NMI Art Gallery"
    });

    var contentString = '<div class="info-window" style="padding: 5px;">' +
                '<div style="float:left; font-size:1.4em; top: 12px; position: absolute;"><span class="glyphicon glyphicon-map-marker"></span></div>' +
                '<div style="margin-left:20px;"><h4>NMI Art Gallery</h4></div>' +
                '<div class="info-content">' +
                '9 Dao Street,<br>Town & Country Executive Village,<br>Marcos Highway,<br>Antipolo City,<br>Philippines' +
                '</div>' +
                '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 250
        });

        //var_marker.addListener('click', function () {
            infowindow.open(var_map, var_marker);
        //});

        var styles = [{"featureType": "administrative","elementType": "all","stylers": [{"saturation": "-100"}]},{"featureType": "administrative.province","elementType": "all","stylers": [{"visibility": "off"}]},{"featureType": "landscape","elementType": "all","stylers": [{"saturation": -100},{"lightness": 65},{"visibility": "on"},{"color": "#d5d5d5"}]},{"featureType": "poi","elementType": "all","stylers": [{"saturation": -100},{"lightness": "50"},{"visibility": "simplified"}]},{"featureType": "road","elementType": "all","stylers": [{"saturation": "-100"}]},{"featureType": "road.highway","elementType": "all","stylers": [{"visibility": "simplified"}]},{"featureType": "road.arterial","elementType": "all","stylers": [{"lightness": "30"}]},{"featureType": "road.local","elementType": "all","stylers": [{"lightness": "40"}]},{"featureType": "transit","elementType": "all","stylers": [{"saturation": -100},{"visibility": "simplified"}]},{"featureType": "water","elementType": "geometry","stylers": [{"hue": "#ffff00"},{"lightness": -25},{"saturation": -97}]},{"featureType": "water","elementType": "labels","stylers": [{"lightness": -25},{"saturation": -100}]}];

        var_map.set('styles', styles);
}

// Initialize maps
google.maps.event.addDomListener(window, 'load', regular_map);