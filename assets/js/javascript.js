"use strict";

var zoom = false;
var currentZoom = 1;
var defaultZoom = 3;
var flyActive = false;
var groups = new Array();

window.onload = function () {
  /* --------------------- Simple INITS ----------------------- */
  AOS.init();
  MediaBox('.mediabox');

  /* -------------- Mapbox with single location --------------- */
  var mapbox = document.querySelectorAll('.mapbox');

  if (mapbox.length) {
    mapboxgl.accessToken = 'pk.eyJ1IjoianotYmFybjNzIiwiYSI6ImNsMjU0ZTYxajIwZ20zZG1pcWN0bTFscjMifQ.ZiCT27OtewmE_T4fRxvC0w';

    mapbox.forEach((container) => {
      var group = new Array();
      var map = new mapboxgl.Map({
        container: container.id,
        style: 'mapbox://styles/jz-barn3s/cl254ifao002r16p1dbw7d4aa', 
        zoom: 10,
      });
      map.scrollZoom.disable();

      var markers = container.querySelectorAll('.marker');
      markers.forEach((marker) => {
        var lat = parseFloat( marker.getAttribute('data-lat') );
        var lng = parseFloat( marker.getAttribute('data-lng') );

        const mark = new mapboxgl.Marker({ color: '#F9B23E' })
          .setLngLat([lng, lat])
          .addTo(map);
        
        group.push([lng, lat]);
      });

      b3_fitToBounds(map, group);
    });
  } 
};

function b3_fitToBounds(map, group) {
	if (group.length === 1) {
		map.flyTo({
			center: group[0],
			zoom: 10,
			speed: 3,
		});
	} else {
		// https://github.com/mapbox/mapbox-gl-js/issues/4846
		// Pass the first coordinates in the LineString to `lngLatBounds` &
		// wrap each coordinate pair in `extend` to include them in the bounds
		// result. A variation of this technique could be applied to zooming
		// to the bounds of multiple Points or Polygon geomteries - it just
		// requires wrapping all the coordinates with the extend method.
		var bounds = group.reduce(function(bounds, coord) {
			return bounds.extend(coord);
		}, new mapboxgl.LngLatBounds(group[0], group[0]));

		map.setPitch(1);
		map.setBearing(1);
		//map.setCurve(1);
		map.fitBounds(bounds, {
			padding: {
				top: 50,
				bottom: 50,
				left: 50,
				right: 50
			}
		});
	}
}
