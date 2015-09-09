<?php
$db = mysqli_connect("localhost", "cjn_", "cjn_meo3", "meo3");
if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}
?>