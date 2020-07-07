<?php
	if(!empty( $_POST['send'] )) {
		if($_POST['login'] == 'dealopt' && $_POST['pass'] == 123) {
			header('Location: panel/index.php');
		} else {
			echo 'Не верные данные';
		}
	}
?>

<form method="POST">
	<input type="text" placeholder="Name" name="login"><br>
	<input type="password" placeholder="Password" name="pass"><br>
	<input type="submit" name="send">
</form>