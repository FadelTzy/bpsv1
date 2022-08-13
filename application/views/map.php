<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width ,initial-scale=1">
<head>
    <title>My Map</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/leaflet/leaflet.css">
<script src="<?php echo base_url() ?>aset/leaflet/leaflet.js"></script>
<script src="<?php echo base_url() ?>aset/leaflet/leaflet-src.js"></script>
<script src="<?php echo base_url() ?>aset/map/sulselbps.geojson"></script>
<style type="text/css">
    #mapid {height: 300px;
    		width: 600px;}

</style>

<body>
    <h1>My Map</h1>
    <div id="mapid"></div>
    <script type="text/javascript">
        var map = L.map('mapid').setView([-4.2,120 ], 6.4);
        var countriesLayer = L.geoJson(countries).addTo(mapid);
    </script>
</body>
</html>