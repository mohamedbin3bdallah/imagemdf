<?php include('develops/index.php'); ?>
<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="utf-8"/>
		<title>Image Modifier</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<meta content="" name="description"/>
		<meta content="" name="author"/>

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
		
		<style>
			body { font-family: 'Righteous', cursive; }
		</style>
		
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		
		<script type="text/javascript" src="js/imageprcs.js"></script>
	</head>
	<body style="background-color: #fff;">
		<div class="container">
			<div class="row" style="padding-top: 10%; text-align: center;">
				<h3><b>Image Modifier</b></h3>
			</div>
			<div class="row" style="background-color: rgba(154, 244, 254, 0.5); border-radius: 30px; border-style: solid; border-color: rgba(148, 187, 255, 0.5) rgba(0, 84, 230, 0.5); padding-top: 10%; padding-bottom: 10%;">
				<div class="col-md-6 col-xs-12 col-md-offset-3">
					<form action="" method="POST" enctype="multipart/form-data">
						<input  style="/*background-color: rgba(251, 247, 182, 1);*/" type="file" id="file" name="file" class="form-control" required/>
						<br>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1" style="/*background-color: rgba(251, 247, 182, 1);*/">Width</span>
							<input type="text" id="width" name="width" class="form-control" />
							<input type="hidden" name="width-hidden" id="width-hidden" value="1" />
							<div id="width-validation"></div>
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1" style="/*background-color: rgba(251, 247, 182, 1);*/">Height</span>
							<input type="text" id="height" name="height" class="form-control" />
							<input type="hidden" name="height-hidden" id="height-hidden" value="1" />
							<div id="height-validation"></div>
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1" style="/*background-color: rgba(251, 247, 182, 1);*/">Quality</span>
							<input type="text" id="quality" name="quality" class="form-control" />							
							<input type="hidden" name="quality-hidden" id="quality-hidden" value="1" />
							<div id="quality-validation"></div>
							<span class="input-group-addon" id="basic-addon1" style="/*background-color: rgba(251, 247, 182, 1);*/">%</span>
						</div>
						<br>
						<center><input type="submit" id="save" name="save" value="SAVE" class="btn btn-primary" /></center>
					</form>
				</div>
			</div>
		</div>
	</body>
	<footer>
		<div class="container">
			<div class="row" style="padding-top: 5%; text-align: center;">				
				<div style="color: #F7A503;"><h4><b>Powered By: &reg; <a href="http://www.arise-mpe.com/" target="_blank" style="color: #0F72B8">ARISE</a><a href="http://www.arise-mpe.com/" target="_blank" style="color: #E6007E"> MPE</a></b></h4></div>
			</div>
		</div>
	</footer>
</html>