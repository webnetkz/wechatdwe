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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
  <style>

    .modal {
      display: block;
      position: fixed;
      left: -100vw;
      top: 0;
      height: 100vh;
      width: 100vw;
      z-index: 9999999999999999999999999999999999999999999999999;
      background-color: rgb(255, 255, 255);
      transition-duration: 600ms;
      padding: 50px;
      padding-top: 20px;
    }




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
      margin-top: 15px;
    }
  </style>
</head>
<body>

      <div class="content-form">
        <script>
          $(document).ready(function(){
          // --- Автозаполнение ---
          $("#city_from").autocompleteArray([
            <?php require_once "dataCitys/rus.php"?>
          ],
              {
                delay:10,
                minChars:1,
                matchSubset:1,
                autoFill:true,
                maxItemsToShow:10
              }
          );
          });

          function show_item(id, status)
          {
            if (status==0)	$('#'+id).animate({ height: "hide"}, "hide");
            else $('#'+id).animate({ height: "show" }, "slow");
          }
        </script>
        <script>
          $(document).ready(function(){
          // --- Автозаполнение ---
          $("#oblto").autocompleteArray([
            <?php require_once "dataCitys/oblRus.php"?>
          ],
              {
                delay:10,
                minChars:1,
                matchSubset:1,
                autoFill:true,
                maxItemsToShow:10
              }
          );
          });

          function show_item(id, status)
          {
            if (status==0)	$('#'+id).animate({ height: "hide"}, "hide");
            else $('#'+id).animate({ height: "show" }, "slow");
          }
        </script>
<!-- PRELOADER -->
<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

 <div class="container">
  <div class="row main-form">
    <form class="" method="post" action="api/orderWechatRus.php"> 

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
 <input type="text" class="form-control" name="obl" id="oblto" placeholder="Введите область доставки"/>
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
 <span class="input-group-addon" onclick="openModal1()"><i class="fa fa-question fa" aria-hidden="true"></i></span>
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
    <input type="radio" class="option-input radio bttt" name="pack" value="Пленка + пакет"/>
    Пленка + пакет
  <i onclick="openModal2()" class="fa fa-question fa" aria-hidden="true" style="font-size: 2em; position: absolute; left: 80vw; margin-top: 15px; padding: 3px; padding-right: 5px; border: 1px solid white; border-radius: 5px;"></i>
  </label>
  <label class="btt">
    <input type="radio" class="option-input radio bttt" name="pack" value="Коробка"/>
    Коробка
    <i onclick="openModal3()" class="fa fa-question fa" aria-hidden="true" style="font-size: 2em; position: absolute; left: 80vw; margin-top: 15px; padding: 3px; padding-right: 5px; border: 1px solid white; border-radius: 5px;"></i>
  </label class="btt">
  <label>
    <input type="radio" class="option-input radio bttt" name="pack" value="Коробка + уголок" />
    Коробка + уголок
    <i onclick="openModal4()" class="fa fa-question fa" aria-hidden="true" style="font-size: 2em; position: absolute; left: 80vw; margin-top: 15px; padding: 3px; padding-right: 5px; border: 1px solid white; border-radius: 5px;"></i>
  </label>
	  <label>
    <input type="radio" class="option-input radio bttt" name="pack" value="Обрешётка"/>
    Обрешётка
    <i onclick="openModal5()" class="fa fa-question fa" aria-hidden="true" style="font-size: 2em; position: absolute; left: 80vw; margin-top: 15px; padding: 3px; padding-right: 5px; border: 1px solid white; border-radius: 5px;"></i>
  </label>
