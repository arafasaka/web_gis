<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset    = "utf-8">
  <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
  <meta name       = "viewport" content        = "width=device-width, initial-scale=1">
  <title>LOGO</title>
<link href = "https://www.jqueryscript.net/css/jquerysctipttop.css" rel = "stylesheet" type = "text/css">
  <!-- Bootstrap -->
<link rel = "stylesheet" href = "https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link href = "<?=base_url()?>assets/css/BootSideMenu.css" rel = "stylesheet">
  <link href = "<?=base_url()?>assets/leaflet/leaflet.css" rel  = "stylesheet">
 

<style type = "text/css">
  .user{
    padding      : 5px;
    margin-bottom: 5px;
  }
  #mapid { height: 560px; }

</style>
</head>
<body>

  <!--Test -->
  <div id = "test">
    <h2>LOGO</h2>
    <div class = "list-group">
    <a   href  = "#" class = "list-group-item active">PETA</a>
    <a   href  = "<?=base_url()?>index.php/crud/index" class = "list-group-item">BANGUNAN</a>
    <a   href  = "<?=base_url()?>index.php/bidang/index" class = "list-group-item">BIDANG</a>
    <a   href  = "<?=base_url()?>index.php/dokumentasi/index" class = "list-group-item">DOKUMENTASI</a>
    </div>

  </div>
  <!--/Test -->

  <!--Normale contenuto di pagina-->
  <div class = "container">
     <div class = "row">
    <div class = "col-md-12">
          <h1>WEB GIS</h1>
      </div>
	</div>
	
	<div class = "row">
	<div class = "col-md-12">
	<div id    = "mapid"></div>
      </div>
    </div>

    

  </div>
  <!--Normale contenuto di pagina-->

  <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src = "https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src = "<?=base_url()?>assets/js/BootSideMenu.js"></script>
  <script src = "<?=base_url()?>assets/leaflet/leaflet.js"></script>

  <script type = "text/javascript">
	$('#test').BootSideMenu({side:"left", autoClose:false});
	
	var map      = L.map('mapid').setView([-7.0686339,110.4397131], 13);
	var base_url = "<?=base_url()?>";

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
var myFeatureGroup = L.featureGroup().addTo(map).on("click",groupClick);
var bangunanMarker;


$.getJSON(base_url+"index.php/home/bangunan_json", function(data){
    $.each(data, function(i, field){
      
      var v_lat         = parseFloat(data[i].bangunan_lat);
      var v_long        = parseFloat(data[i].bangunan_long);
      var icon_bangunan = L.icon({
                          iconUrl : base_url+'assets/images/coffee.png',
                          iconSize: [30,30]
      });
bangunanMarker = L.marker([v_long, v_lat],{icon: icon_bangunan})
                  .addTo(myFeatureGroup)
                  .bindPopup(data[i].bangunan_nama);
bangunanMarker.id = data[i].bangunan_id;
    
	
    });
  });


  //TAMBAH MARKER
  
  map.on("contextmenu", function (event) {
    var info_bangunan = "Koordinat: " + event.latlng.toString()
        info_bangunan += "<form action=\"<?=base_url()?>index.php/crud/tambah_aksi\" method=\"POST\"> <label for=\"bangunan_nama\">Bangunan Nama:</label><br><input type=\"text\" id=\"bangunan_nama\" name=\"bangunan_nama\"><br>\ <label for=\"bangunan_latitude\">Bangunan Latitude:</label><br><input type=\"text\" id=\"bangunan_lat\" name=\"bangunan_lat\"><br><label for=\"bangunan_longitude\">Bangunan Longitude:</label><br><input type=\"text\" id=\"bangunan_long\" name=\"bangunan_long\"><br><br><input type=\"submit\" value=\"Submit\">";
    //var info_bangunan  = "Koordinat: " + event.latlng.toString() + "<b><br>Bangunan Nama :<b><br> <input type=\"text\" id=\"bangunan_nama\" name=\"bangunan_nama\"> <b><br>Latitude :<b><br> <input type=\"text\" id=\"bangunan_lat\" name=\"bangunan_lat\"><b><br>Longitude:<b><br> <input type=\"text\" id=\"bangunan_long\" name=\"bangunan_long\"><button type=\"button\" id=\"bangunan_insert\">Masukan</button></form>"; 
  L.marker(event.latlng).addTo(map)
   //console.log("Coordinates: " + event.latlng.toString())
   .bindPopup(info_bangunan,{
                    closeButton: true,
                    offset     : L.point(0, -20)});

  /* map.on('click', function(e) {
    alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)
}); */


});

function groupClick(event){
  console.log("Clicked on marker"+event.layer.id);
  //alert("Clicked on marker"+event.layer.id);
}

$.getJSON(base_url+"assets/geojson/map8.geojson", function(data){
  geoLayer = L.geoJson(data, {
            style: function(feature){

              var kategori = (feature.properties.kategori);
              if(kategori==1){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#008cff"

              };
              }else if (kategori==2){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#e88243"
              };
              }else if (kategori==3){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#4ef542"
              };
              }else if (kategori==4){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#f5f542"
              };
              }
              else if (kategori==5){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#42f5da"
              };
              }
              else if (kategori==5){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#8442f5"
              };
              }
              else if (kategori==6){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#f542e0"
              };
              }else if (kategori==7){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#f5424e"
              };
              }
              else if (kategori==8){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#81948c"
              };
              }else if (kategori==9){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#141f1a"
              };
              }else if (kategori==9){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#ffffff"
              };
              }else if (kategori==10){
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#909647"
              };
              }
              else{
                return{
                fillOpacity: 0.8,
                weight     : 1,
                opacity    : 1,
                color      : "#c47e0c"
              };
              }
            },
  
            onEachFeature: function(feature, layer){
              var kode = feature.properties.kode;
              
              $.getJSON(base_url+"index.php/home/foto/"+kode, function(data){
                  
                var info_bidang  = "<h5 style='text-align:center'>INFO BIDANG</h5>";
                    info_bidang += "<a href='<?=base_url()?>index.php/home/detail/"+kode+"'><img src='<?=base_url()?>assets/uploads/"+data+"' alt='maptime logo gif' height'180px' width='230px'/></a>";
                    info_bidang += "<div style='width:100%;text-align:center;margin-top:10px;'><a href='<?=base_url()?>index.php/home/detail/"+kode+"'> DETAIL<br></a></div";
                  layer.bindPopup(info_bidang,{
                    maxWidth   : 260,
                    closeButton: true,
                    offset     : L.point(0, -20)
                  });
                  layer.on('click', function(){
                    layer.openPopup();
                  });
              });
              

            }

  }).addTo(map);

});
  </script>

</body>
</html>