<?php
/* @var $this yii\web\View */
$this->title = 'Виджет слайдер';
?>
    <style>
        .ui-slider {
            background: #FF9999;
            margin: 10%;
            width: 200px;
        }
    </style>
<!--div id="slider"></div>-->

    <h3>Слайдер</h3>
    <div id="slider"></div> <br />
    Текущее значение слайдера: <span id="sliderValue"></span>
<?php
$this->registerJs(<<<JS
/*
// создание виджета
$('#slider').slider({values: [10,80]});
// установка значений
$('#slider').slider('values', [30,60]);
// получение значений
var vals=$('#slider').slider('values');
console.log(vals);*/
$(function(){
    $('#slider').slider({
        change: function (event, ui){
            var val = $('#slider').slider('value');
            $('#sliderValue').html(val);
        },
        start: function(event, ui){
            console.log('Начало движения слайдера');
        },
        slide: function(event, ui){
            console.log('Перемещение слайдера');
        },
        stop: function(event, ui){
            console.log('Завершение движения слайдера');
        }
    });
});
JS
);


