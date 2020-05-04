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
        font-size: 1.3em;
    }
    .inp_track {
        display: block;
        width: 30%;
        margin-left: 35%;
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
        margin-top: 10px;
        text-align: center;
        outline: none;
        border-radius: 3px;
        border: none;
        padding: 4px;
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
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d41752556.0997238!2d56.09637343361268!3d50.30361626282448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2skz!4v1586411276460!5m2!1sru!2skz" class="maps" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<div class="info">
    <form action="../app/test.php" method="GET">
        <label for="track" class="label">Введите трек номер
            <input type="text" id="track" placeholder="трек номер" class="inp_track" name="numberTracking">
            <input type="submit" class="btn_track" name="sendTracking" value="Отследить">
        </label>
    </form>
</div>