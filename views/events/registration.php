<?php

/* @var $this yii\web\View */
$this->title = 'Регистрация и удаление обработчиков событий';
?>


    <button class="redStyle">Нажать</button>

<?php
$this->registerJs(<<<JS
$('button').bind('click', function(){
        alert('Привет мир!');
    });
JS
);