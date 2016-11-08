<?php
session_start();


if(isset($_POST['btn']))
{
	$o_user="admin";
	$o_pass="test";
	if($_POST['user'] == $o_user) {
		if($_POST['pass'] == $o_pass){
			header('Location: secret.php');
			$_SESSION['tunnus']=$_POST['user'];
			$_SESSION['login']=TRUE;
		}
		else{
			echo 'Tunnus ja salasana eivät täsmää';
		}
	}
	else{
		echo 'Tunnus ja salasana eivät täsmää';
	}
}
?>
<?php include "valikko.php"; ?>
<h1>Pääsivu</h1>
<p>
	<FORM action="login.php" method="POST">
		<TABLE BORDER=0>"
		<tr><td>Etunimi</td><td><input type="text" name="user"></td></tr>
		<tr><td>Sukunimi</td><td><input type="password" name="pass"></td></tr>
		<tr><td></td><td><input type="submit" name="btn" value="Kirjaudu"></td></tr>
		</TABLE>
		</FORM>
</p>

<?php include "footer.php"; ?>
