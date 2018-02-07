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
<header>
  <img src="echtelogo.png" alt="logo">
</header>
<body>
 <nav>
 	<ul>
  	 <li><a href="index.php"><b>Terug</b></a></li>
  </ul>
 </nav>
 <main>
  <h1><b>Er heerst paniek!</b></h1>
  <p>
   	 Er heerst paniek in het koninkrijk <?=$land?>. Koning Egmond is ten einde raad, dan roept hij zijn ten-einde-raadsheer <?=$persoon?>.</p>
   	<p> "<?=$persoon?>! Het is een ramp! Het is een schande!"</p>
   	 <p>"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"</p>
   	 <p>"mijn <?=$dier?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$speelgoed?> voor hem gekocht."</p>
   	<p> "Majesteit, uw <?=$dier?> komt vast vanzelf weer teug?"</p>
   	 <p>"ja da's  leuk en aardig, maar hoe moet ik in de tussentijd <?=$bezigheid?> leren?"</p>
   	 <p>"Maar, Sire, daar kunt u toch uw <?=$geld?> voor gebruiken."</p>
   	 <p>"<?=$persoon?> je hebt helemaal gelijk! wat zou ik doen als ik jou niet had."</p>
   	 <p>"<?=$vervelen?>, Sire"</p>
   </main>
</body>
</html>