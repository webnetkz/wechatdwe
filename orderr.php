<!DOCTYPE html>
<html lang="en">
<head>
<script src="autocomplete/jquery.js"></script>
<script type="text/javascript" src="autocomplete/jquery.autocomplete.js"></script>
<link rel="stylesheet" href="autocomplete/style.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Оформления заказа Россия DWE</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
	
</head>
<body>
<div class="content-form">
<script>
<!--

$(document).ready(function(){
// --- Автозаполнение ---
$("#city_from").autocompleteArray([
'Братиславская,ул., д.22',
'1-й Курьяновский проезд',
'Абакан',
'Азамар',
'Актау',
'Актобе',
'Алдан',
'Алма Ата',
'Алматы',
'Альметьевск',
'Анадырь',
'Анапа',
'Ангарск',
'Андреаполь',
'Апатиты',
'Апрелевка (М.О.)',
'Армавир',
'Арсеньев(Приморский Край)',
'Артем',
'Архангельск',
'Астрахань',
'Ачинск',
'Балаково',
'Барабинск',
'Барнаул',
'Батайск',
'Белая Калитва',
'Белгород',
'Белово',
'Белогорск',
'Белоярский',
'Березники',
'Березово',
'Бийск',
'Бикин',
'Биробиджан',
'Благовещенск',
'Бологое',
'Большой камень',
'Борзя',
'Борисоглебск',
'Братск',
'Брянск',
'Бугульма',
'Буденновск',
'Бурея',
'ВВЦ',
'Ванино',
'Великий Новгород',
'Вельск',
'Верейская ул.,д.29',
'Верещагино',
'Верхний Уфалей',
'Владивосток',
'Владикавказ',
'Владимир',
'Волгоград',
'Волжский',
'Вологда',
'Воркута',
'Воронеж',
'Вохма( Костромская обл.)',
'Выборг',
'Вышний Волочек',
'Вяземская',
'Газ Сале',
'Германия',
'Глазов',
'Гороблагодатская',
'Горький',
'Грозный',
'Губкинский',
'Дальнеречинск',
'Дзержинск',
'Дружинино',
'Ейск',
'Екатеринбург',
'Ерофей Павлович',
'Ефремов',
'Жиздра',
'Жуковский МО',
'Забайкальск',
'Звенегородское шоссе,д.18',
'Звенигород',
'Зеленодольск',
'Зима',
'Иваново',
'Ижевск',
'Иланская',
'Инта',
'Иркутск',
'Ишим',
'Йошкар Ола',
'Казань',
'Калининград',
'Калуга',
'Каменск Уральский',
'Кандалакша',
'Канск Енисейский ',
'Карымская',
'Каширское ш 67 стр 5',
'Кемерово',
'Кемь',
'Кириши',
'Киров',
'Китай',
'Ковров',
'Ковылкино',
'Когалым',
'Коломна',
'Комсамольск на Амуре',
'Коноша',
'Корея(г.Сеул)',
'Кострома',
'Котлас',
'Краснодар',
'Красноуфимск',
'Красноярск',
'Крым',
'Крымск',
'Кузнецк',
'Курган',
'Курск',
'Кызыл',
'Лабытнанги',
'Лангепас',
'Лена',
'Лесозаводск',
'Липецк',
'Люберцы',
'Магадан',
'Магдагачи',
'Магнитогорск',
'Майкоп',
'Мариинск',
'Махачкала',
'Медвежьегорск',
'Миасс',
'Микунь',
'Минеральные Воды',
'Минск',
'Мирный',
'Могоча',
'Мончегорск',
'Москва',
'Мурманск',
'Набережные Челны',
'Надым',
'Назрань',
'Нальчик',
'Нарьян-Мар',
'Наушки',
'Находка',
'Невинномыск',
'Невинномысск',
'Некрасовка ',
'Нерюнгри',
'Нефтекамск',
'Нефтеюганск',
'Нижневартовск',
'Нижнекамск',
'Нижнеудинск',
'Нижний Новгород',
'Нижний Тагил ',
'Новая Чара',
'Новгород на Волхове',
'Новокузнецк',
'Новокуйбышевск',
'Новороссийск',
'Новосибирск',
'Новочебоксарск',
'Новый Уренгой',
'Ногинск',
'Норильск',
'Ноябрьск',
'Нурлат',
'Нягань',
'Няндома',
'Облучье',
'Обнинск',
'Обозерский',
'Оленегорск',
'Оловянная',
'Омск',
'Орел',
'Оренбург',
'Орск',
'Падун Пороги ',
'Пангоды',
'Партизанск',
'Певек',
'Пенза',
'Пермь',
'Петрозаводск',
'Петропаловск Камчатский',
'Печора',
'Пикалево(Ленингр.обл.)',
'Плесецк Архангельская обл',
'Плесецкая',
'Поворино(Воронежской обл.',
'Подольск',
'Поллеск',
'Пос.Силятино',
'Приобье',
'Прокопьевск',
'Псков',
'Пуровск',
'Пушкино',
'Пятигорск',
'Реутов',
'Россошь',
'Ростов на Дону',
'Ружино',
'Рыбинск',
'Рязанский проспект,д.2',
'Рязань',
'Салават',
'Салехард',
'Самара',
'Санкт Петербург',
'Саранск',
'Саратов',
'Саров',
'Саяногорск',
'Свободный',
'Северобайкальск',
'Северодвинск',
'Серов',
'Серпухов',
'Сибирцево',
'Сковородино',
'Словакия',
'Слюдянка',
'Смоленск',
'Советский',
'Соликамск',
'Солнечногорск',
'Солнечногорский район д.П',
'Сосногорск',
'Сочи',
'Спас-Клепики',
'Спасск Дальний ',
'Спасское',
'Ставрополь',
'Старый Оскол',
'Стерлитамак',
'Стрежевой',
'Ступино',
'Сургут',
'Сызрань',
'Сыктывкар',
'Таганрог',
'Тайга',
'Тайшет',
'Таксимо',
'Тамбов',
'Тарко Сале',
'Татарск',
'Тверь',
'Тихоокеанская',
'Тобольск',
'Тольятти',
'Томилино',
'Томмот',
'Томск',
'Трехгорный',
'Туапсе',
'Тула',
'Тулун',
'Тыгда',
'Тында',
'Тюмень',
'Улан Удэ',
'Ульяновск           ',
'Урай',
'Усинск',
'Уссурийск',
'Усть Каменогорск',
'Усть Кут',
'Уфа',
'Ухта',
'Хабаровск',
'Ханты Мансийск',
'Харп',
'Хвалынск',
'Хилок',
'Чебоксары',
'Челябинск',
'Череповец',
'Чернышевск',
'Черняховск',
'Чита',
'Чудово',
'Чульман(Саха Якутия)',
'Чусовская',
'Чучково пос.',
'Шарья',
'Шахты',
'Шилка',
'Шимановская',
'Элиста',
'Энгельс',
'Юбилейный',
'Южно Сахалинск',
'Якутск',
'Ямбург',
'Яр Сале',
'Ярославль',
'Ярославское шоссе ',
'пос. Икша МО',
'ул 2я Тверская-Ямская'],
		{
			delay:10,
			minChars:1,
			matchSubset:1,
			autoFill:true,
			maxItemsToShow:10
		}
);
// --- Автозаполнение ---


});

