<?php
/* @var $this yii\web\View */
$this->title = 'Создание анимации';
?>

    <img src="/img/1.jpg" id="ars"/><br>
    <button id="anim">Анимация</button>

<?php
$this->registerJs(<<<JS
$(function() {
    $('#anim').click(function(){
         $('#ars').animate({
        'margin-left': '+=50',
        width: '-=10',
        height: '-=10'
        },{
        duration: 1000,
        step: function(now, fx) {
            var data = fx.elem.id + ' ' + fx.prop + ': ' + now;
            $('body').append('<div>' + data + '</div>');
        },
        complete: function() {
            alert('Анимация завершена');
        }
});
    });
});
JS
);
