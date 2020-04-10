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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type = "text/css">
    .body {
		color: #fff;
		background: #4c535d;
		font-family: 'Roboto', sans-serif;
    }
	.table-wrapper {
        background: #fff;
        padding: 10px;
        margin: 30px 0;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
		font-size: 15px;
        padding-bottom: 10px;
        margin: 0 0 10px;
		min-height: 45px;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
	.table-title select {
		border-color: #ddd;
		border-width: 0 0 1px 0;
		padding: 3px 10px 3px 5px;
		margin: 0 5px;
	}
	.table-title .show-entries {
		margin-top: 7px;
	}
	.search-box {
        position: relative;
        float: right;
    }
	.search-box .input-group {
		min-width: 200px;
		position: absolute;
		right: 0;
	}
	.search-box .input-group-addon, .search-box input {
		border-color: #ddd;
		border-radius: 0;
	}
	.search-box .input-group-addon {
		border: none;
		border: none;
		background: transparent;
		position: absolute;
		z-index: 9;
	}
    .search-box input {
        height: 34px;
        padding-left: 28px;		
		box-shadow: none !important;
		border-width: 0 0 1px 0;
    }
	.search-box input:focus {
		border-color: #3FBAE4;
	}
    .search-box i {
        color: #a0a5b1;
        font-size: 19px;
		position: relative;
		top: 2px;
		left: -10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }    
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
		padding: 0 10px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
    .box {
        width: 10px;
        height: 50px;
        padding-left: 750px;
    
}
  .user{
    padding      : 5px;
    margin-bottom: 5px;
  }
  #mapid { height: 560px; }

</style>
  
<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	// Animate select box length
	var searchInput = $(".search-box input");
	var inputGroup = $(".search-box .input-group");
	var boxWidth = inputGroup.width();
	searchInput.focus(function(){
		inputGroup.animate({
			width: "300"
		});
	}).blur(function(){
		inputGroup.animate({
			width: boxWidth
		});
	});
});
</script>
</head>
<body>

  <!--Test -->
  <div id = "test">
    <h2>LOGO</h2>
    <div class = "list-group">
    <a   href  = "<?=base_url()?>index.php/home/index" class = "list-group-item active">PETA</a>
    <a   href  = "<?=base_url()?>index.php/crud/index" class = "list-group-item">BANGUNAN</a>
    <a   href  = "<?=base_url()?>index.php/bidang/index" class = "list-group-item">BIDANG</a>
    <a   href  = "#" class = "list-group-item">DOKUMENTASI</a>
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

 </div>
  <!--Normale contenuto di pagina-->

  <div class="container">
        <div class="table-wrapper">			
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">					
					</div>
					<div class="col-sm-4">
						<h2 class="text-center">DATA DOKUMENTASI BIDANG</h2>
					</div>
                    <div class="col-sm-4">
                        <div class="search-box">
							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
								<input type="text" class="form-control" placeholder="Search&hellip;">
							</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="btn btn-primary btn-md" onclick="location.href='<?php echo base_url();?>index.php/dokumentasi/tambah'">TAMBAH DOKUMENTASI BIDANG</button>
            
            <a class="btn btn-danger" href="<?php echo base_url('index.php/bidang/print') ?>"> <i class="fa fa-print"></i> EXPORT</a>
            <!-- <a class="btn btn-warning" href="<?php echo base_url('index.php/crud/excel') ?>"> <i class="fa fa-print"></i> Export EXCEL </a>   -->
            <div class="form-group">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Bidang <i class="fa fa-sort"></i></th>
                        <th>Gambar Dokumentasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                        
                        <?php 
                        $no=1;
                        foreach($datas as $b){ ?>
                        
                            <tr>
                        <td><?php echo $b->dokumentasi_id; ?></td>
                        <td><?php echo $b->bidang_kode; ?></td>
                        <td><?php echo $b->dokumentasi_gambar; ?></td>
                        
                        <td>
                            <?php $a= '\'index.php/crud/hapus/' ?>
							
                            <a href='<?=base_url().'index.php/dokumentasi/edit/' . $b->bidang_kode?>'   class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href='<?=base_url().'index.php/dokumentasi/hapus/' . $b->dokumentasi_id?>' class='delete' title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>   



  <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src = "https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src = "<?=base_url()?>assets/js/BootSideMenu.js"></script>
  <script src = "<?=base_url()?>assets/leaflet/leaflet.js"></script>
  <script type = "text/javascript">
	$('#test').BootSideMenu({side:"left", autoClose:false});
  
    
  
  </script>


</body>
</html>