
<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="madlibs.css">
</head>
<body>
	<header>
	<img src="echtelogo.png" alt="logo">
	</header>
	<nav>
		<ul>
			<li><a href="index.php"><b>Er heerst paniek</b></a></li>
			<li><a href="onkunde.php"><b>Onkunde</b></a></li>
		</ul>
	 
	</nav>
 <form action="result.php" method="POST">
 		<h1><b>Er heerst paniek!</b></h1>
 		
 <p> Welk dier zou je nooit als huisdier willen hebben?</p>
  <p>Wie is de belangrijkste persoon in je leven? </p>       
  <p> In welk land zou je willen wonen? </p>                 
  <p>Wat doe je als je je verveelt?   </p>                  
  <p>Met welk speelgoed speelde je al kind het meest?</p>   
  <p>Bij welke docent spijbel jet het liefst? </p>         
  <p> Als je 100.000,- euro had wat zou je dan kopen? </p>    
  <p>Wat is je favoriete bezigheid?  </p>                   

 <div id="invoer">
  <input type="text" name="dier">       
  <input type="text" name="persoon">
  <input type="text" name="land">
  <input type="text" name="vervelen">
  <input type="text" name="speelgoed">
  <input type="text" name="spijbel">
  <input type="text" name="geld">
  <input type="text" name="bezigheid">
  <input id="button" type="submit" name="nvt" value="Verstuur">
 </div>
</form>
</body>
</html>