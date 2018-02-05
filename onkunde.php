<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="madlibs.css">
</head>
<header>
	<img src="logo.png" alt="logo">
</header>
<body>
	<nav>
		<ul>
			<li><a href="index.php">Er heerst paniek</a></li>
			<li><a href="onkunde.php">Onkunde</a></li>
		</ul>
	 
	</nav>
 <form action="result2.php" method="POST">
 <h1><b>Onkunde</b></h1>
<p>Wat zou je graag willen kunnen?</p>
<p> Met welke persoon kun je goed opschieten?
<p>Wat is je favoriete getal?</p>
<p>Wat heb je altijd bij je als je op vakantie gaat?</p>
<p>Wat is je beste persoonlijke eigenschap?</p>
<p>Wat is je slechste persoonlijke eigenschap?</p>
<p>Wat is het ergste wat je kan overkomen?</p>
  <div id="invoer">
 <input type="text" name="kunnen">
<input type="text" name="opschieten">
<input type="text" name="getal">
<input type="text" name="vakantie">
<input type="text" name="eigenschap">
<input type="text" name="slechste">
<input type="text" name="overkomen">
<input  id="button" type="submit" name="nvt" value="Verstuur">
</div>
 </form>
</body>
</html>