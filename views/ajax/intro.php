<?php

/* @var $this yii\web\View */
$this->title = 'Введение в AJAX';
?>
    <button>Загрузить</button>
    <div id="news"><h3>Нет новостей</h3></div>

<?php
$this->registerJs(<<<JS
/*$(function(){
    $('button').click(function(){
        $('#news').load('/ajax/ajax');
    });
});*/
$(function(){
    $('button').click(function(){
        $('#news').load('/ajax/ajax', {'event':'Начало чемпионата России', 'date':'13.07.2013'},function(){alert('Запрос выполнен')});
    });
});

JS
);

