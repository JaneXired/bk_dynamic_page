<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gesundheit am Arbeitsplatz</title>
    <meta name="description"
          content="Die Gesungheit am Arbeitsplatz ist ein wichtiges Thema, wir klären auf und machen eine Umfrage">
    <link rel="stylesheet" href="css/style.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/my.js"></script>
</head>

<body>

    <div class="content">
        <?php include 'navi.php' ?>

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
       $eintragen = mysql_query($eintrag);



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

        $total = $data_anzahl1["antwort_1"] + $data_anzahl2["antwort_2"] + $data_anzahl3["antwort_3"] + $data_anzahl4["antwort_4"] + $data_anzahl5["antwort_5"] ;

       $percent_antwort1 = ($data_anzahl1["antwort_1"] * 100) / $total;



            echo "
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
                $data_anzahl5[antwort_5] +
             ";


            echo "
                $total,

             ";

        echo "
                $percent_antwort1 %

             ";




        ?>
    </div>

</body>

