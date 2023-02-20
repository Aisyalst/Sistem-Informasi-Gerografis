<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Pekanbaru</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .leaflet-container {
            height: 1340px;
            width: 2600px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-
    awesome.min.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js"
    charset="utf-8"></script> 
</head>
<body>
<div id="map"></div>
    <script>
        var map = L.map('map', {
        center: [0.5072815422021771, 101.44723055157702],
        zoom: 16
        });
        var marker = L.marker([0.5047966009004038, 101.44723207809639]).addTo(map).bindPopup("<b>Pekanbaru</b><br>SMK HASANAH").openPopup();
        var marker = L.marker([0.5285029851262651, 101.4339496777506]).addTo(map).bindPopup("<b>Pekanbaru</b><br>Rumah Ical").openPopup();
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        L.Control.geocoder({
        position: 'topleft'
        }).addTo(map);
        L.control.locate().addTo(map);
    </script>
</body>
</html>