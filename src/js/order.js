/**
 * contact page map
 * adds full-width map to the contact page
 * set coordinates in .setView and set
 * marker coordinates in the marker
*/ 

var mymap = L.map('map').setView([52.62147927683726, 1.2805286164869416], 14);
mymap.scrollWheelZoom.disable();

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYmVhcm1vZGUiLCJhIjoiY2t0MnA2emN4MGduazMwcjFmeGJ6ZHF0NiJ9.OCgVfAjoOIVrwZSjDxhxMA'
}).addTo(mymap);

var marker = L.marker([52.62147927683726, 1.2805286164869416]).addTo(mymap);

marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();

