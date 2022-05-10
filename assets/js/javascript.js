"use strict";

var zoom = false;
var currentZoom = 1;
var defaultZoom = 3;
var flyActive = false;
var groups = new Array();
var map = null;
var markers = null;
var catMap = false;

document.addEventListener("DOMContentLoaded", function() {
  /* --------------------- Simple INITS ----------------------- */
  AOS.init();
  MediaBox('.mediabox');

  /* -------------- Mapbox with single location --------------- */
  let mapbox = document.querySelectorAll('.mapbox');

  if (mapbox.length) {
    mapboxgl.accessToken = 'pk.eyJ1IjoianotYmFybjNzIiwiYSI6ImNsMjU0ZTYxajIwZ20zZG1pcWN0bTFscjMifQ.ZiCT27OtewmE_T4fRxvC0w'; //token is locked down by domain.

    mapbox.forEach((container) => {
      // type
      if (container.classList.contains('category-map')) {
        catMap = true;
      }

      // map setup
      var group = new Array();
      
      // map zoom
      var zoom = parseInt(container.dataset.zoom);
      var zoomSpecified = true;
      if (!zoom) {
        zoom = 10;
        zoomSpecified = false;
      }

      // set the style
      var style = "mapbox://styles/jz-barn3s/cl254ifao002r16p1dbw7d4aa";
      var water = Boolean(container.dataset.whitewater);
      if (water) {
        style= "mapbox://styles/jz-barn3s/cl30hkt5o005214pdgjxnj3zq";
      }

      // init map
      map = new mapboxgl.Map({
        container : container.id,
        style     : style, 
        zoom      : zoom,
      });
      map.scrollZoom.disable();
      map.addControl(new mapboxgl.NavigationControl());

      // set up markers
      markers = container.querySelectorAll('.marker');
      markers.forEach((marker) => {
        var lat = parseFloat( marker.dataset.lat );
        var lng = parseFloat( marker.dataset.lng );
        var icon = marker.dataset.icon;
        var html = marker.innerHTML;
        var color = marker.dataset.color;
        var category = marker.dataset.category;

        // check color
        if (!color) {
          color = '#F9B23E';
        }

        var markEle = document.createElement('div');
        markEle.classList.add('map-marker');
        markEle.style.color = color;

        // check html
        if (html) {
          var inner = document.createElement('div');
          inner.classList.add('inner');
          inner.innerHTML = html;
          markEle.innerHTML = inner;
        }

        // copy classes
        marker.classList.forEach((theclass) => {
          markEle.classList.add(theclass);
        });

        // check icon
        if (icon) {
          markEle.classList.add('map-icon');
          //markEle.className += ' map-icon';
          markEle.style.backgroundImage = 'url("'+icon+'")';
        } else {
          markEle.classList.add('map-marker'); 
          markEle.innerHTML = '<i class="fa-solid fa-location-dot"></i>';
        }

        // starting opacity
        if (catMap && !marker.classList.contains('category')) {
          markEle.style.opacity = 0;
        }

        //click?
        if (category) {
          markEle.addEventListener('click', function () {
            b3_parseCategory(container.id, category);
          });
        } else if (html) {
          markEle.addEventListener('click', function () {
            
          });
        }

        // add the marker
        const mark = new mapboxgl.Marker(markEle)
          .setLngLat([lng, lat])
          .addTo(map);
      
        group.push([lng, lat]);
      });

      //if we don't specify a zoom
      if (!zoomSpecified) {
        b3_fitToBounds(map, group);
      }
    });
  } 
});

/**
 * 
 * @param {*} containerId 
 * @param {*} category 
 */
function b3_parseCategory(containerId, category) {
  let marks = document.getElementById(containerId).querySelectorAll('.map-marker.'+category);
  if (marks.length) {
    //hide all markers
    document.getElementById(containerId).querySelectorAll('.map-marker').forEach((m) => {
      m.style.opacity = 0;
    });

    marks.forEach((m) => {
      m.style.opacity = 1;
    });
  } else {
    alert('No locations with that category found.');
  }
}

/**
 * 
 * @param {*} map 
 * @param {*} group 
 */
function b3_fitToBounds(map, group) {
  var padding = 50;
  if (window.innerWidth > 1600) {
    padding = 200;
  } else if (window.innerWidth > 1279) {
    padding = 150;
  } else if (window.innerWidth > 768) {
    padding = 100;
  }

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
      padding: padding
    });
  }
}


/*

marker.getElement().addEventListener('click', function () {
  markers.forEach((m) => {
    m.style.opacity = 0;
  });

  let marks = container.querySelectorAll('.'+category);
  if (marks.length) {
    marks.forEach((m) => {
      console.log(m);
    });
  } else {
    alert('No locations with that category found.');
  }
}); 

          */