
@extends('adminlte::page')

@section('title', 'AdminHome')



@section('content')
@yield('mapa')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Mapa</title>
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
        <h1>XEÑAL Ubicaciones</h1>
      </div>
      <div id="listings" class="listings"></div>
    </div>
    <div id="map" class="map"></div>
    <script>
      mapboxgl.accessToken = 'pk.eyJ1Ijoiam9yZ2VqbW56MzAiLCJhIjoiY2w4MXBxdjdyMDJhNTN2cGh4emNmd3BkbCJ9.NFtlYZXXZqlJn5fVKzOuBQ';

      
      const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center:  [-87.35754700319097,20.31791304771422 ],
        zoom: 15.5,
        scrollZoom: true
      });
      /**
       * EN ESTA SECCIÓN DE CODIGO PODEMOS AGREGAR NUEVAS UBICACIONES CON LA SIGUIENTE SINTAXIS
       * {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [LONGITUD , LATITUD]
            },
            'properties': {
              'encargado':'NOMBRE ENCARGADO',
              'Nombre': 'NOMBRE DE LA UBICACION',
              'Descripcion': 'DESCRIPCION BREVE'
            }
          }
       */
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
              'Descripcion': 'IDF que se encuentra en oficinas'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [-87.358944,20.320106626343765]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Registro 1',
              'Descripcion': 'Registro cercano entrada transferencia'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [-87.359997,20.319358]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Registro 3',
              'Descripcion': 'Registro cercano entrada transferencia'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [-87.360329,20.318493]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Registro 4',
              'Descripcion': 'Registro cercano entrada transferencia'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [ -87.361366,20.314901]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Nicho cascada',
              'Descripcion': 'Nicho cercano a puente Rio'
            }

          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [ -87.356865, 20.320359]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Nicho Triatlón 1',
              'Descripcion': 'Nicho utilizado unicamente para Triatlon'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [ -87.357161, 20.320394]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Nicho Triatlón 2',
              'Descripcion': 'Nicho utilizado unicamente para Triatlon'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [ -87.357248, 20.320584]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Nicho guias',
              'Descripcion': 'Nicho cercano a sala de descanso guias'
            }
          }
          ,
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [ -87.358294, 20.320905]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'IDF Transferencia ',
              'Descripcion': 'IDF proporciona red a centro de transferencia'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [ -87.361123, 20.321949]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Nicho centro acopio',
              'Descripcion': 'Nicho usado para triatlon'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [ -87.361015, 20.322378]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Nicho caseta pluma',
              'Descripcion': 'Nicho usado para triatlon'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [ -87.358605, 20.320501]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Nicho inicio bici',
              'Descripcion': 'Nicho cercano a punto de bicicletas'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [ -87.358501, 20.320141]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Registro entrada tren',
              'Descripcion': 'Pase de cables de red cercano a estación de tren'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [  -87.361872, 20.314267]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Nicho inicio rio',
              'Descripcion': 'Proporciona red a modulos de inicio de Rio'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [  -87.362312, 20.314608]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'IDF inicio rio',
              'Descripcion': 'Proporciona red a modulos de inicio de Rio'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [  -87.356664, 20.314890]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'IDF Adrenalina ',
              'Descripcion': 'IDF cercano a xperencia adrenlina'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [   -87.359915,20.315021]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'IDF Zip Bike ',
              'Descripcion': 'IDF dentro de zip bike'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [   -87.356157,20.317601]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Murete módulo cafe ',
              'Descripcion': 'Murete de modulo cafe'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [   -87.355672,20.316164]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'IDF Faro-Tobogán ',
              'Descripcion': 'IDF atras de Faro'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [   -87.355669,20.315783]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'Nicho Sea Trek ',
              'Descripcion': 'Nicho que da red a Sea trek puente flotante'
            }
          },
          {
            'type': 'Feature',
            'geometry': {
              'type': 'Point',
              'coordinates': [   -87.355962,20.319631]
            },
            'properties': {
              'encargado':'Felipe Tun Pot',
              'Nombre': 'IDF Poz',
              'Descripcion': 'IDF parte de atras taquillas opcionales'
            }
          }
        ]
      };


      stores.features.forEach((store, i) => {
        store.properties.id = i;
      });


      map.on('load', () => {
        


  map.addLayer({
    id: 'locations',
    type: 'circle',
    
    source: {
      type: 'geojson',
      data: stores
    }
  });

        
        buildLocationList(stores);
        addMarkers();
      });

      
      function addMarkers() {
        
        for (const marker of stores.features) {
         
          const el = document.createElement('div');
         
          el.id = `marker-${marker.properties.id}`;
         
          el.className = 'marker';

          
          new mapboxgl.Marker(el, { offset: [0, -23] })
            .setLngLat(marker.geometry.coordinates)
            .addTo(map);

          
          el.addEventListener('click', (e) => {
            
            flyToStore(marker);
            
            createPopUp(marker);
            
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

      
      function buildLocationList(stores) {
        for (const store of stores.features) {
          
          const listings = document.getElementById('listings');
          const listing = listings.appendChild(document.createElement('div'));
          
          listing.id = `listing-${store.properties.id}`;
          
          listing.className = 'item';

          
          const link = listing.appendChild(document.createElement('a'));
          link.href = '#';
          link.className = 'title';
          link.id = `link-${store.properties.id}`;
          link.innerHTML = `${store.properties.Nombre}`;

          
          const details = listing.appendChild(document.createElement('div'));
          details.innerHTML = `${store.properties.Descripcion}`;
         

          
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

      
      function flyToStore(currentFeature) {
        map.flyTo({
          center: currentFeature.geometry.coordinates,
          zoom: 18
        });
      }

      
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