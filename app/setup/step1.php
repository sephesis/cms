<?php
//селектор типа установки?>

<div class="container">
    <h1>Установка</h1>
<form action="" method="get">
    <div class="form-group mt-1">
    <label>Выберите тип установки компонентов</label>
    <select class="form-control" name="selector">
        <option value="react">React</option>
    </select>
    </div>
    <div class="form-group mt-1">
    <label>Выберите язык</label>
    <select class="form-control" name="lang">
        <option value="en">English</option>
        <option value="ru">Русский</option>
    </select>
    </div>
    <div class="form-group mt-3">
    <button type="submit" class="btn btn-primary">Установить</button>
    </div>
</form>
</div>