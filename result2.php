<?php 
$kunnen = $_POST["kunnen"];
$opschieten = $_POST["opschieten"];
$getal = $_POST["getal"];
$vakantie = $_POST["vakantie"];
$eigenschap = $_POST["eigenschap"];
$slechste = $_POST["slechste"];
$overkomen = $_POST["overkomen"];
 ?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<title>result</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="madlibs.css">
</head>
<header>
	<img src="logo.png" alt="logo">
</header>
<body>
 <nav>
  <ul>
  	 <li><a href="index.php">Terug</a></li>
  </ul>
 </nav>
 <main>
 	<h1><b>Onkunde</b></h1>
<p>Er zijn veel mensen die niet kunnen <?=$kunnen?>. Neem nou maar <?=$opschieten?>. Zelfs met de hulp van een <?=$vakantie?> of zelfs <?=$getal?> kan <?=$opschieten?> niet <?=$kunnen?>. Dat heeft niet te maken met gebrek aan <?=$eigenschap?>, maar met een te veel aan <?=$slechste?>. te veel <?=$slechste?> leidt tot <?= $overkomen ?> en dat is niet goed als je wilt <?=$kunnen?>. Helaas voor <?=$opschieten?>.
</main>
</p>
</body>
</html>