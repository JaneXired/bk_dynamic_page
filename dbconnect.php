<?php
$db = mysqli_connect("localhost", "cjn_", "cjn_meo3", "meo3") 
		or die("Die Datenbank ist momentan nicht erreichbar");
if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}
?>