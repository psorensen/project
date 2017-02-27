export default {
  init() {

    var arr = pgi_countries_json[0];
    var country_markers = [];
    arr.forEach( function (arrayItem) {
      var x = arrayItem;
      if (x.coords) {
        country_markers[x.name] = L.marker(x.coords).bindPopup('<h5>'+x.name+'</h5><p><a href="'+x.url+'">Visit Project</a></p>');
      }
    });

    // Clear all country markers
    function clear_markers(markers) {
      for ( var x in markers ) {
        map.removeLayer(country_markers[x]);
      }
    }



    var url = 'https://api.mapbox.com/styles/v1/ptrsrsn/cizi0joof000a2sou8yrtchmo/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoicHRyc3JzbiIsImEiOiJjaXJ4dzZ0cTIwMGhzMnpxYnlhcm04ampyIn0.DMwtd3ZGfpJqLWwitxmG1g';
    var map = L.map('map', {
      dragging: false,
      zoomControl: false,
      scrollWheelZoom: false,
    }).setView([-35, -5], 2.3);

    L.tileLayer(url, {
      id: 'mapbox.light',
    }).addTo(map);
    //
    // map.addLayer(country_markers.Brazil);
    // map.addLayer(country_markers.India);
    // map.addLayer(country_markers.Mozambique);
    // map.addLayer(country_markers.Kenya);

    function style(feature) {
      return {
        fillColor: '#017BD2',
        color: '#017BD2',
        weight: 1,
        opacity: .2,
        fillOpacity: 0.2
      };
    }
    L.geoJson(countries, {
      style: style,
      // onEachFeature: onEachFeature,
      onEachFeature: function (feature, layer) {
        layer.bindPopup(feature.properties.name);
      }
    } ).addTo(map);

    $('#map').show();

    $('.js-project-focus').on('click', function(e){
      $('.js-project-focus').removeClass('active');
      $(this).addClass('active');
      clear_markers(country_markers);
      var filter = $(this).data('filter');
      e.preventDefault();

      for ( var x in filter ) {
        map.addLayer(country_markers[filter[x]]);
      }
    })
    map.invalidateSize();


  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
