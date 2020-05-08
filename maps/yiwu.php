<?php
	session_start();
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
    .info {
        height: 30%;
        background: linear-gradient(89deg,#1697bf 3%,#68cef5 98%);
		padding-top: 20px;
    }
	.status {
		font-weight: 700;
		text-align: center;
		color: rgb(255, 255, 255);
		font-size: 2.5em;
	}
	.result {
		font-weight: 400;
		font-size: 1.2em;
	}
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
		<nav class="navigation">
			<div class="navigationItem">
        <i class="fa fa-arrow-circle-left navigationIcon" onclick="window.history.back()"></i>
			</div>
			<div class="navigationItem">
        <i class="fa fa-arrow-circle-right navigationIcon" onclick="window.history.forward()"></i>
			</div>
		</nav>
<div id="map" class="maps"></div>
<div class="info">
	<p class="status">Трек номер: <span class="result"><?=$_SESSION['tracking'];?></span>;</p>
	<p class="status">Находится: <span class="result"><?=$_SESSION['status'];?></span>;</p>
	<p class="status">Общий вес посылки: <span class="result"><?=$_SESSION['mass'];?> кг.</span>;</p>
	<p class="status">Количество мест: <span class="result"><?=$_SESSION['mest'];?></span>;</p>
	<p class="status">Город доставки: <span class="result"><?=$_SESSION['townto'];?></span>;</p>

	<?php
		unset($_SESSION);
	?>
</div>
<script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=<your API-key>" type="text/javascript"></script>
<script>
	ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [29.3063401,120.0748427],
            zoom: 9
        }, {
            searchControlProvider: 'yandex#search'
        }),

        // Creating a content layout.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'A custom placemark icon',
            balloonContent: 'This is a pretty placemark'
        }, {
            /**
             * Options.
             * You must specify this type of layout.
             */
            iconLayout: 'default#image',
            // Custom image for the placemark icon.
            iconImageHref: 'img/metka.gif',
            // The size of the placemark.
            iconImageSize: [64, 64],
            /**
             * The offset of the upper left corner of the icon relative
             * to its "tail" (the anchor point).
             */
            iconImageOffset: [-5, -38]
        }),

        myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
            hintContent: 'A custom placemark icon with contents',
            balloonContent: 'This one — for Christmas',
            //iconContent: '13'
        }, {
            /**
             * Options.
             * You must specify this type of layout.
             */
            iconLayout: 'default#imageWithContent',
            // Custom image for the placemark icon.
            //iconImageHref: 'images/ball.png',
            // The size of the placemark.
            iconImageSize: [0, 0],
            /**
             * The offset of the upper left corner of the icon relative
             * to its "tail" (the anchor point).
             */
            iconImageOffset: [-24, -24],
            // Offset of the layer with content relative to the layer with the image.
            iconContentOffset: [15, 15],
            // Content layout.
            iconContentLayout: MyIconContentLayout
        });

    myMap.geoObjects
        .add(myPlacemark)
        .add(myPlacemarkWithContent);
});

</script>