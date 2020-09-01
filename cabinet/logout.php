<?php

	setcookie('secret', " ", time() -1, "/");
	header('Location: ../sign.php');
	