<?php

/* @var $this yii\web\View */
$this->title = 'Навигация по странице';
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
            <ul>
                <li>Подпункт 3.1</li>
                <li>Подпункт 3.2</li>
            </ul>
        </li>
    </ul>

    <h2 class="header">Заголовок</h2>
    <ul class="menu">
        <li class="punkt1">Пункт 1</li>
        <li class="punkt2">Пункт 2
            <ul class="submenu">
                <li>Подпункт 2.1</li>
                <li>Подпункт 2.2</li>
            </ul>
        </li>
        <li class="punkt3">Пункт 3</li>
    </ul>
<?php
$this->registerJs(<<<JS
// дочерние узлы без селектора
var lists = $('li').children('');
lists.each(function(index, elem){
    console.log(elem.innerHTML);
}); 
 
//дочерние узлы по селектору
var lists2 = $('li').children('.submenu');
lists2.each(function(index, elem){
    console.log(elem.innerHTML);
});  
$(function(){
    var list = $('li').closest('ul.submenu');
    list.each(function(index, elem){
        console.log(elem.innerHTML);
    });
});
var lists = $('li.punkt1').next();
lists.each(function(index, elem){
    console.log(elem.innerHTML);
});
// без селектора
var lists = $('li.punkt1').nextAll();
lists.each(function(index, elem){
    console.log(elem.innerHTML);
});
 
// c селектором
var lists1 = $('li.punkt1').nextAll('.punkt3');
lists1.each(function(index, elem){
    console.log(elem.innerHTML);
});
var lists = $('li.punkt1').nextUntil('li.punkt3');
lists.each(function(index, elem){
    console.log(elem.innerHTML);
});
JS
);