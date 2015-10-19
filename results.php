<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gesundheit am Arbeitsplatz</title>
    <meta name="description"
          content="Die Gesungheit am Arbeitsplatz ist ein wichtiges Thema, wir klären auf und machen eine Umfrage">
    <link rel="stylesheet" href="css/style.css">
    <script language="javascript" type="text/javascript" src="js/my.js"></script>
</head>

<body>

Test, geschafft!

<?php
include("dbconnect.php");

$gruppe = $_POST["gruppe"];

$antwort1 = 0;
$antwort2 = 0;
$antwort3 = 0;
$antwort4 = 0;
$antwort5 = 0;


if ($gruppe == "1") {
    $antwort1 = 1;
} else {
    if ($gruppe == "2") {
        $antwort2 = 1;
    } else {
        if ($gruppe == "3") {
            $antwort3 = 1;
        } else {
            if ($gruppe == "4") {
                $antwort4 = 1;
            } else {
                if ($gruppe == "5") {
                    $antwort5 = 1;
                }
            }
        }
    }
}

$eintrag = "INSERT INTO umfrage (antwort_1, antwort_2, antwort_3, antwort_4, antwort_5) VALUES (" . $antwort1 . ", " . $antwort2 . ", " . $antwort3 . ", " . $antwort4 . ", " . $antwort5 . ");";
echo $eintrag;
$eintragen = mysql_query($eintrag);
echo "<p>" . $eintrag . "</p>";


?>

</body>