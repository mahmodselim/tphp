<?php 
if(isset($_POST['roll']))
{
	$rand = rand(1, 6);
	echo 'You rolled a '.$rand;
}
?>

<form action="60%20Random%20Number%20Generation.php" method="POST">
	<input type="submit" name="roll" value="Roll Dice">
</form>