<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    .maps {
        width: 100%;
        height: 50%;
    }
    form {
        display: block;
        text-align: center;
        margin-top: 50px;
    }
    .inp_track {
        display: block;
        width: 20%;
        margin-left: 40%;
        margin-top: 5px;
        text-align: center;
    }
    .btn_track {
        margin-top: 10px;
    }
</style>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d41752556.0997238!2d56.09637343361268!3d50.30361626282448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2skz!4v1586411276460!5m2!1sru!2skz" class="maps" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<form action="#" method="GET">
    <label for="track">Введите трек номер
        <input type="text" id="track" placeholder="трек номер" class="inp_track">
        <button type="submit" class="btn_track">Отследить</button>
    </label>
</form>