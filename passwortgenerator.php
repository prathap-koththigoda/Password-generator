<?php

$laenge = $_POST["laenge"];
$anzahl = $_POST["anzahl"];
$laengeKopie = $laenge;


// Erstellt die Arrays

$zahlen =  range(1, 9);

$grossbuchstaben =  range('A', 'Z');

$kleinbuchstaben = range('a', 'z');

$sonderzeichen = array('+' , '*', 'ç', '%', '&'); //usw.



//Verknüpft die Arrays miteinander

$ausgabe = array_merge($zahlen, $grossbuchstaben, $kleinbuchstaben, $sonderzeichen);


//Würfelt die Arrays zufällig

shuffle ($ausgabe);


while ($anzahl > 0)
{
	While ($laenge > 0)
	{
		echo $ausgabe[$laenge];
		$laenge = $laenge -1;
	}
	
	// für einen Abstand zwischen den Passwörtern.
	echo "<p></p>";
	
	//Wenn $laenge = 0 werden keine Zahlen mehr ausgegeben.
	$laenge = $laengeKopie;
	
	/* Damit nicht immer die gleichen Zahlen kommen, wird
	das Array erneut gewürfelt. */
	shuffle ($ausgabe);
	
	//Beginnt wird am Start, für nächstes Passwort
	$anzahl= $anzahl -1;
}

?>