function show_item(id, status)
{
	if (status==0)	$('#'+id).animate({ height: "hide"}, "hide");
	else $('#'+id).animate({ height: "show" }, "slow");
}

</script>
<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<style>
.form-group{
 margin-bottom: 15px;
}
label{
 margin-bottom: 15px;
}
input,
input::-webkit-input-placeholder {
 font-size: 11px;
 padding-top: 3px;
}
.form-control {
 height: auto!important;
padding: 8px 12px !important;
}
.input-group {
 box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
 border: 1px solid #ccc;
 margin-top: 28px;
 padding: 6px 12px;
 color: #666;
 text-shadow: 0 1px #fff;
 cursor: pointer;
 border-radius: 3px 3px;
 box-shadow: 0 1px #fff inset, 0 1px #ddd;
 background: #f5f5f5;
 background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
 background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
 background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
 background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
 background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
 background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
 filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-form{
 margin-top: 30px;
 margin: 0 auto;
 max-width: 400px;
 padding: 10px 40px;
background:#009edf;
color: #FFF;
text-shadow: none;
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
}
span.input-group-addon i {
 color: #009edf;
 font-size: 17px;
}
.login-button{
 margin-top: 5px;
}
</style>

 <div class="container">
 <div class="row main-form">
 <form class="" method="post" action="../app/api/orderWechatRus"> 

 <div class="form-group">
 <label for="name" class="cols-sm-2 control-label">ФИО отправителя</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" name="fromFIO" id="namefrom" placeholder="Введите имя"/>
 </div>
 </div>
 </div>

 <div class="form-group">
 <label for="email" class="cols-sm-2 control-label">Телефон отправителя</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
 <input type="number" class="form-control" name="fromPhone" id="phonefrom" placeholder="Введите номер"/>
 </div>
 </div>
 </div>
	 <hr>
	  <div class="form-group">
 <label for="name" class="cols-sm-2 control-label">ФИО получателя</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" name="toFIO" id="nameto" placeholder="Введите имя"/>
 </div>
 </div>
 </div>
	  <div class="form-group">
 <label for="email" class="cols-sm-2 control-label">Телефон получателя</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
 <input type="number" class="form-control" name="toPhone" id="phoneto" placeholder="Введите номер"/>
 </div>
 </div>
 </div>
<hr>
	 	  <div class="form-group">
 <label for="email" class="cols-sm-2 control-label">Область</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-globe fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" name="obl" placeholder="Введите область доставки"/>
 </div>
 </div>
 </div>
	 	 	  <div class="form-group">
 <label for="email" class="cols-sm-2 control-label">Город</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-globe fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" id="city_from" value="" onkeydown="if(event.keyCode==13) return false;" autocomplete="on"  placeholder="Введите город доставки"/>
	 
	 
 </div>
 </div>
 </div>
	 

	 
<div class="form-group">
 <label for="email" class="cols-sm-2 control-label">Адрес</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-globe fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" name="toAdres" placeholder="Введите адрес доставки"/>
 </div>
 </div>
 </div>
	 <hr>
	 	 	 	  <div class="form-group">
 <label for="email" class="cols-sm-2 control-label">Трекинг номер</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-barcode fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" name="fromQID" placeholder="Введите трекинг номер"/>
 </div>
 </div>
 </div>
	 	 	 	 	  <div class="form-group">
 <label for="email" class="cols-sm-2 control-label">Описание вложения</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-pencil fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" name="toToItems" placeholder="Введите описание вложения"/>
 </div>
 </div>
 </div>
	 	 	 	 	 	  <div class="form-group">
 <label for="email" class="cols-sm-2 control-label">Примечание</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-pencil fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" name="prim" placeholder="Введите примечание"/>
 </div>
 </div>
 </div>
	 	 	 	 	 	 	  <div class="form-group">
 <label for="email" class="cols-sm-2 control-label">Объявленная стоимость(￥)</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-dollar fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" name="toPrice" id="obl" placeholder="Введите объявленную стоимость(￥)"/>
 </div>
 </div>
 </div>
	 <hr>
<style>
	@keyframes click-wave {
  0% {
    height: 40px;
    width: 40px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    height: 200px;
    width: 200px;
    margin-left: -80px;
    margin-top: -80px;
    opacity: 0;
  }
}

.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  right: 0;
  bottom: 0;
  left: 0;
  height: 40px;
  width: 40px;
  transition: all 0.15s ease-out 0s;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1000;
}

