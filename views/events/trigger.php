<?php

/* @var $this yii\web\View */
$this->title = 'Метод trigger';
?>
    <body>
    <table>
        <tr>
            <td>Слово</td>
            <td>Перевод</td>
        </tr>
        <tr>
            <td>Cabbage</td>
            <td>Капуста</td>
        </tr>
        <tr>
            <td>Carrot</td>
            <td>Морковь</td>
        </tr>
        <tr>
            <td>Potato</td>
            <td>Картофель</td>
        </tr>
        <tr>
            <td>Tomato</td>
            <td>Помидор</td>
        </tr>
    </table>
    <br>
    <!--  <button>Выделить</button>
      <button>Снять выделение</button>-->

    <button>Кнопка 1</button>
    <button>Кнопка 2</button>

<?php
$this->registerJs(<<<JS
$(function(){
    $('table').on('mouseenter', 'tr', function(e){
        $(this).css('background-color', 'silver');
    }).on('mouseout', 'tr', function(e){
        $(this).css('background-color', 'white');
    });
     
    $('button').first().on('click', function(){
        $('tr').trigger('mouseenter');
    });
     
    $('button').last().on('click', function(){
        $('tr').trigger('mouseout');
    });
});

$(function(){
    $('button').first().click(function(){
        $(this).css('background-color', 'silver');
    });
     
    $('button').last().click(function(){
        $('button').first().click();
    });
});
JS
);
