<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LOGO</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">  
  <link href="<?=base_url()?>assets/leaflet/leaflet.css" rel="stylesheet">
 

<style type="text/css">
 
  #mapid { height: 380px; }
  .slider-holder
        {
            width: 800px;
            height: 380px;
            background-color: yellow;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            text-align: center;
            overflow: hidden;
        }
       
        .image-holder
        {
            width: 2400px;
            background-color: white;
            height: 380px;
            clear: both;
            position: relative;
           
            -webkit-transition: left 2s;
            -moz-transition: left 2s;
            -o-transition: left 2s;
            transition: left 2s;
        }
       
        .slider-image
        {
            float: left;
            margin: 0px;
            padding: 0px;
            position: relative;
        }
       
        #slider-image-1:target ~ .image-holder
        {
            left: 0px;
        }
       
        #slider-image-2:target ~ .image-holder
        {
            left: -800px;
        }
       
        #slider-image-3:target ~ .image-holder
        {
            left: -1600px;
        }
       
        .button-holder
        {
            position: relative;
            top: -20px;
        }
       
        .slider-change
        {
            display: inline-block;
            height: 10px;
            width: 10px;
            border-radius: 5px;
            background-color: brown;
        }

</style>
</head>
<body>
    
<div style="width: 50%; float:left">
<div id="mapid"></div>
</div>

<div style="width: 50%; float:right">
<div class="slider-holder">
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
        <div class="image-holder">
            <?php foreach ($dok as $r) {?>
                <img src="<?=base_url()?>assets/uploads/<?=$r->dokumentasi_gambar?>" class="slider-image" />
            <?php }?>

        </div>
        <div class="button-holder">
            <a href="#slider-image-1" class="slider-change"></a>
            <a href="#slider-image-2" class="slider-change"></a>
            <a href="#slider-image-3" class="slider-change"></a>
        </div>
    </div>
</div>
<div>
<ul>
    <?php foreach ($bidang as $r){?>
    <li>
            Nama Bidang : <?=$r->bidang_nama?>
    </li>
    <li>
            Keterangan : <?=$r->bidang_keterangan?>
    </li>
    <?php }?>
</ul>
</div>


<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/leaflet/leaflet.js"></script>

  <script type="text/javascript">
  	var map = L.map('mapid').setView([-7.0686339,110.4397131], 13);
    var base_url="<?=base_url()?>";
    var v_kode="<?=$kode?>";

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

$.getJSON(base_url+"assets/geojson/map.geojson", function(data){
  geoLayer = L.geoJson(data, {
            style: function(feature){

              var kode = feature.properties.kode
                    if(kode==v_kode){
                        return{
                            fillOpacity: 0.5,
                            fillColor: "#008cff",
                            weight: 5,
                            opacity: 1,
                            color:"#e88243"
                        };
                    }else{
                        return{
                            fillOpacity: 0.0,
                            weight: 5,
                            opacity: 1,
                            color:"#e88243"
                        };

                    }
            },
            onEachFeature: function(feature, layer){
              var kode = feature.properties.kode;
              var latt = parseFloat(feature.properties.latitude);
              var longg = parseFloat(feature.properties.longitude);

            if(kode==v_kode){
                map.flyTo([longg,latt], 15, {
                    animate: true,
                    duration: 2
                });
                var center = getCentroid(feature.geometry.coordinates[0]);
                L.marker([center[1],center[0]]).addTo(map);
            }
            }

  }).addTo(map);

});
            var getCentroid = function (coord)
            {
                var center = coord.reduce(function (x,y){
                    return [x[0] + y[0]/coord.length, x[1] + y[1]/coord.length]
                }, [0,0])
                return center;
            }
    </script>

</body>
</html>