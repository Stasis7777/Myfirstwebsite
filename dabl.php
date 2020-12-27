<div class="tabs">
    <input type="radio" name="inset" value="" id="tab_1" checked>
    <label for="tab_1">Переход на идентификацию</label>

    <input type="radio" name="inset" value="" id="tab_2">
    <label for="tab_2">Переход на "О нас"</label>

    <input type="radio" name="inset" value="" id="tab_3">
    <label for="tab_3">Вкладка №3</label>



    <div id="button_1">
        <p>Страница логин/пароль</p>
        <p>
        <form action="index.php" method="POST">
            <input type="submit" value="Перейти на index.php" />
        </form> 
        </p>  
    </div>

    <div id="button_2">
        <p>О нас</p>
        <p>
        <form action="index.php" method="POST">
            <input type="submit" value="Перейти на index.php" />
        </form> 
        </p>
    </div>

    <!-- <div id="txt_3">
        <img src="image/logo.png" width="533" height="77" alt="Лого">
    </div> -->
</div>


<style type="text/css">

.tabs { width: 100%; padding: 0px; margin: 0 auto; }
.tabs>input { display: none; }
.tabs>div {
    display: none;
    padding: 12px;
    border: 1px solid #C0C0C0;
    background: #FFFFFF;
}
.tabs>label {
    display: inline-block;
    padding: 7px;
    margin: 0 -5px -1px 0;
    text-align: center;
    color: #666666;
    border: 1px solid #C0C0C0;
    background: #E0E0E0;
    cursor: pointer;
}
.tabs>input:checked + label {
    color: #000000;
    border: 1px solid #C0C0C0;
    border-bottom: 1px solid #FFFFFF;
    background: #FFFFFF;
}
    #tab_1:checked ~ #button_1,
    #tab_2:checked ~ #button_2,
    #tab_3:checked ~ #txt_3,
    #tab_4:checked ~ #txt_4 
    { display: block; }
</style>