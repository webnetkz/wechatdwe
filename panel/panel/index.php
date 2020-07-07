<?php

	require_once '../../app/pdo.php';

	$selectAllDispatchsSQL = 'SELECT * FROM dispatch_kaz';
	$selectAllDispatchsTmp = $pdo->query($selectAllDispatchsSQL);
	$selectAllDispatchsResult = $selectAllDispatchsTmp->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Панель</title>

<!-- Main css -->
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="public/css/list.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
	
</head>
<body>
	<header class="fixed">
	</header>
	<div class="content">
		<ol class="rectangle">
			<?php
				foreach($selectAllDispatchsResult as $k => $v) {
					echo '<li>
						<a href="app/searchDispatch.php?url='.$v['track'].'">'.$v['track'].'</a>
					</li>';
				}

			?>

		</ol>
	</div>
	<footer class="fixed">
		
	</footer>
</body>
</html>
