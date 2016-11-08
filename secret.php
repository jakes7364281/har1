<?php
session_start();
?>
<?php include "valikko.php"; ?>
<h1>Salainen</h1>
<p>
<?php echo 'Tervetuloa <b>' .$_SESSION['tunnus'].'</b>';?>
<p>
	Tässä harjoituksessa opetellaan php:n perusteita.
</p>

<?php include "footer.php"; ?>
