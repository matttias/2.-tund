<?php
//GET-i ja POST-i muutujad
//var_dump ($_GET);
//echo "<br>";
//var_dump ($_POST);

 //$_POST["sighupEmail"]
$sighupEmailError = "";
 //kas on üldse olemas selline muutuja
if(isset($_POST["sighupEmail"])){
	//jah on olemas
	//kas on tühi
	if(empty($_POST["sighupEmail"])){
		$sighupEmailError = "See väli on kohustuslik";	
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logi sisse või loo kasutaja</title>
</head>
<body>

	<h1>Logi sisse</h1>
	<form method="POST">
	
		<label>E-post</label>
		<br>
		<input name="loginWmail" type="text">
			<br>
			<br>
		<input name="loginPassword" placeholder="Parool" type="password"> <br><br>
		<input type="submit" value="Logi sisse">
	
	</form>

	<h1>Loo kasutaja</h1>
	<form method="POST">
	
		<label>E-post</label>
		<br>
		<input name="sighupEmail" type="text"> <?php echo $sighupEmailError; ?>
			<br>
			<br>
		<input name="sPassword" placeholder="Parool" type="password"> <br><br>
		<input type="submit" value="Loo kasutaja">
	
	</form>
	
</body>
</html>