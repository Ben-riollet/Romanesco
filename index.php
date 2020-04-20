<html>
<head>
	<meta charset="UTF-8">
	<title>Romanesco</title>
	<style type="text/css">

	p{	font-family: 'Work Sans', sans-serif;
		font-size       : 14pt;
		font-color: #000;
		font-style: normal;
		margin-left: 90px;
		font-weight: normal;
	}
	h1 {
		font-family: 'Work Sans', sans-serif;
		font-size       : 14pt;
		font-color: #000;
		font-style: normal;

	}
	{

	}
	a:link {
	text-decoration: none;
	font-size: 14pt;
	color: #000;
	}
	a:visited {
	text-decoration: none;
	color: #000;
	}

	a:hover, a:active {
	text-decoration: none;
	}
	audio {
   display:none;
}
	</style>

</style>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/romanesco.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/screen.css">
</head>
<body>
	<h1><span style="font-weight:normal">
<div class="container-fluid">
		<div class="col-sm-9">
			<canvas id="mainCanvas" width="1600" height="600" margin-right="50%"></canvas>
			<img id="previewCursor" >
		</div>
		<div class="col-sm-3">

			<div onclick="saveImage()"> Enregistrer image </div>

			<p>Changer la taille</p>

			<form>
				<input type="number" data-type="range" name="infoSize" id="infoSize" min="1" max="2000" onchange="updateBrush()" value="50">
			</form>

			<p>Sélectionne une brosse</p>
			<div id="brushs">
				<?php
					foreach (glob("content/brush/*.*") as $id => $brush) {
						echo '<img width="32" id="selectImg'.$id.'" src="'.$brush.'">';
					}
				?>
			</div>
		</div>
	</div>
</p>
</body>
</html>