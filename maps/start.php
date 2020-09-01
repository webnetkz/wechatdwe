<?php

	if( isset($_GET['track']) ) {
		$tack = trim($_GET['track']);
	}

	require_once '../app/db/cs.php';
	$sql = 'SELECT * FROM dispatch WHERE qr_name = "'.$tack.'"';
	$res = $pdo->query($sql);
	$res = $res->fetchAll(PDO::FETCH_ASSOC);
	
	if($res) {
		//var_dump($res);
	}

?>
<link rel="stylesheet" href="../css/font-awesome.min.css">
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    .maps {
        width: 100%;
        height: 70%;
    }
    .content {
        display: block;
        text-align: center;
        padding-top: 30px;
    }
    .label {
        color: rgb(255, 244, 244);
        font-size: 4em;
    }
    .inp_track {
        display: block;
        width: 80%;
        margin-left: 10%;
        margin-top: 5px;
        text-align: center;
        outline: none;
        border-radius: 3px;
        border: none;
        padding: 4px;
        font-size: 1.2em;
        transition-duration: 500ms;
    }
    .inp_track:focus {
        box-shadow: 0 0 10px rgb(44, 44, 77);
    }
    .btn_track {
        margin-top: 30px;
        text-align: center;
        outline: none;
        border-radius: 50px;
        border: none;
        padding: 18px;
		font-size: 2em;
        transition-duration: 500ms;
        box-shadow: 0 0 5px rgb(99, 99, 99);
        font-weight: 600;
        color: rgb(77, 77, 77);
    }
    .info {
        height: 30%;
        background: linear-gradient(89deg,#1697bf 3%,#68cef5 98%);
    }
</style>
<div id="map" class="maps"></div>
<div class="info">
    <div class="content">
			<?php
				
				foreach($res as $k => $v) {
					echo '<input type="submit" class="btn_track" value="'.$v['qr_name'].'"><br>';
					echo '<input type="submit" class="btn_track" value="'.$v['status'].'"><br>';
					echo '<input type="submit" class="btn_track" onclick="location.href = \'../statusParcels.php\'" value="Вернуться"><br>';
				}
		
			?>
            
        
    </div>
</div>
<?php

	if( $res[0]['status'] == 'Прибыла на склад/Ожидает оплаты' ) {
		require_once 'yiwuMap.php';
	} else {
		require_once 'startMap.php';
	}

?>