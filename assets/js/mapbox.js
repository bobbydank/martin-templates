"use strict";

var zoom = false;
var currentZoom = 1;
var defaultZoom = 3;
var flyActive = false;
var groups = new Array();
var map = null;

//the magic
window.onload = function () {
    console.log('hi');
    /* -------------- Mapbox with single location --------------- */
    var mapboxSingle = document.querySelectorAll('.mapbox-single');

    mapboxSingle.forEach((container) => {
        console.log('hi');

        mapboxgl.accessToken = 'pk.eyJ1IjoianotYmFybjNzIiwiYSI6ImNsMjU0ZTYxajIwZ20zZG1pcWN0bTFscjMifQ.ZiCT27OtewmE_T4fRxvC0w';
        map = new mapboxgl.Map({
            container: 'mapbox',
            style: 'mapbox://styles/jz-barn3s/cl254ifao002r16p1dbw7d4aa', 
            zoom: currentZoom, // starting zoom 
        });

        //map.scrollZoom.disable();

        //var markers = container.getElementsByClassName('marker');
        //console.log(markers);
    });
}