<?php
include("dbconnect.php");
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gesundheit am Arbeitsplatz</title>
	<meta name="description" content="Die Gesungheit am Arbeitsplatz ist ein wichtiges Thema, wir klären auf und machen eine Umfrage">
	<link rel="stylesheet" href="css/style.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script  language="javascript" type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script  language="javascript" type="text/javascript" src="js/my.js"></script>
</head>

<body>

<div class="layer"> 
	<div class="roleTop"></div>
	<div class="roleLayer">
 		<div class="form">
 			<label><h1>Frage Überschrift, voll toll und so</h1></label>
 			<fieldset>
 				<input type="radio" name="Anwort" value="1" id="One"><label for="One">Frage 1</label>
				<input type="radio" name="Anwort" value="2" id="Two"><label for="Two">Frage 2</label>

				<button class="button" type="submit" name="action" value="0" class="submitButton">Ergebnisse zeigen</button> 
			</fieldset>
		</div>
	</div>
	
</div>

<div class="content">
	<?php include'navi.php' ?>
</div>




	<div class="bg">
		

	</div>
</body>