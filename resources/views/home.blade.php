@extends('adminlte::page')

@section('title', 'AdminHome')

@section('content_header')
    <h1>XEÑAL</h1>
@stop

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Demo: Build a store locator using Mapbox GL JS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js"></script>
    <link
      href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css"
      rel="stylesheet"
    />
    <style>
      body {
        color: #404040;
        font: 400 15px/22px 'Source Sans Pro', 'Helvetica Neue', sans-serif;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
      }

      * {
        box-sizing: border-box;
      }

      .sidebar {
        position: absolute;
        width: 33.3333%;
        height: 100%;
        top: 0;
        left: 0;
        overflow: hidden;
        border-right: 1px solid rgba(0, 0, 0, 0.25);
      }

      .map {
        position: absolute;
        left: 33.3333%;
        width: 66.6666%;
        top: 0;
        bottom: 0;
      }

      h1 {
        font-size: 22px;
        margin: 0;
        font-weight: 400;
        line-height: 20px;
        padding: 20px 2px;
      }

      a {
        color: #404040;
        text-decoration: none;
      }

      a:hover {
        color: #101010;
      }

      .heading {
        background: #fff;
        border-bottom: 1px solid #eee;
        min-height: 60px;
        line-height: 60px;
        padding: 0 10px;
        background-color: #00853e;
        color: #fff;
      }

      .listings {
        height: 100%;
        overflow: auto;
        padding-bottom: 60px;
      }

      .listings .item {
        display: block;
        border-bottom: 1px solid #eee;
        padding: 10px;
        text-decoration: none;
      }

      .listings .item:last-child {
        border-bottom: none;
      }
      .listings .item .title {
        display: block;
        color: #00853e;
        font-weight: 700;
      }

      .listings .item .title small {
        font-weight: 400;
      }
      .listings .item.active .title,
      .listings .item .title:hover {
        color: #8cc63f;
      }
      .listings .item.active {
        background-color: #f8f8f8;
      }
      ::-webkit-scrollbar {
        width: 3px;
        height: 3px;
        border-left: 0;
        background: rgba(0, 0, 0, 0.1);
      }
      ::-webkit-scrollbar-track {
        background: none;
      }
      ::-webkit-scrollbar-thumb {
        background: #00853e;
        border-radius: 0;
      }

      .marker {
        border: none;
        cursor: pointer;
        height: 56px;
        width: 56px;
        background-image: url(marker.png);
      }

      /* Marker tweaks */
      .mapboxgl-popup {
        padding-bottom: 50px;
      }

      .mapboxgl-popup-close-button {
        display: none;
      }
      .mapboxgl-popup-content {
        font: 400 15px/22px 'Source Sans Pro', 'Helvetica Neue', sans-serif;
        padding: 0;
        width: 180px;
      }
      .mapboxgl-popup-content h3 {
        background: #91c949;
        color: #fff;
        margin: 0;
        padding: 10px;
        border-radius: 3px 3px 0 0;
        font-weight: 700;
        margin-top: -15px;
      }

      .mapboxgl-popup-content h4 {
        margin: 0;
        padding: 10px;
        font-weight: 400;
      }

      .mapboxgl-popup-content div {
        padding: 10px;
      }

      .mapboxgl-popup-anchor-top > .mapboxgl-popup-content {
        margin-top: 15px;
      }

      .mapboxgl-popup-anchor-top > .mapboxgl-popup-tip {
        border-bottom-color: #91c949;
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <div class="heading">
        <h1>Our locations</h1>
      </div>
      <div id="listings" class="listings"></div>
    </div>
    <div id="map" class="map"></div>
    <script>
      mapboxgl.accessToken = 'pk.eyJ1Ijoiam9yZ2VqbW56MzAiLCJhIjoiY2w4MXBxdjdyMDJhNTN2cGh4emNmd3BkbCJ9.NFtlYZXXZqlJn5fVKzOuBQ';

      /**
       * Add the map to the page
       */
      const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center:  [-87.35754700319097,20.31750304771422 ],
        zoom: 16,
        scrollZoom: true
      });

      const stores = {
        'type': 'FeatureCollection',
        'features': [
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [-87.35624305033133,20.320106626343765]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'IDF site',
              'Descripcion': 'askjdnaksjndkajsndkjansdkjnk'
            }
          }
        ]
      };

      /**
       * Assign a unique id to each store. You'll use this `id`
       * later to associate each point on the map with a listing
       * in the sidebar.
       */
      stores.features.forEach((store, i) => {
        store.properties.id = i;
      });

      /**
       * Wait until the map loads to make changes to the map.
       */
      map.on('load', () => {
        /**
         * This is where your '.addLayer()' used to be, instead
         * add only the source without styling a layer
         */


  map.addLayer({
    id: 'locations',
    type: 'circle',
    /* Add a GeoJSON source containing place coordinates and information. */
    source: {
      type: 'geojson',
      data: stores
    }
  });

        /**
         * Add all the things to the page:
         * - The location listings on the side of the page
         * - The markers onto the map
         */
        buildLocationList(stores);
        addMarkers();
      });

      /**
       * Add a marker to the map for every store listing.
       **/
      function addMarkers() {
        /* For each feature in the GeoJSON object above: */
        for (const marker of stores.features) {
          /* Create a div element for the marker. */
          const el = document.createElement('div');
          /* Assign a unique `id` to the marker. */
          el.id = `marker-${marker.properties.id}`;
          /* Assign the `marker` class to each marker for styling. */
          el.className = 'marker';

          /**
           * Create a marker using the div element
           * defined above and add it to the map.
           **/
          new mapboxgl.Marker(el, { offset: [0, -23] })
            .setLngLat(marker.geometry.coordinates)
            .addTo(map);

          /**
           * Listen to the element and when it is clicked, do three things:
           * 1. Fly to the point
           * 2. Close all other popups and display popup for clicked store
           * 3. Highlight listing in sidebar (and remove highlight for all other listings)
           **/
          el.addEventListener('click', (e) => {
            /* Fly to the point */
            flyToStore(marker);
            /* Close all other popups and display popup for clicked store */
            createPopUp(marker);
            /* Highlight listing in sidebar */
            const activeItem = document.getElementsByClassName('active');
            e.stopPropagation();
            if (activeItem[0]) {
              activeItem[0].classList.remove('active');
            }
            const listing = document.getElementById(
              `listing-${marker.properties.id}`
            );
            listing.classList.add('active');
          });
        }
      }

      /**
       * Add a listing for each store to the sidebar.
       **/
      function buildLocationList(stores) {
        for (const store of stores.features) {
          /* Add a new listing section to the sidebar. */
          const listings = document.getElementById('listings');
          const listing = listings.appendChild(document.createElement('div'));
          /* Assign a unique `id` to the listing. */
          listing.id = `listing-${store.properties.id}`;
          /* Assign the `item` class to each listing for styling. */
          listing.className = 'item';

          /* Add the link to the individual listing created above. */
          const link = listing.appendChild(document.createElement('a'));
          link.href = '#';
          link.className = 'title';
          link.id = `link-${store.properties.id}`;
          link.innerHTML = `${store.properties.Nombre}`;

          /* Add details to the individual listing. */
          const details = listing.appendChild(document.createElement('div'));
          details.innerHTML = `${store.properties.Descripcion}`;
         

          /**
           * Listen to the element and when it is clicked, do four things:
           * 1. Update the `currentFeature` to the store associated with the clicked link
           * 2. Fly to the point
           * 3. Close all other popups and display popup for clicked store
           * 4. Highlight listing in sidebar (and remove highlight for all other listings)
           **/
          link.addEventListener('click', function () {
            for (const feature of stores.features) {
              if (this.id === `link-${feature.properties.id}`) {
                flyToStore(feature);
                createPopUp(feature);
              }
            }
            const activeItem = document.getElementsByClassName('active');
            if (activeItem[0]) {
              activeItem[0].classList.remove('active');
            }
            this.parentNode.classList.add('active');
          });
        }
      }

      /**
       * Use Mapbox GL JS's `flyTo` to move the camera smoothly
       * a given center point.
       **/
      function flyToStore(currentFeature) {
        map.flyTo({
          center: currentFeature.geometry.coordinates,
          zoom: 18
        });
      }

      /**
       * Create a Mapbox GL JS `Popup`.
       **/
      function createPopUp(currentFeature) {
        const popUps = document.getElementsByClassName('mapboxgl-popup');
        if (popUps[0]) popUps[0].remove();
        const popup = new mapboxgl.Popup({ closeOnClick: false })
          .setLngLat(currentFeature.geometry.coordinates)
          .setHTML(
            `<h3>${currentFeature.properties.Nombre}</h3><h4>Encargado: ${currentFeature.properties.encargado}</h4>`
          )
          .addTo(map);
      }
    </script>
  </body>
</html>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop