<?php
/* @var $this yii\web\View */
$this->title = 'Эффекты прозрачности';
?>

    <img src="/img/1.jpg" id="ars" /><br>
    <button id="fadeIn">Отобразить</button>
    <button id="fadeOut">Cкрыть</button>

<?php
$this->registerJs(<<<JS
$(function() {
    $('#ars').fadeTo(2000,0.6);
    $('#fadeIn').click(function(){
         $('#ars').fadeIn('slow', function(){alert('Отображено');});
    });
    $('#fadeOut').click(function(){
         $('#ars').fadeOut(2000, function(){alert('Скрыто');});
    });
});
JS
);
