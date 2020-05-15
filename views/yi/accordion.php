<?php
/* @var $this yii\web\View */
$this->title = 'Виджет Accordion';
?>
    <style>
        .ui-accordion {font-size: 12px;}
        .ui-accordion-header {font-size: 13px;}
        .ui-accordion-content {font-style: italic;}
    </style>
    <h3>Языки программирования</h3>
    <div id="accordion">
        <h3>Java</h3>
        <div>Описание языка Java</div>
        <h3>JavaScript</h3>
        <div>Описание языка JavaScript</div>
        <h3>C#</h3>
        <div>Описание языка C#</div>
    </div>
<?php
$this->registerJs(<<<JS
$(function(){
     $('#accordion').accordion({animate:'easeInCubic'});
});
$('#accordion').accordion();
// установка
$('#accordion').accordion('option', 'collapsible', true);
// получение значения
var isCollapsible=$('#accordion').accordion('option', 'collapsible');
console.log(isCollapsible);
$('#accordion').accordion({
    activate: function( event, ui ) {
         
        console.log("Была активной панель: " + $(ui.oldHeader).text());
        console.log("Стала активной панель: " + $(ui.newHeader).text());
    }
});
JS
);


