<?php 
$dier = $_POST["dier"];
$persoon = $_POST["persoon"];
$land = $_POST["land"]; //check
$vervelen = $_POST["vervelen"];
$speelgoed = $_POST["speelgoed"];
$spijbel = $_POST["spijbel"];
$geld = $_POST["geld"];
$bezigheid = $_POST["bezigheid"];


 ?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<title>result</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="madlibs.css">
</head>
<body>
 <nav>
 	<ul>
  	 <li><a href="index.php">Terug</a></li>
  </ul>
 </nav>
 <main>
  <p>
   	 Er heerst paniek in het koninkrijk <?=$land?>. Koning Egmond is ten einde raad, dan roept hij zijn ten-einde-raadsheer <?=$persoon?>.
   	 "<?=$persoon?>! Het is een ramp! Het is een schande!"
   	 "Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"
   	 "mijn <?=$dier?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$speelgoed?> voor hem gekocht."
   	 "Majesteit, uw <?=$dier?> komt vast vanzelf weer teug?"
   	 "ja da's  leuk en aardig, maar hoe moet ik in de tussentijd <?=$bezigheid?> leren?"
   	 "Maar, Sire, daar kunt u toch uw <?=$geld?> voor gebruiken."
   	 "<?=$persoon?> je hebt helemaal gelijk! wat zou ik doen als ik jou niet had."
   	 "<?=$vervelen?>, Sire"
   </p>
   </main>
</body>
</html>