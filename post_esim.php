<?php
if(isset($_POST['btn'])) {
$enimi=$_POST['en'];
$snimi=$_POST['sn'];
echo 'Terve '.$enimi.' '.$snimi;
}
?>

<h1>Henkilotiedot</h1>
<FORM action="post_esim.php" method="POST">
<label>Etunimi</label><input type="text" name="en">
<br>
<label>Sukunimi</label><input type"text" name="sn">
<br>
<input type="submit" name="btn" value="Lähetä">
</FORM>