.option-input:checked {
  background: #40e0d0;
}
.option-input:checked::before {
  height: 40px;
  width: 40px;
  position: absolute;
  content: '✔';
  display: inline-block;
  font-size: 26.66667px;
  text-align: center;
  line-height: 40px;
	  border-radius: 50%;
}
.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}
.option-input.radio {
border-radius: 50%;

	}
.option-input.radio::after {
border-radius: 50%;
	}
	.bttt {
	outline: none !important;
	}
	.btt {
	width: 100%;
	}

	 </style>
<div>
	<h3>Выбор упаковки</h3>
  <label class="btt">
    <input type="checkbox" class="option-input radio bttt" name="pack" value="Пленка + пакет"/>
    Пленка + пакет
  </label>
  <label class="btt">
    <input type="checkbox" class="option-input radio bttt" name="pack" value="Коробка"/>
    Коробка
  </label class="btt">
  <label>
    <input type="checkbox" class="option-input radio bttt" name="pack" value="Коробка + уголок" />
    Коробка + уголок
  </label>
	  <label>
    <input type="checkbox" class="option-input radio bttt" name="pack" value="Обрешётка"/>
    Обрешётка
  </label>
</div>
	 <hr>

	   <label>
		   <h3>Услуга фотоотчёт</h3>
    <input type="checkbox" class="option-input radio bttt" name="photo" value="Фото"/>
    Да
  </label>


 <div class="form-group ">
 <input name="sendZakaz" type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Оформить">
 </div>
 </form>
 </div>
 </div>
	
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>