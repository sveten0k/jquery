<?php
/* @var $this yii\web\View */
$this->title = 'Виджет button';
?>
    <style>
        .ui-button {font-size: 13px;}
    </style>
    <h4>Блок ссылок</h4>
    <p><a class="a_jqui" href="https://google.com">Ссылка 1</a></p>
    <p><a href="https://google.com">Ссылка 2</a></p>

    <h4>Блок кнопок</h4>
    <p><button class="button_jqui">Кнопка 1</button></p>
    <p><button>Кнопка 2</button></p>

    <p><button class="get_option">Получить значение</button></p>
    <p><button class="set_option">Установить значение</button></p>
    <button class="help">Помощь</button>

    <div id="langs">
        <input type="radio" id="java" name="lang" checked><label for="java">Java</label>
        <input type="radio" id="csharp" name="lang"><label for="csharp">C#</label>
        <input type="radio" id="php" name="lang"><label for="php">PHP</label></p>
    </div>
<?php
$this->registerJs(<<<JS
 $(function(){
             
            $('.a_jqui').button().click(function(e){
                e.preventDefault();
                alert('Виджет button');
            });
            $('.button_jqui').button();
         });
$(function(){
         
    $('button.get_option').button().click(function(){
        // получаем значение
        var isDisabled=$('button.get_option').button('option', 'disabled');
        console.log(isDisabled);
    });
    $('button.set_option').button().click(function(){
        // устанавливаем значение
        $('button.set_option').button('option', 'disabled', true);
    });
});
$(function(){
    $('button.help').button({icons: { secondary: "ui-icon-help" }});
});
$(function(){
         
    $('#langs').buttonset();
});
JS
);

