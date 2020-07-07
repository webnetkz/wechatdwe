<?php
	session_start();
	
	if (empty($_SESSION['pack'])) {
		$_SESSION['pack'] = 'Нет';
	}
	if ($_SESSION['photo'] != 'Да') {
		$_SESSION['photo'] = 'Нет';
	}
?>

<style>
	.successBlock {
		margin: 30px;
		margin-top: 50px;
		text-align: center;
		font-family: sans-serif;
	}
	p {
		font-size: 1.1em;
		padding: 10px;
		border-radius: 10px;
		background-color: rgb(240, 240, 240);
	}
	.successLink {
		position: relative;
		top: 110%;
		width: 70%;
		left: 25%;
		text-decoration: none;
		padding: 24px;
		border-radius: 40px;
		color: rgb(255, 255, 255);
		background: linear-gradient(89deg,#1697bf 3%,#68cef5 98%);
	}
</style>

<div class="successBlock">
	<h1>Ваша заявка принята</h1>
	<hr>
	<div>
		<h3>Данные заявки: </h3>
			<hr>
		<p>Ваш трек номер: <?= $_SESSION['track'];?></p>
		<p>ФИО отправителя: <?= $_SESSION['fromFIO'];?></p>
		<p>Номер отправителя: <?= $_SESSION['fromPhone'];?></p>
		<p>ФИО получателя: <?= $_SESSION['toFIO'];?></p>
		<p>Номер получателя: <?= $_SESSION['toPhone'];?></p>
		<p>Город доставки: <?= $_SESSION['toCity'];?></p>
		<p>Адрес доставки: <?= $_SESSION['toAdres'];?></p>
		<p>Вес: <?= $_SESSION['mass'];?></p>
		<p>Упаковка: <?= $_SESSION['pack'];?></p>
		<p>Фото отчет: <?= $_SESSION['photo'];?></p>
	</div>
	</div>
		<a href="order.php" class="successLink">Вернуться на главную</a>
</div>

<?php
	unset($_SESSION);
?>