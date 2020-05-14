<?php

/* @var $this yii\web\View */
$this->title = 'Выборка элементов';
?>

    <ul class="menu">
        <li>Пункт 1</li>
        <li>Пункт 2
            <ul class="submenu">
                <li>Подпункт 2.1</li>
                <li>Подпункт 2.2</li>
            </ul>
        </li>
        <li>Пункт 3
            <ul class="submenu">
                <li>Подпункт 3.1</li>
                <li>Подпункт 3.2</li>
            </ul>
        </li>
    </ul>
<?php
$this->registerJs(<<<JS
//$('li').has('ul').css('background-color', 'silver');
$(function(){
    var array = $('li').map(function(index,elem){
        return $(elem).children()[0];
    });
    array.each(function(index, elem){
        console.log(elem.innerHTML);
    });
    array.css('background-color', 'silver');
});  
var lists = $('ul');
if(lists.is('.submenu')){
    lists.css('background-color', 'yellow');
}
$(function(){
    // поиск по селектору
    var array0 = $('ul').find('.submenu');
    array0.css('background-color', 'silver');
     
    // поиск по элементу
    // получаем первый элемент выборки
    var elem = $('ul.submenu')[0];
    var array1= $('ul').find(elem);
    array1.css('background-color', 'gray');
     
    // Поиск объекта jQuery
    var jQueryObject = $('ul.submenu');
    var array2= $('ul').find(jQueryObject);
    array2.css('color', 'blue');
});
JS
);