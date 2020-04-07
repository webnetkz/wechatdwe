<!DOCTYPE html>
<html lang="en">
<head>

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
 <input type="text" class="form-control" id="cityvalue" placeholder="Введите город доставки"/>
	 
	 
 </div>
 </div>
 </div>
	 
	 <select autofocus name="RU" class="form-control" name="toCity" required id="cityselect">
            <option value="">Город</option>
                <option value="Абакан">Абакан</option>
                <option value="a216cad5-7027-40b8-b1a1-d64abefbd5cd">Азов</option>
                <option value="41507">Александров</option>
                <option value="">Алексин</option>
                <option value="">Альметьевск</option>
                <option value="">Анапа</option>
                <option value="">Ангарск</option>
                <option value="">Анжеро-Судженск</option>
                <option value="">Апатиты</option>
                <option value="">Арзамас</option>
                <option value="">Армавир</option>
                <option value="">Арсеньев</option>
                <option value="">Артем</option>
                <option value="">Архангельск</option>
                <option value="">Асбест</option>
                <option value="">Астрахань</option>
                <option value="">Ачинск</option>
                <option value="">Балаково</option>
                <option value="">Балахна</option>
                <option value="">Балашиха</option>
                <option value="">Балашов</option>
                <option value="">Барнаул</option>
                <option value="">Батайск</option>
                <option value="">Белгород</option>
                <option value="">Белебей</option>
                <option value="">Белово</option>
                <option value="">Белорецк</option>
                <option value="">Белореченск</option>
                <option value="">Бердск</option>
                <option value="">Березники</option>
                <option value="">Березовский (Свердловская область)</option>
                <option value="">Бийск</option>
                <option value="">Биробиджан</option>
                <option value="">Благовещенск (Амурская область)</option>
                <option value="">Бор</option>
                <option value="">Борисоглебск</option>
                <option value="">Боровичи</option>
                <option value="">Братск</option>
                <option value="">Брянск</option>
                <option value="">Бугульма</option>
                <option value="">Буденновск</option>
                <option value="">Бузулук</option>
                <option value="">Буйнакск</option>
                <option value="">Великие Луки</option>
                <option value="">Великий Новгород</option>
                <option value="">Верхняя Пышма</option>
                <option value="">Видное</option>
                <option value="">Владивосток</option>
                <option value="">Владикавказ</option>
                <option value="">Владимир</option>
                <option value="a52b7389-0cfe-46fb-ae15-298652a64cf8">Волгоград</option>
                <option value="">Волгодонск</option>
                <option value="">Волжск</option>
                <option value="">Волжский</option>
                <option value="">Вологда</option>
                <option value="">Вольск</option>
                <option value="Воркута">Воркута</option>
                <option value="">Воронеж</option>
                <option value="">Воскресенск</option>
                <option value="">Воткинск</option>
                <option value="">Всеволожск</option>
                <option value="">Выборг</option>
                <option value="">Выкса</option>
                <option value="">Вязьма</option>
                <option value="">Гатчина</option>
                <option value="">Геленджик</option>
                <option value="">Георгиевск</option>
                <option value="">Глазов</option>
                <option value="">Горно-Алтайск</option>
                <option value="">Грозный</option>
                <option value="">Губкин</option>
                <option value="">Гудермес</option>
                <option value="">Гуково</option>
                <option value="">Гусь-Хрустальный</option>
                <option value="">Дербент</option>
                <option value="">Дзержинск</option>
                <option value="">Димитровград</option>
                <option value="78">Дмитров</option>
                <option value="79">Долгопрудный</option>
                <option value="80">Домодедово</option>
                <option value="81">Донской</option>
                <option value="82">Дубна</option>
                <option value="83">Евпатория</option>
                <option value="84">Егорьевск</option>
                <option value="85">Ейск</option>
                <option value="86">Екатеринбург</option>
                <option value="87">Елабуга</option>
                <option value="88">Елец</option>
                <option value="89">Ессентуки</option>
                <option value="90">Железногорск (Красноярский край)</option>
                <option value="91">Железногорск (Курская область)</option>
                <option value="92">Жигулевск</option>
                <option value="93">Жуковский</option>
                <option value="94">Заречный</option>
                <option value="96">Зеленогорск</option>
                <option value="97">Зеленодольск</option>
                <option value="98">Златоуст</option>
                <option value="99">Иваново</option>
                <option value="100">Ивантеевка</option>
                <option value="101">Ижевск</option>
                <option value="102">Избербаш</option>
                <option value="103">Иркутск</option>
                <option value="104">Искитим</option>
                <option value="105">Ишим</option>
                <option value="106">Ишимбай</option>
                <option value="107">Йошкар-Ола</option>
                <option value="108">Казань</option>
                <option value="109">Калининград</option>
                <option value="110">Калуга</option>
                <option value="111">Каменск-Уральский</option>
                <option value="112">Каменск-Шахтинский</option>
                <option value="113">Камышин</option>
                <option value="114">Канск</option>
                <option value="115">Каспийск</option>
                <option value="116">Кемерово</option>
                <option value="117">Керчь</option>
                <option value="118">Кинешма</option>
                <option value="119">Кириши</option>
                <option value="120">Киров (Кировская область)</option>
                <option value="121">Кирово-Чепецк</option>
                <option value="122">Киселевск</option>
                <option value="123">Кисловодск</option>
                <option value="124">Клин</option>
                <option value="125">Клинцы</option>
                <option value="126">Ковров</option>
                <option value="127">Когалым</option>
                <option value="128">Коломна</option>
                <option value="129">Комсомольск-на-Амуре</option>
                <option value="130">Копейск</option>
                <option value="131">Королев</option>
                <option value="132">Кострома</option>
                <option value="133">Котлас</option>
                <option value="134">Красногорск</option>
                <option value="135">Краснодар</option>
                <option value="136">Краснокаменск</option>
                <option value="137">Краснокамск</option>
                <option value="138">Краснотурьинск</option>
                <option value="139">Красноярск</option>
                <option value="140">Кропоткин</option>
                <option value="141">Крымск</option>
                <option value="142">Кстово</option>
                <option value="143">Кузнецк</option>
                <option value="144">Кумертау</option>
                <option value="145">Кунгур</option>
                <option value="146">Курган</option>
                <option value="147">Курск</option>
                <option value="148">Кызыл</option>
                <option value="149">Лабинск</option>
                <option value="150">Лениногорск</option>
                <option value="151">Ленинск-Кузнецкий</option>
                <option value="152">Лесосибирск</option>
                <option value="153">Липецк</option>
                <option value="154">Лиски</option>
                <option value="155">Лобня</option>
                <option value="156">Лысьва</option>
                <option value="157">Лыткарино</option>
                <option value="158">Люберцы</option>
                <option value="159">Магадан</option>
                <option value="160">Магнитогорск</option>
                <option value="161">Майкоп</option>
                <option value="162">Махачкала</option>
                <option value="163">Междуреченск</option>
                <option value="164">Мелеуз</option>
                <option value="165">Миасс</option>
                <option value="166">Минеральные Воды</option>
                <option value="167">Минусинск</option>
                <option value="168">Михайловка</option>
                <option value="169">Михайловск (Ставропольский край)</option>
                <option value="170">Мичуринск</option>
                <option value="Москва">Москва</option>
                <option value="172">Мурманск</option>
                <option value="173">Муром</option>
                <option value="174">Мытищи</option>
                <option value="175">Набережные Челны</option>
                <option value="176">Назарово</option>
                <option value="177">Назрань</option>
                <option value="178">Нальчик</option>
                <option value="179">Наро-Фоминск</option>
                <option value="180">Находка</option>
                <option value="181">Невинномысск</option>
                <option value="182">Нерюнгри</option>
                <option value="183">Нефтекамск</option>
                <option value="184">Нефтеюганск</option>
                <option value="185">Нижневартовск</option>
                <option value="186">Нижнекамск</option>
                <option value="187">Нижний Новгород</option>
                <option value="188">Елец</option>
                <option value="189">Нижний Тагил</option>
                <option value="190">Новоалтайск</option>
                <option value="191">Новокузнецк</option>
                <option value="192">Новокуйбышевск</option>
                <option value="193">Новомосковск</option>
                <option value="194">Новороссийск</option>
                <option value="196">Новосибирск</option>
                <option value="197">Новотроицк</option>
                <option value="198">Новоуральск</option>
                <option value="199">Новочебоксарск</option>
                <option value="200">Новочеркасск</option>
                <option value="201">Новошахтинск</option>
                <option value="202">Новый Уренгой</option>
                <option value="203">Ногинск</option>
                <option value="204">Норильск</option>
                <option value="205">Ноябрьск</option>
                <option value="206">Нягань</option>
                <option value="207">Обнинск</option>
                <option value="208">Одинцово</option>
                <option value="209">Озерск (Челябинская область)</option>
                <option value="210">Октябрьский</option>
                <option value="211">Омск</option>
                <option value="212">Орел</option>
                <option value="213">Оренбург</option>
                <option value="214">Орехово-Зуево</option>
                <option value="215">Орск</option>
                <option value="216">Павлово</option>
                <option value="217">Павловский Посад</option>
                <option value="218">Пенза</option>
                <option value="219">Первоуральск</option>
                <option value="220">Пермь</option>
                <option value="221">Петрозаводск</option>
                <option value="222">Петропавловск-Камчатский</option>
                <option value="223">Подольск</option>
                <option value="224">Полевской</option>
                <option value="225">Прокопьевск</option>
                <option value="226">Прохладный</option>
                <option value="227">Псков</option>
                <option value="228">Пушкино</option>
                <option value="229">Пятигорск</option>
                <option value="230">Раменское</option>
                <option value="231">Ревда</option>
                <option value="232">Реутов</option>
                <option value="233">Ржев</option>
                <option value="234">Рославль</option>
                <option value="235">Россошь</option>
                <option value="236">Ростов-на-Дону</option>
                <option value="237">Рубцовск</option>
                <option value="238">Рыбинск</option>
                <option value="239">Рязань</option>
                <option value="240">Салават</option>
                <option value="241">Сальск</option>
                <option value="242">Самара</option>
                <option value="243">Санкт-Петербург</option>
                <option value="244">Саранск</option>
                <option value="245">Сарапул</option>
                <option value="246">Саратов</option>
                <option value="247">Саров</option>
                <option value="248">Свободный</option>
                <option value="249">Севастополь</option>
                <option value="250">Северодвинск</option>
                <option value="251">Северск</option>
                <option value="252">Сергиев Посад</option>
                <option value="253">Серов</option>
                <option value="254">Серпухов</option>
                <option value="255">Сертолово</option>
                <option value="256">Сибай</option>
                <option value="257">Симферополь</option>
                <option value="258">Славянск-на-Кубани</option>
                <option value="259">Смоленск</option>
                <option value="260">Соликамск</option>
                <option value="261">Солнечногорск</option>
                <option value="262">Сосновый Бор</option>
                <option value="263">Сочи</option>
                <option value="264">Ставрополь</option>
                <option value="265">Старый Оскол</option>
                <option value="266">Стерлитамак</option>
                <option value="267">Ступино</option>
                <option value="268">Сургут</option>
                <option value="269">Сызрань</option>
                <option value="270">Сыктывкар</option>
                <option value="271">Таганрог</option>
                <option value="272">Тамбов</option>
                <option value="273">Тверь</option>
                <option value="274">Тимашевск</option>
                <option value="275">Тихвин</option>
                <option value="276">Тихорецк</option>
                <option value="277">Тобольск</option>
                <option value="278">Тольятти</option>
                <option value="279">Томск</option>
                <option value="280">Троицк</option>
                <option value="281">Туапсе</option>
                <option value="282">Туймазы</option>
                <option value="283">Тула</option>
                <option value="284">Тюмень</option>
                <option value="285">Узловая</option>
                <option value="286">Улан-Удэ</option>
                <option value="287">Ульяновск</option>
                <option value="288">Урус-Мартан</option>
                <option value="289">Усолье-Сибирское</option>
                <option value="290">Уссурийск</option>
                <option value="291">Усть-Илимск</option>
                <option value="292">Уфа</option>
                <option value="293">Ухта</option>
                <option value="294">Феодосия</option>
                <option value="296">Новосибирск</option>
                <option value="297">Новотроицк</option>
                <option value="298">Новоуральск</option>
                <option value="299">Новочебоксарск</option>
                <option value="300">Новочеркасск</option>
                <option value="301">Фрязино</option>
                <option value="302">Хабаровск</option>
                <option value="303">Ханты-Мансийск</option>
                <option value="304">Хасавюрт</option>
                <option value="305">Химки</option>
                <option value="306">Чайковский</option>
                <option value="307">Чапаевск</option>
                <option value="308">Чебоксары</option>
                <option value="309">Челябинск</option>
                <option value="310">Черемхово</option>
                <option value="311">Череповец</option>
                <option value="312">Черкесск</option>
                <option value="313">Черногорск</option>
                <option value="314">Чехов</option>
                <option value="315">Чистополь</option>
                <option value="316">Чита</option>
                <option value="317">Шадринск</option>
                <option value="318">Шали</option>
                <option value="319">Шахты</option>
                <option value="320">Шуя</option>
                <option value="321">Щекино</option>
                <option value="322">Щелково</option>
                <option value="323">Электросталь</option>
                <option value="324">Элиста</option>
                <option value="325">Энгельс</option>
                <option value="326">Южно-Сахалинск</option>
                <option value="327">Юрга</option>
                <option value="328">Якутск</option>
                <option value="329">Ялта</option>
                <option value="330">Ярославль</option>
            </select>
	 
	 <script type='text/javascript'>
    var elems = document.getElementById("cityselect").options;
    var similar = function (A, B) {
        for (var i = 0; i < B.length; i++)
            if (A.charAt(i) != B.charAt(i)) break;
        return i;
    };
    document.getElementById("cityvalue").onkeypress = function (event) {
        var max = 0;
        for (var i = 0; i < elems.length; i++) {
            var A = elems[i].innerHTML.replace(/^\s+|\s+$/g, "").toLowerCase(),
            B = (this.value + String.fromCharCode(event.keyCode)).toLowerCase();
            if (similar(A, B) > max)
                elems[i].selected = "selected", max = similar(A, B);
        }
    };
</script>

	 		<br>
	 
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
	

<script src="js/jquery.js"></script>
	

	

<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>