<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body {
		color: #fff;
		background: #4c535d;
		font-family: 'Roboto', sans-serif;
	}
    .form-control {
        min-height: 41px;
		box-shadow: none;
		border-color: #e1e4e5;
	}
    .form-control:focus {
		border-color: #5fcaba;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }    
	.signup-form {
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}	
    .signup-form form {
		color: #9ba5a8;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
    .signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #428bca;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #3fc0ad;
        outline: none !important;
	}
	.signup-form a {
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #5fcaba;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>
    <?php foreach($bangunan as $b){ ?>
    <div class="signup-form">
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="POST">
		<h2>EDIT DATA BANGUNAN</h2>
		<p>PASTIKAN DATA BENAR</p>
		<hr>
        <div class="form-group">
        	<input type="text" class="form-control" name="id" value="<?php echo $b->bangunan_id ?>" placeholder="" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="nama" value="<?php echo $b->bangunan_nama ?>" placeholder="Nama Bangunan" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="bangunan_lat" value="<?php echo $b->bangunan_lat ?>" placeholder="Latitude" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="bangunan_long" value="<?php echo $b->bangunan_long ?>" placeholder="Longitude" required="required">
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">PERBARUI</button>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">BATAL</button>
        </div>
    </form>
	</div>
    <?php } ?>
</body>
</html>