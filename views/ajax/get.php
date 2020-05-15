<?php

/* @var $this yii\web\View */
$this->title = 'GET-запросы';
?>
    <button>Загрузить</button>
    <div id="news"><h3>Нет новостей</h3></div>

<?php
$this->registerJs(<<<JS
/*$(function(){
    $('button').click(function(){
        $.get('/ajax/ajax', function(data) {
                $('#news').html(data);
                alert('Данные заружены');
        });
    });
});	*/
//$.get('/ajax/ajax?id=1');

/*$.get('/ajax/ajax', 
    function(data) {
            $('#news').empty().append("<h3>"+data.event+"</h3><h5>"+data.data+"</h5>");
    }, 
    'json');*/

/*$.get('/ajax/ajax').done(function(data) {
                $('#news').html(data);
                alert('Данные заружены');
        });*/
var jqxhr=$.get('/ajax/ajax');
jqxhr.done(function(data) {
        $('#news').html(data);
});
jqxhr.fail(function(data) {
        $('#news').html("ОШИБКА!");
});

JS
);
