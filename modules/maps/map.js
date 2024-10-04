// Init map
var map = L.map('map', { worldCopyJump: true });

// Init layers
var osmLayer = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});
var satelliteLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
});

// Default layer
osmLayer.addTo(map);

// Marker grouping
var markerGroup = L.markerClusterGroup();
// var markerGroup = L.markerClusterGroup({ singleMarkerMode: true });
map.addLayer(markerGroup);

// Functions
function initializeMap() {
    // Set markers
    for (var i = 0; i < markers.length; i++) {
        var marker = markers[i];
        // L.marker([marker.lat, marker.lon]).addTo(map).bindPopup(marker.title);
        markerGroup.addLayer(L.marker([marker.lat, marker.lon]).bindPopup(marker.title));
    }
    // Calculate view position and zoom level
    var bounds = new L.LatLngBounds();
    for (var i = 0; i < markers.length; i++) {
        bounds.extend([markers[i].lat, markers[i].lon]);
    }
    map.fitBounds(bounds);
}
initializeMap();

function toggleLayer() {
    if (map.hasLayer(osmLayer)) {
        map.removeLayer(osmLayer);
        satelliteLayer.addTo(map);
    } else {
        map.removeLayer(satelliteLayer);
        osmLayer.addTo(map);
    }
}