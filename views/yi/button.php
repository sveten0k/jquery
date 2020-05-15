<?php
/* @var $this yii\web\View */
$this->title = 'Виджет button';
?>

    <h4>Блок ссылок</h4>
    <p><a class="a_jqui" href="https://google.com">Ссылка 1</a></p>
    <p><a href="https://google.com">Ссылка 2</a></p>

    <h4>Блок кнопок</h4>
    <p><button class="button_jqui">Кнопка 1</button></p>
    <p><button>Кнопка 2</button></p>



<?php
$this->registerJs(<<<JS
 $(function(){
             
            $('.a_jqui').button().click(function(e){
                e.preventDefault();
                alert('Виджет button');
            });
            $('.button_jqui').button();
         });
JS
);

