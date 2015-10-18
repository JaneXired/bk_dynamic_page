<?php

    $connect = mysql_connect("localhost", "root", "");
    if($connect == false) {
	    $connect = mysql_connect("localhost", "cjn_", "cjn_meo3") or die("Die Datenbank ist momentan nicht erreichbar");
	}

	//echo "select_db = " . mysql_select_db('meo3', $connect) . "<br/>";

	//$query = 'SELECT * FROM umfrage';
	//$resource = mysql_query($query);
	//$result = mysql_fetch_assoc($resource); 
	//if(is_array($result)) {
	  //   foreach($result as $key => $value){
	     //   echo "row: " . $key . " = " .  $value . '<br/>';
	     //}  
	//}
	//else {
	  //  echo 'NOPE';
	//}

?>