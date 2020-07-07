<?php

	$country = $_GET['val'];

	if($country == 'ru') {
		$country = 'Россию';
	} else {
		$country = 'Казахстан';
	}
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

<title>Оформления заказа <?=$country?> DWE</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

	<style>
		.header {
	background: url("images/header.png") no-repeat 50% 50%;
	height: 15em;
	box-shadow: 0 0 10px black;
	margin-bottom: 10px;
}
.h1 {
	text-align: center;
	color: rgb(2, 172, 253);
}
.blockW {
	margin-left: 2%;
	width: 96%;
	border-radius: 20px;
	background-color: rgb(255, 255, 255);
	padding-top: 15px;
	box-shadow: 0 0 10px rgb(99, 99, 99);
}
.pp {
	font-size: 1.1em;
	text-align: center;
	padding: 10px;
}
hr {
	border-color: rgb(2, 172, 253);
}
.country {
	text-align: left;
}
.country > img {
	height: 90px;
}
body {
		background: rgb(2, 172, 253);
    font-family: 'Work Sans', sans-serif;
    font-style: normal;
		font-weight: 300;
    overflow-x: hidden;
}
		
		
		
		
		table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 14px;
border-collapse: collapse;
text-align: center;
			width: 100%;
			margin-bottom: 20px;
}
th, td:first-child {
background: rgb(2, 172, 253);
color: white;
padding: 10px 20px;
}
th, td {
border-style: solid;
border-width: 0 1px 1px 0;
border-color: white;
}
td {
background: #D8E6F3;
}
th:first-child, td:first-child {
text-align: left;
}
		
		
		
		
		
		
.zebra {
  list-style: none;
  border-left: 10px solid rgb(2, 172, 253);
  padding: 6px;
  font-family: "Lucida Sans";
}
.zebra li {padding: 10px;}
.zebra li:nth-child(odd) {background: #E1F1FF;}
.zebra li:nth-child(even) {background: white;}

nav.navigation {
      display: flex;
      justify-content: space-around;
			position: fixed;
			z-index: 999999;
			width: 100vw;
			height: 2.6em;
			box-shadow: 0 0 10px rgb(99, 99, 99);
			background: linear-gradient(89deg,#1697bf 3%,#68cef5 98%);
		}
		.navigationItem {
      display: inline-block;
    }
    .navigationIcon {
      margin-top: 0.1em;
	  font-size: 2.2em;
	  color: rgb(255, 255, 255);
    }
	</style>
	
</head>
<body>
		<nav class="navigation">
			<div class="navigationItem">
        <i class="fa fa-arrow-circle-left navigationIcon" onclick="window.history.back()"></i>
			</div>
			<div class="navigationItem">
        <i class="fa fa-arrow-circle-right navigationIcon" onclick="window.history.forward()"></i>
			</div>
		</nav>
<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>
	
	<div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12 header">
					<img src="images/miniLogo.png" style="width: 50%; position: relative; top: 30px; left: 25%;">
			  </div>
		</div>
	</div>
	
		<div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12 blockW">
				   				   <h1 class="h2">Доставка в <?=$country?> (в Пункты выдачи заказов (ПВЗ) либо поcтаматы в Вашем городе)</h1>
									  <i style="font-size: 0.8em;">Через постаматы, установленные в ближайшем от вас супермаркете или торговом центре, вы можете самостоятельно в любое удобное время получить свой заказ - без очередей и ожидания курьера.</i>
									  <h1 class="h2">Важная информация!</h1>
				   	<p class="ppp">1. Мы не сможем принять на склад в Китае посылки «kuàidì» с оплатой при получении!</p>
				   <p class="ppp">2. Данный расчет является ориентировочным по тарифу Единый. Точная стоимость доставки будет зависеть от веса посылки и полного перечня заказанных услуг.</p>
				   <p class="ppp">3. Вносить трек номера нужно без пробелов, без названий службы доставки и любых лишних символов, иначе при сканировании штрих-кода при приемке товара на складе в Китае, система не сумеет распознать Вашу посылку.</p>
				   <h1 class="h2">УСЛОВИЯ ДОСТАВКИ：</h1>
				   <p class="ppp">Тариф "Единый" <br>срок доставки 12-18 рабочих дней <br>с момента поступления посылки на наш склад</p>
				   <p class="ppp"><table>
<tr>
  <th>Вес kg（≤）</th>
  <th>Цена ￥</th>
  </tr>
 <tr>
  <td>0,5</td>
	<td>42</td>
  
 </tr>
<tr>
	<td>1</td>
	<td>59.50</td>

</tr>
<tr>
	  <td>1,5</td>
	<td>77</td>
</tr>
<tr>
  <td>2</td>
  <td>94.50</td>
</tr>
<tr>
  <td>2,5</td>
  <td>112</td>
</tr>
				   <tr>
  <td>3</td>
  <td>129.50</td>
</tr>
				   				   <tr>
  <td>3,5</td>
  <td>147</td>
</tr>
				   				   <tr>
  <td>4</td>
  <td>164.50</td>
</tr>
				   				   <tr>
  <td>4,5</td>
  <td>182</td>
</tr>
				   				   <tr>
  <td>5</td>
  <td>199.50</td>
</tr>
				   <tr>
  <td>5,5</td>
  <td>239,05</td>
</tr>
				   <tr>
  <td>6</td>
  <td>259</td>
</tr>
				   <tr>
  <td>6,5</td>
  <td>278.95</td>
</tr>
				   <tr>
  <td>7</td>
  <td>298.90</td>
</tr>
				   <tr>
  <td>7,5</td>
  <td>318.75</td>
				   </tr>
				   <tr>
  <td>8</td>
  <td>298.90</td>
				   </tr>
				   				   <tr>
  <td>8,5</td>
  <td>358,75</td>
				   </tr>
				   				   				   <tr>
  <td>9</td>
  <td>378,70</td>
				   </tr>
				   				   				   <tr>
  <td>9,5</td>
  <td>398,65</td>
				   </tr>
				   <tr>
  <td>10</td>
  <td>418,60</td>
				   </tr>
				   				   <tr>
  <td>Если посылка превышает 10 кг, то каждый следующий килограмм будет стоить 40￥/кг.</td>
									   <td>40￥/кг </td>
</tr>
				   				   				   <tr>
  <td>Пример - вес посылки 10.2 кг - 418.60￥+40￥ = 512.60￥</td><td></td>
</tr>
</table>
</p>

			  <!--<p> Посылка весом до 3-х кг не должена превышать размер 80 см (длина+ширина+высота).</p>
				  -->  
				  <br>
			  
			  </div>
		</div>
			<br>
	</div>
			<div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12 blockW">
				   <h3>Мы не перевозим следующие товары:</h3>
<ul class="zebra">
	
  <li>Телефоны, ноутбуки；</li>
  <li>Неидентифицированные элементы питания без маркировки</li>
  <li>Жидкости огнеопасные, взрывоопасные, горючие, ароматизаторы эл. сигарет, радиоактивные вещества</li>
  <li>Любые типы зажигалок с бензином или без бензина, газовые зажигалки и прочие товары с газом, электрические зажигалки</li>
  <li>Любые типы электронных сигарет и их комплектующие.</li>
	<li>Лекарства и фармакологические препараты</li>
	<li>Витамины, лекарства, лакомства, сухие и влажные корма для животных</li>
	<li>Прочие порошки и сыпучие вещества</li>
	<li>Огнестрельное оружие и боеприпасы к нему, холодное оружие и другие предметы, специально предназначенные для нападения и обороны (кастеты, стилеты, баллончики с жидкостью паралитического действия и т.п.)</li>
	<li>Комплектующие и аксессуары для оружия (прицелы, приклады, магазины и т.д.)</li>
	<li>Наркотические и психотропные вещества, их аналоги и прекурсоры, подлежащие специальному контролю в соответствии с законодательством</li>
	<li>Взрывчатые, легковоспламеняющиеся и другие опасные вещества, военное снаряжение</li>
	<li>Человеческие останки и органы, живые животные</li>
	<li>Антиквариат и предметы, представляющие национальное, историческое или культурное достояние народа, что определяется в соответствии с законами того или иного государства</li>
	<li>Товары, экспорт/импорт которых совершается с нарушением прав интеллектуальной собственности</li>
	<li>Семена и посадочный материал, пищевые продукты животного происхождения без термической обработки</li>
	<li>Продукты питания, которые быстро портятся (свежие фрукты, продукты животного происхождения)</li>
	<li>Продукты питания не в оригинальной упаковке</li>
	<li>Продукты питания больше 10 кг в оригинальной упаковке</li>
	<li>Ювелирные изделия, ценные банковские бумаги и металлы</li>
	<li>Деньги и денежные документы в любой форме: платежные поручения, чеки, ваучеры, ценные бумаги, облигации, купоны, акции, кредитные карты</li>
	<li>Алкогольные напитки, табачные изделия</li>
	<li>Предметы непристойного и аморального содержания, секс-игрушки и порнография</li>
	<li>Разрешения на право ношения оружия, трудовые книжки, военные билеты, паспорта и другие документы, удостоверяющие личность</li>
	<li>Предметы, которые по своему характеру или упаковке могут представлять опасность для сотрудников склада и перевозчика или населения, пачкать или портить другие отправления, оборудование или собственность третьей стороны</li>

</ul>
				  </div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<!--<div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12 blockW">
				   <h3>Также мы оставляем за собой право отказать в доставке:</h3>
<ul class="zebra">
	
  <li>Любых грузов, которые не содержат подробную контактную информацию об отправителе или получателе;</li>
  <li>Предметов, которые не соответствуют описи вложения, а также предметов, не упакованных должным образом;</li>
  <li>Предметов с характеристиками, способными поставить под угрозу перевозимые совместно посылки, а также безопасность персонала и транспортных средств, с помощью которых осуществляется перевозка груза;</li>
  <li>Предметов, доставка которых невозможна по техническим причинам.</li>
  
</ul>
				  </div>
		</div>
	</div>-->
<div style="position: fixed; left: 0; top: 90vh; width: 100vw; height: 10vh; background-color: rgba(255, 255, 255, 0.8);">
		<a href="newOrder.php?val=<?=$_GET['val']?>">
			<button type="button" class="btn btn-primary" style="width: 80%; margin-bottom: 5px; margin-left: 10%; margin-top: 15px;">Оформить</button>
		</a>
	</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>