</div>
	 <hr>

	   <label>
		   <h3>Услуга фотоотчёт</h3>
    <input type="checkbox" class="option-input radio bttt" name="photo" value="Фото"/>
    Да
    <i onclick="openModal6()" class="fa fa-question fa" aria-hidden="true" style="font-size: 2em; position: absolute; left: 80vw; margin-top: 15px; padding: 3px; padding-right: 5px; border: 1px solid white; border-radius: 5px;"></i>
  </label>

 <div class="form-group ">
 <input name="sendZakaz" type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Оформить">
 </div>
 </form>
 </div>
 </div>

 <div class="modal modal1" onclick="closeModal1()">
    <h2>Объявленная стоимость</h2>
    <hr>
    <p>К отправке принимаются посылки с объявленной стоимостью от 100 ￥ до 5000 ￥. 
    Сервисный сбор рассчитывается от суммы объявленной стоимости посылки -- 
    От 100￥ до 1000￥：1.5%，От 1001￥ до 2000￥：2%，От 2001￥ до 3000￥：2.5%, От 
    3001￥ до 4000￥：3%, От 4001￥до 5000￥：4%</p>
 </div>
 <div class="modal modal2" onclick="closeModal2()">
    <h2>Пленка + пакет</h2>
    <hr>
    <p>Пленка + пакет от 5 до 10￥ - подходит для упаковки нехрупкого штучного товара, обуви, а также одежды, не относящейся к деликатной. Однако предметы с декоративными элементами – стразами, пайетками и т.д. нужно упаковывать в плёнку, а затем в коробку.</p>
    <p>
      <img src="images/modal2-1.jpg" alt="" width="130">
      <img src="images/modal2-2.jpg" alt="" width="130">
    </p>
 </div>
 <div class="modal modal3" onclick="closeModal3()">
    <h2>Коробка</h2>
    <hr>
    <p>Коробка от 10 до 25￥ - подходит для сборных совместимых товаров. В случае если внешний вид фирменной коробки не является приоритетным, или она вообще не нужна (об этом нужно указывать в примечании при оформлении – за счет этого уменьшится вес отправления и, соответственно стоимость доставки).</p>
    <p>
      <img src="images/modal3.webp" alt="" width="130">
    </p>
 </div>
 <div class="modal modal4" onclick="closeModal4()">
    <h2>Коробка+ уголок</h2>
    <hr>
    <p>Коробка+ уголок от 25 до 40￥ - подходит для сборных совместимых товаров – хрупких, деликатных грузов, а также предметов, способных повредить или испортить соседствующие отправления. Также необходимо упаковывать товар таким образом, если вам важна сохранность фирменных упаковок от производителей – это наиболее актуально для обуви и сумок.</p>
    <p style="color: red; font-size: 0.8em">Внимание!
1. Защитные уголки могут увеличить вес груза, что, соответственно, может повлиять на конечную стоимость перевозки.</p>
    <p>
      <img src="images/modal3.webp" alt="" width="130">
      <img src="images/modal4.jpg" alt="" width="130">
    </p>
 </div>
 <div class="modal modal5" onclick="closeModal5()">
    <h2>Обрешётка</h2>
    <hr>
    <p>Обрешётка от 40 до 80￥ - самый подходящий вариант упаковки для хрупких грузов, а также для специфических категорий товаров - оборудования, оргтехники,стеклянных и керамических изделий.</p>
    <p style="color: red;">Внимание!
1. Обрешётка может увеличить вес груза, что, соответственно, может повлиять на конечную стоимость перевозки.
</p>
    <p>
      <img src="images/modal3.webp" alt="" width="130">
      <img src="images/modal5.jpg" alt="" width="130">
    </p>
 </div>
 <div class="modal modal6" onclick="closeModal6()">
    <h2>Фотоотчет</h2>
    <hr>
    <p>Заказывая услугу «фотоотчет» вы сможете проверить содержимое своей посылки (цвет- модель)до отправки. Стоимость услуги 10¥.</p></p>
 </div>
<script>
    function openModal1() {
      let mod = document.querySelector('.modal1');
      mod.style.left = '0px';
    }

    function closeModal1() {
      let mod = document.querySelector('.modal1');
      mod.style.left = '-100vw';
    }
    ////////////////////////////
    function openModal2() {
      let mod = document.querySelector('.modal2');
      mod.style.left = '0px';
    }

    function closeModal2() {
      let mod = document.querySelector('.modal2');
      mod.style.left = '-100vw';
    }
    ///////////////////////////
    function openModal3() {
      let mod = document.querySelector('.modal3');
      mod.style.left = '0px';
    }

    function closeModal3() {
      let mod = document.querySelector('.modal3');
      mod.style.left = '-100vw';
    }
    ///////////////////////////
    function openModal4() {
      let mod = document.querySelector('.modal4');
      mod.style.left = '0px';
    }

    function closeModal4() {
      let mod = document.querySelector('.modal4');
      mod.style.left = '-100vw';
    }
    ///////////////////////////
    function openModal5() {
      let mod = document.querySelector('.modal5');
      mod.style.left = '0px';
    }

    function closeModal5() {
      let mod = document.querySelector('.modal5');
      mod.style.left = '-100vw';
    }
    ///////////////////////////
    function openModal6() {
      let mod = document.querySelector('.modal6');
      mod.style.left = '0px';
    }

    function closeModal6() {
      let mod = document.querySelector('.modal6');
      mod.style.left = '-100vw';
    }
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>






</body>
</html>