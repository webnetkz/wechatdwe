<?php
	
	require_once '../../../app/pdo.php';

	if(!empty($_GET['url'])) {
		$url = $_GET['url'];
		
		$getDispatchSQL = 'SELECT * FROM dispatch_kaz WHERE track = "'.$url.'"';
		$getDispatchTmp = $pdo->query($getDispatchSQL);
		$getDispatchRusult = $getDispatchTmp->fetchAll(PDO::FETCH_ASSOC);
	}

	echo '<pre>';
	var_dump($getDispatchRusult);

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
<link rel="stylesheet" href="../public/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
	
</head>
<body>
	<header class="fixed">
	</header>
	<div class="content">
			<?php
				foreach($getDispatchRusult as $k => $v) {
					echo $v['track'];
				}

			?>
	</div>
	<footer class="fixed">
		
	</footer>
</body>
</html>
