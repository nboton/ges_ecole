<html>
<head></head>
<body style="background-color:#1abc9c">
<h3 style="padding-top:20%; padding-bottom:20%; text-align:center; color:#FFFFFF">Mon premier coup</h3>
<?php
//ex1
$k=4;
for($i=0;$i<=10;$i++)
{
	$sum=$i+$k;
	echo "4 + ".$i."= ".$sum." <br>";
	}
?>

<h3>ex2</h3>
<table border="1" cellspacing="4" cellpadding="10">
<?php
for($i=0; $i<=10;$i++){
echo "<tr>";
$sum=$i+$k;
echo "<td>".$i."</td> <td>+</td><td>4</td> <td>=</td><td>".$sum."</td></tr>";

}
?>
</table>

<h3>ex3</h3>
<form    method='POST' action='http://univcergy.phpnet.org/exemples/cocktail.php'>
NOM COCKTAIL :  <input type='text' name='cocktail' />
<button type='SUBMIT' name='valider'>Valider</button>
</form>
<br>
<h3>ex4</h3>
<form    method='POST' action='cocktail.php'>
NOM COCKTAIL :  <input type='text' name='nom' />
<button type='SUBMIT' name='valider'>Valider</button>
</form>
<br>
<h3>ex5</h3>
<?php
$array = array(
    "Vin Diesel" => "fast_furious%20.jpg
",
    "Jason stathman" => "transporteur.jpg"
);
?>
<form    method='POST' action='tableau_assoc.php'>
<?php 
//foreach ($array as $i => $value) {
  //  echo('<a href='.$array[$i].'>'.$i.'</a> <br>');
	
//}


?>

<select name="s">
<?php
foreach ($array as $i => $valuee) {
?><option  value="<?php echo($array[$i]);?>"><?php echo($array[$i]);?></option>
<?
}
?>

</select>
<button type='SUBMIT' name='valider'>Valider</button>


</form>


</body>
</html>

</body>
</html>