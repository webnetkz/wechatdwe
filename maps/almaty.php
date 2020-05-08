<?php
	session_start();
?>
<style>
    body {
        margin: 0;
        padding: 0;
    }
    .maps {
        width: 100%;
        height: 70%;
    }
    .info {
        height: 30%;
        background: linear-gradient(89deg,#1697bf 3%,#68cef5 98%);
    }
</style>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1837423.517194149!2d75.83293344406276!3d42.70730414101329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836e7d16c5cbab%3A0x3d44668fad986d76!2z0JDQu9C80LDRgtGL!5e0!3m2!1sru!2skz!4v1588577470062!5m2!1sru!2skz" class="maps" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<div class="info">
	<?php
		echo '<pre>';
		var_dump($_SESSION);
	
		unset($_SESSION);
	?>
</div>