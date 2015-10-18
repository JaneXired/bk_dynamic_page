	<div class="roleTop"></div>
	<div class="roleLayer">
 		<!--<form class="form" name="umfrage" method="post" action="umfrage.php">
 			<label><h1>Frage Überschrift, voll toll und so</h1></label>
 			<fieldset>
 				<input type="radio" name="anwort" value="antwort_1" id="One"><label for="One">Frage 1</label>
				<input type="radio" name="anwort" value="antwort_2" id="Two"><label for="Two">Frage 2</label>

				<button class="button" type="submit" name="action" value="0" class="submitButton">Ergebnisse zeigen</button> 
			</fieldset>
		</form>-->
		
		
		<form class="form" action="results.php" name="umfrage" method="post">
 <h1>Die auszuwählenden Vorgaben sind:</h1>
 <fieldset>
 <p><input type="radio" name="gruppe" value="1"><label>Ich habe gesundheitliche Problem, die ich auf meine Arbeit zurückführe</label></p>
  
 
 <p> <input type="radio" name="gruppe" value="2"><label>Ich habe durch meine Arbeit zur Zeit keine gesundheitlichen Probleme</label></p>


  <p><input type="radio" name="gruppe" value="3"><label>Ich befürchte durch meine Arbeit (zukünftig) gesundheitliche Probleme</label></p>

 
 <p><input type="radio" name="gruppe" value="4"><label>Ich befürchte durch meine Arbeit (zukünftig) keine gesundheitlichen Probleme</label></p>
 
 
 <p><input type="radio" name="gruppe" value="5"><label>Ich habe zu dieser Fragestellung keine Meinung</label></p>
 
 <input class="button" type="submit" name="absenden" value="absenden">
 <!--<input type="hidden" name="status" value="gesendet" >-->
 
 
 </fieldset>
 </form>
 
 <?php 


$gruppe=$_POST["gruppe"];

if($gruppe=="1") {
	$antwort1=1;
	}
else if($gruppe=="2") {
	$antwort2=1;
	}
else if($gruppe=="3") {
	$antwort3=1;
	}
else if($gruppe=="4") {
	$antwort4=1;
	}	
else if($gruppe=="5") {
	$antwort5=1;
	}	

if ($absenden == "absenden")   {    
$eintrag = "INSERT INTO umfrage ('antwort_1', 'antwort_2', 'antwort_3', 'antwort_4', 'antwort_5') VALUES ('$antwort1', '$antwort2', '$antwort3', '$antwort4', '$antwort5')";
$eintragen = mysql_query($eintrag);   
}

?>
		
		
	</div>
	