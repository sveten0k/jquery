<?php

/* @var $this yii\web\View */
$this->title = 'Введение в AJAX';
?>
    <button>Загрузить</button>
    <div id="news"><h3>Нет новостей</h3></div>

<?php
$this->registerJs(<<<JS
$(function(){
    $('button').click(function(){
        $('#news').load('ajax.php');
    });
});

JS
);

