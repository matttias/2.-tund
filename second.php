<?php

$age = 21; //komaga kirjutamisel peab kasutama punkti (.)

if($age < 18) {
	echo "alaealine";
} else {
	echo "täiskasvanu";
}

?>

<br>

<?php

//eesmärk on vanusele vastavalt trükime välja sõna "palju"
for ($i = 1; $i <= $age; $i++){
	echo $i."Palju ";
}
echo "õnne!";
?>

<br>

<?php

echo date("d.m.y.H:i");

?>