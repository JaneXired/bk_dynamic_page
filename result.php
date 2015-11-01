<?php

	include("dbconnect.php");

	$gruppe = $_POST["gruppe"];

	$antwort1 = 0;
	$antwort2 = 0;
	$antwort3 = 0;
	$antwort4 = 0;
	$antwort5 = 0;

	switch ($gruppe) {
		case "1":
			$antwort1 = 1;
			break;
		case "2":
			$antwort2 = 1;
			break;
		case "3":
			$antwort3 = 1;
			break;
		case "4":
			$antwort4 = 1;
			break;
		case "5":
			$antwort5 = 1;
			break;
	}

	$eintrag = "INSERT INTO umfrage (antwort_1, antwort_2, antwort_3, antwort_4, antwort_5) VALUES (" . $antwort1 . ", " . $antwort2 . ", " . $antwort3 . ", " . $antwort4 . ", " . $antwort5 . ");";
	$eintragen = mysql_query($eintrag);



	/* Abfragen der Anazahl der Antworten */

	$anzahl1 = "SELECT SUM(antwort_1) AS antwort_1 FROM umfrage;";
	$result_anzahl1 = mysql_query($anzahl1);
	$data_anzahl1 = mysql_fetch_array($result_anzahl1);

	$anzahl2 = "SELECT SUM(antwort_2) AS antwort_2 FROM umfrage;";
	$result_anzahl2 = mysql_query($anzahl2);
	$data_anzahl2 = mysql_fetch_array($result_anzahl2);

	$anzahl3 = "SELECT SUM(antwort_3) AS antwort_3 FROM umfrage;";
	$result_anzahl3 = mysql_query($anzahl3);
	$data_anzahl3 = mysql_fetch_array($result_anzahl3);

	$anzahl4 = "SELECT SUM(antwort_4) AS antwort_4 FROM umfrage;";
	$result_anzahl4 = mysql_query($anzahl4);
	$data_anzahl4 = mysql_fetch_array($result_anzahl4);

	$anzahl5 = "SELECT SUM(antwort_5) AS antwort_5 FROM umfrage;";
	$result_anzahl5 = mysql_query($anzahl5);
	$data_anzahl5 = mysql_fetch_array($result_anzahl5);

	/* Gesamtantworten */

	$total = $data_anzahl1["antwort_1"] + $data_anzahl2["antwort_2"] + $data_anzahl3["antwort_3"] + $data_anzahl4["antwort_4"] + $data_anzahl5["antwort_5"] ;

	/* Prozentumrechnung der einzelnen Antworten */

	$percent_antwort1 = ($data_anzahl1["antwort_1"] * 100) / $total;

	$percent_antwort2 = ($data_anzahl2["antwort_2"] * 100) / $total;

	$percent_antwort3 = ($data_anzahl3["antwort_3"] * 100) / $total;

	$percent_antwort4 = ($data_anzahl4["antwort_4"] * 100) / $total;

	$percent_antwort5 = ($data_anzahl5["antwort_5"] * 100) / $total;


	$zwischenwert_1 = 100 - $percent_antwort1;

	$zwischenwert_2 = 100 - $percent_antwort2;

	$zwischenwert_3 = 100 - $percent_antwort3;

	$zwischenwert_4 = 100 - $percent_antwort4;

	$zwischenwert_5 = 100 - $percent_antwort5;

	/* Umrechnung von Prozent in px, da sonst der Browser den inlinestyle nicht interpretieren kann*/

	$px_antwort1 = ((($zwischenwert_1 * 572.302) / 100) / 2) + 35;

	$px_antwort2 = ((($zwischenwert_2 * 572.302) / 100) / 2) + 35;

	$px_antwort3 = ((($zwischenwert_3 * 572.302) / 100) / 2) + 35;

	$px_antwort4 = ((($zwischenwert_4 * 572.302) / 100) / 2) + 35;

	$px_antwort5 = ((($zwischenwert_5 * 572.302) / 100) / 2) + 35;



	  /* echo "
			$data_anzahl1[antwort_1] +
		 ";

	echo "
			$data_anzahl2[antwort_2] +
		 ";

	echo "
			$data_anzahl3[antwort_3] +
		 ";

	echo "
			$data_anzahl4[antwort_4] +
		 ";
	echo "
			$data_anzahl5[antwort_5] =
		 ";


	echo " $total,<br/>";

	echo "Antwort 1 =  $percent_antwort1 %<br/>";

	echo "Antwort 2 =  $percent_antwort2 %<br/>";

	echo "Antwort 3 =  $percent_antwort3 %<br/>";

	echo "Antwort 4 =  $percent_antwort4 %<br/>";

	echo "Antwort 5 =  $percent_antwort5 %";*/

$results = array (
	'antwort-1' => array(
		'prozent' => $percent_antwort1,
		'pixel'   => $px_antwort1),

	'antwort-2' => array(
		'prozent' => $percent_antwort2,
		'pixel'   => $px_antwort2),

	'antwort-3' => array(
		'prozent' => $percent_antwort3,
		'pixel'   => $px_antwort3),

	'antwort-4' => array(
		'prozent' => $percent_antwort4,
		'pixel'   => $px_antwort4),

	'antwort-5' => array(
		'prozent' => $percent_antwort5,
		'pixel'   => $px_antwort5)

);

echo json_encode($results);


	?>



