<?php

/* @var $this yii\web\View */
$this->title = 'Регистрация и удаление обработчиков событий';
?>


    <button class="redStyle">Нажать</button>
    <button class="langs">Языки программирования</button>
    <button>Жми1</button>
    <button>Жми2</button>
    <button>Жми3</button>

<?php
$this->registerJs(<<<JS
/*$('button').bind('click', function(e){
    alert('Привет мир!');
});
$('button').unbind();
$(function(){
    $('button').bind('click', function(){
        if($(this).hasClass("langs")){
            $('body').append('<ul><li>Java</li><li>JavaScript</li></ul>');
        }
        alert('Обработчик события click');
    });
});*/
$(function(){
    $('button').one('click', function(e){
        $(this).css('color', 'red');
        alert('Обработчик для кнопки: '+$(this).text());
    });
});
$(function(){
    $(document).bind('keydown', function(e){ 
        console.log(e.which);
    });
});
var mes = 'Привет мир!';
$('button').bind('click', mes, function(e){
        alert(e.data);
    });
JS
);