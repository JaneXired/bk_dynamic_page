<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gesundheit am Arbeitsplatz</title>
	<meta name="description" content="Die Gesungheit am Arbeitsplatz ist ein wichtiges Thema, wir klären auf und machen eine Umfrage">
	<link rel="stylesheet" href="css/style.css">
	<script  language="javascript" type="text/javascript" src="js/my.js"></script>
</head>

<body>

Test, geschafft!

<?php
    $query = "SELECT * FROM 'umfrage'";
    $doit = mysql_query($query);   
    echo $doit;
?>

</body>