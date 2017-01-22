<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes">
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/flex-dist.css');?>" media="screen">
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>

    <div id="map"></div>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 3,
                center: {
                  lat: 40.6184355,
                  lng: -74.7443289
                }
            });

            // Create an array of alphabetical characters used to label the markers.
            var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            // Add some markers to the map.
            // Note: The code uses the JavaScript Array.prototype.map() method to
            // create an array of markers based on a given "locations" array.
            // The map() method here has nothing to do with the Google Maps API.
            var markers = locations.map(function(location, i) {
                return new google.maps.Marker({
                    position: location,
                    label: labels[i % labels.length]
                });
            });

            // Add a marker clusterer to manage the markers.
            var markerCluster = new MarkerClusterer(map, markers, {
                imagePath: '../assets/images/'
            });
        }
        var locations = [{
            lat: 40.6184355,
            lng: -74.7443289
        }, {
            lat: 41.0359303,
            lng: -74.878225
        }, {
            lat: 43.4144665,
            lng: -83.1857787
        }, {
            lat: 42.9855835,
            lng: -83.2938322
        }, {
            lat: 42.9414173,
            lng: -83.2891092
        }, {
            lat: 43.4911322,
            lng: -83.396897
        }, {
            lat: 43.0514161,
            lng: -83.3188341
        }, {
            lat: 53.235657,
            lng: -2.5111779999999726
        }, {
            lat: 53.214008,
            lng: -2.4911409999999705
        }, {
            lat: 53.258663,
            lng: -2.1192869999999857
        }, {
            lat: 53.160142,
            lng: -2.669436000000019
        }, {
            lat: 41.1845415,
            lng: -73.1331651
        }, {
            lat: 41.5770391,
            lng: -73.4084542
        }, {
            lat: 44.8019921,
            lng: -72.9456936
        }, {
            lat: 43.1895028,
            lng: -78.392246
        }, {
            lat: 43.2464477,
            lng: -78.193632
        }, {
            lat: 42.9544722,
            lng: -83.403279
        }, {
            lat: -39.927193,
            lng: 175.053218
        }, {
            lat: -41.330162,
            lng: 174.865694
        }, {
            lat: -42.734358,
            lng: 147.439506
        }, {
            lat: -42.734358,
            lng: 147.501315
        }, {
            lat: -42.735258,
            lng: 147.438000
        }, {
            lat: -43.999792,
            lng: 170.463352
        }]

    </script>
    <script src="../assets/js/markerclusterer.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCWs0qLCrbcHpsTNdiVZQn9jBPV0enTVw&callback=initMap">
    </script>
</body>

</html>
