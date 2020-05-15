<?php

/* @var $this yii\web\View */
$this->title = 'GET-запросы';
?>
    <button>Загрузить</button>
    <div id="news"><h3>Нет новостей</h3></div>

<?php
$this->registerJs(<<<JS
$(function(){
    $('button').click(function(){
        $.get('/ajax/ajax', function(data) {
                $('#news').html(data);
                alert('Данные заружены');
        });
    });
});

JS
);
