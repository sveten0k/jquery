<?php
/* @var $this yii\web\View */
$this->title = 'Базовые эффекты';
?>

    <ul>
        <li>Java</li>
        <li>C/C++</li>
        <li>JavaScript</li>
    </ul>
    <button id="show">Показать</button>
    <button id="hide">Скрыть</button>

    <style>
        #langs p {display:none;}
        #langs p.first {display:block;}
    </style>
    <body>
    <h3>Выбранный язык</h3>
    <div id="langs">
        <p class='first'>Java</p>
        <p>C/C++</p>
        <p>PHP</p>
        <p class='last'>JavaScript</p>
    </div>
    <button id="prev">Назад</button>
    <button id="next">Вперед</button>

<?php
$this->registerJs(<<<JS
$(function() {
    $('button#show').click(function(){
        $('ul').show();
    });
   $('button#hide').click(function(){
        $('ul').hide('slow', function(){
            alert('Элемент скрыт');
        });
    });
});
/*
$(function() {
    $('button').click(function(){
        $('ul').toggle();
    });
});*/
$(function() {
    var current = $("div#langs p").first();
    $('#next').click(function(){
         $(current).not('.last').hide("fast", function() {
            current = $(current).next('p');
            $(current).show("fast");
        });
    });
    $('#prev').click(function(){
         $(current).not('.first').hide("fast", function() {
            current = $(current).prev('p');
            $(current).show("fast");
        });
    });
});
JS
);
