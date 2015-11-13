<?php

    $connect = mysql_connect("localhost", "root", "");
    if($connect == false) {
	    $connect = mysql_connect("localhost", "cjn_", "cjn_meo3") or die("Die Datenbank ist momentan nicht erreichbar");
	    //echo "connected to cjn";
	} //else {
	   // echo"connected to localhost";
    //}

	mysql_select_db("derix-hensel-brehmer", $connect);

?>