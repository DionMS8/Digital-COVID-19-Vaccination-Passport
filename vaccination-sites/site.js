
// CREATING A MAP OBJECT FOR THE LEAFLET.JS MAP
const mymap = L.map("vax-map").setView([10.7, -61.3], 8.5);

// L => LEAFLET
// setView[LAT, LONG, ZOOM LEVEL]

// CREATING AN OBJECT FOR THE OPENSTREETMAP ATTRIBUTION
const attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';

const tileUrl = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";

const tiles = L.tileLayer(tileUrl, {attribution})

tiles.addTo(mymap);


// var syringe = L.icon({
//     iconUrl: 'touch-face.PNG',
//     iconSize:     [38, 95], // size of the icon
//     iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
//     popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
// });


var marker0 = L.marker([10.2672, -61.4643]).addTo(mymap);
var marker1 = L.marker([10.793112750402864, -60.94664991349199]).addTo(mymap);
var marker2 = L.marker([10.59513130277378, -61.13217550334089]).addTo(mymap);
var marker3 = L.marker([10.304409887596325, -61.17388268217891]).addTo(mymap);
var mayaro = L.marker([10.29470912734291, -61.00555171683504]).addTo(mymap);
var siparia = L.marker([10.144794737018364, -61.5038325763601]).addTo(mymap);
var diego = L.marker([10.722196035826482, -61.56342598482388]).addTo(mymap);
var carenage = L.marker([10.685253405728812, -61.59171650334024]).addTo(mymap);
var morvant = L.marker([10.663578312104521, -61.47798111683251]).addTo(mymap);
var joseph = L.marker([10.650244704908799, -61.423838061012525]).addTo(mymap);
var barataria = L.marker([10.647420186546276, -61.46389746101247]).addTo(mymap);
var arima = L.marker([10.636146305159848, -61.28584830334058]).addTo(mymap);
var horquetta = L.marker([10.594705814002317, -61.27610238799696]).addTo(mymap);
var helena = L.marker([10.582565751376267, -61.34255344566897]).addTo(mymap);
var grande = L.marker([10.595068027249166, -61.132229147520896]).addTo(mymap);
var chag = L.marker([10.514379912461031, -61.39974544752146]).addTo(mymap);
var freeport = L.marker([10.46409165531836, -61.42010994990985]).addTo(mymap);
var couva = L.marker([10.421434225957567, -61.450671832178145]).addTo(mymap);
var ptown = L.marker([10.268906361395942, -61.38102998985114]).addTo(mymap);
var laromaine = L.marker([10.25256211587154, -61.4804685456712]).addTo(mymap);
var madeleine = L.marker([10.26715390466821, -61.426180903343266]).addTo(mymap);
var pfortin = L.marker([10.173721216739862, -61.679864047523864]).addTo(mymap);


var bago1 = L.marker([11.1600812516508, -60.815371716828594], {color: "red"}).addTo(mymap);
var bago2 = L.marker([11.18087544575095, -60.71333500333641]).addTo(mymap);
var bago3 = L.marker([11.249236800891017, -60.581632430319864]).addTo(mymap);



