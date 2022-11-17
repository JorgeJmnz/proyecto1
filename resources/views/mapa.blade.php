<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Accept coordinates as input to a geocoder</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">

<div id="map"></div>

<script>
	// TO MAKE THE MAP APPEAR YOU MUST
	// ADD YOUR ACCESS TOKEN FROM
	// https://account.mapbox.com
	mapboxgl.accessToken = 'pk.eyJ1Ijoiam9yZ2VqbW56MzAiLCJhIjoiY2w4MXBxdjdyMDJhNTN2cGh4emNmd3BkbCJ9.NFtlYZXXZqlJn5fVKzOuBQ';
    
    const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-87.35797153432902, 20.31995714378302],
        zoom: 16
    });

    /* Given a query in the form "lng, lat" or "lat, lng"
     * returns the matching geographic coordinate(s)
     * as search results in carmen geojson format,
     * https://github.com/mapbox/carmen/blob/master/carmen-geojson.md */
    const coordinatesGeocoder = function (query) {
        // Match anything which looks like
        // decimal degrees coordinate pair.
        const matches = query.match(
            /^[ ]*(?:Lat: )?(-?\d+\.?\d*)[, ]+(?:Lng: )?(-?\d+\.?\d*)[ ]*$/i
        );
        if (!matches) {
            return null;
        }

        function coordinateFeature(lng, lat) {
            return {
                center: [lng, lat],
                geometry: {
                    type: 'Point',
                    coordinates: [lng, lat]
                },
                place_name: 'Lat: ' + lat + ' Lng: ' + lng,
                place_type: ['coordinate'],
                properties: {},
                type: 'Feature',
                zoom:16
            };
        }

        const coord1 = Number(matches[1]);
        const coord2 = Number(matches[2]);
        const geocodes = [];

        if (coord1 < -90 || coord1 > 90) {
            // must be lng, lat
            geocodes.push(coordinateFeature(coord1, coord2));
        }

        if (coord2 < -90 || coord2 > 90) {
            // must be lat, lng
            geocodes.push(coordinateFeature(coord2, coord1));
        }

        if (geocodes.length === 0) {
            // else could be either lng, lat or lat, lng
            geocodes.push(coordinateFeature(coord1, coord2));
            geocodes.push(coordinateFeature(coord2, coord1));
        }

        return geocodes;
    };

    // Add the control to the map.
    map.addControl(
        new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            localGeocoder: coordinatesGeocoder,
            zoom: 4,
            placeholder: 'Try: -40, 170',
            mapboxgl: mapboxgl,
            reverseGeocode: true
        })
    );

    navigator.geolocation.getCurrentPosition(
  successFunction, 
  errorFunction, 
  options={}
)
function gotPosition(pos) {
  // imprime e.g.  {coords: {lat: -33, lng: -73, accuracy: 1 }}
  console.log({
    pos
  });
}

function gotError(err) {
  console.warn(err);
}


document.addEventListener('DOMContentLoaded', () => {
  navigator.geolocation.getCurrentPosition(gotPosition, gotPosition, {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
  });
});

</script>

</body>
</html>