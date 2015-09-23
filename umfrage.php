<?
$id=$_POST["id"];
$antwort_1=$_POST["antwort_1"];
$antwort_2=$_POST["antwort_2"];
$antwort_3=$_POST["antwort_3"];
$antwort_4=$_POST["antwort_4"];
$antwort_5=$_POST["antwort_5"];
$id_edit=$_GET["id_edit"];

$antwort_speichern = "INSERT INTO umfrage (antwort_1, antwort_2) VALUES ('$antwort_1', '$antwort_2')";
$eintragen = mysql_query($antwort_speichern);

?>

