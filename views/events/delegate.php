<?php

/* @var $this yii\web\View */
$this->title = 'Методы delegate и on';
?>
    <div class="div">
        <button>Жми1</button>
        <button>Жми2</button>
    </div>

<?php
$this->registerJs(<<<JS
/*
$(function(){
    $('div.div').delegate('button','click', function(e){
        $(this).css('color', 'red');
        alert('Обработчик для кнопки: '+$(this).text());
    });
    $('div.div').append('<button>Жми3</button>');
});
$('div.div').undelegate('button','click');*/
$('body').on('click', 'button', function(e){
    $(this).css('color', 'red');
    alert('Обработчик для кнопки: '+$(this).text());
});
$('body').off('click','button');
JS
);