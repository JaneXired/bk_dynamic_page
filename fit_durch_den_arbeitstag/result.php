<?php
	error_reporting(E_ALL ^ E_DEPRECATED); /* code for newest PHP version */

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

	/* query for the number of each answer */

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

	/* total answers */

	$total = $data_anzahl1["antwort_1"] + $data_anzahl2["antwort_2"] + $data_anzahl3["antwort_3"] + $data_anzahl4["antwort_4"] + $data_anzahl5["antwort_5"] ;

	/* percent calculation of the answers */

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

	/* calculation from % in px, because browser didn't interpret the % */

	$px_antwort1 = ((($zwischenwert_1 * 572.302) / 100) / 2) + 35;

	$px_antwort2 = ((($zwischenwert_2 * 572.302) / 100) / 2) + 35;

	$px_antwort3 = ((($zwischenwert_3 * 572.302) / 100) / 2) + 35;

	$px_antwort4 = ((($zwischenwert_4 * 572.302) / 100) / 2) + 35;

	$px_antwort5 = ((($zwischenwert_5 * 572.302) / 100) / 2) + 35;

	/* array for ajax function */

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



