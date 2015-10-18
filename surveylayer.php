	<div class="roleTop"></div>
	<div class="roleLayer">
		
		
<form class="form" action="results.php" name="umfrage" method="post">
	 <h1>Die auszuwählenden Vorgaben sind:</h1>
		 <fieldset>
		 <p><input type="radio" name="gruppe" value="1"><label>Ich habe gesundheitliche Problem, die ich auf meine Arbeit zurückführe</label></p>


		 <p> <input type="radio" name="gruppe" value="2"><label>Ich habe durch meine Arbeit zur Zeit keine gesundheitlichen Probleme</label></p>


		  <p><input type="radio" name="gruppe" value="3"><label>Ich befürchte durch meine Arbeit (zukünftig) gesundheitliche Probleme</label></p>


		 <p><input type="radio" name="gruppe" value="4"><label>Ich befürchte durch meine Arbeit (zukünftig) keine gesundheitlichen Probleme</label></p>


		 <p><input type="radio" name="gruppe" value="5"><label>Ich habe zu dieser Fragestellung keine Meinung</label></p>

		 <input class="button" type="submit" name="absenden" value="absenden">


	 </fieldset>
</form>
		<?php
		//phpinfo();
		echo $absenden;
		?>

		
		
	</div>
	