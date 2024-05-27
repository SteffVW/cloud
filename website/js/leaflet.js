let map = L.map('kaart').setView([51.34159790450801, 4.3213731949979], 15);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
let greenIcon = L.icon({
    iconUrl: 'assets/images/logo.png',

    iconSize: [38, 50], // size of the icon
    shadowSize: [50, 64], // size of the shadow
    iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});
L.marker([51.34159790450801, 4.3213731949979], { icon: greenIcon }).addTo(map);
