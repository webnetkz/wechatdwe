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
    form {
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
		font-size: 1.1em;
        transition-duration: 500ms;
        box-shadow: 0 0 5px rgb(99, 99, 99);
        font-weight: 600;
        color: rgb(77, 77, 77);
    }
    .info {
        height: 30%;
        background: linear-gradient(89deg,#1697bf 3%,#68cef5 98%);
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
    <form action="../app/tracking.php" method="GET">
        <label for="track" class="label">Введите трек номер
            <input type="text" id="track" placeholder="трек номер" class="inp_track" name="numberTracking">
            <input type="submit" class="btn_track" name="sendTracking" value="Отследить">
        </label>
    </form>
</div>
<?php
	unset($_SESSION);
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=<your API-key>" type="text/javascript"></script>
<script>
	ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [29.3063401,120.0748427],
            zoom: 3
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
            //iconLayout: 'default#image',
            // Custom image for the placemark icon.
            //iconImageHref: 'img/metka.gif',
            // The size of the placemark.
            //iconImageSize: [64, 64],
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