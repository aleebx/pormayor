<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<title>Pagina no encontrada</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #7FC3EA;
	margin: 20px;
}

img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
    max-height: 500px;
}

p {
	margin: 12px 15px 12px 15px;
}

.sinPadding{
	padding: 0px !important;
}

.row{
	margin-top:20vh;
}

/*PC*/
@media (min-width: 1281px) {
	.sinPadding img{
 	width:80%;
 }
	 .row{
		margin-top:20vh;
	}

	img {

    max-height: 700px;
	}
	.sinPadding{
		margin-top: 6vh;
	}
}

/*LAPTOPS - PC*/
@media (min-width: 1024px) and (max-width: 1280px) {
	.sinPadding img{
 	width:80%;
 }
} 

/*TABLETS*/
@media (min-width: 768px) and (max-width: 1023px) {
 .sinPadding img{
 	width:50%
 }
 .row{
	margin-top:5vh;
}
	.l7 img{
		width: 60%;
	}
}
@media (min-width: 479px) and (max-width: 767px) {
 .sinPadding img{
 	width:50%
 }
 .row{
	margin-top:5vh;
}
	.l7 img{
		width: 70%;
	}
}
/*SMARTHPHONES*/
@media (min-width: 320px) and (max-width: 480px) {
	.row{
		margin-top:10vh;
	}

	.l7 img{
		width: 100%;
	}
}
</style>
</head>
<body>
	<div class="row">
		<div class="col s12 m12 l5 sinPadding" style="position:relative; top:15px">
			<img src="//pormayor.pe/img/error404A.png"></a>
			<!-- <img src="../img/error404A.png"></a> -->
				<div class="center hide-on-med-and-down" style="margin-top:10vh">
					<a href="//pormayor.pe" class="btn-large" style="background-color: #21478F !important;">Volver a pagina principal</a>
				</div>
		</div>
		<div class="col s12 m12 center hide-on-large-only" style="margin: 7vh 0px">
			<a href="//pormayor.pe" class="btn" style="background-color: #21478F !important;">Volver a pagina principal</a>
		</div>
		<div class="col s12 m12 l7">
			<img src="//pormayor.pe/img/error404B.png"></a>
			<!-- <img src="../img/error404B.png"></a> -->
		</div>
		
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>