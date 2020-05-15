<?php

/* @var $this yii\web\View */
$this->title = 'Подгрузка скриптов';
?>
    <button>Загрузить</button>

<?php
$this->registerJs(<<<JS
$('button').on('click',function(){
        $.getScript('/redStyle.js');
    });

JS
);
