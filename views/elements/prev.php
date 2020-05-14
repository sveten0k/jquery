<?php

/* @var $this yii\web\View */
$this->title = 'Навигация по странице';
?>

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
var lists4 = $('li.punkt3').prev();
lists4.each(function(index, elem){
    console.log(elem.innerHTML);
});
// без селектора
var lists5 = $('li.punkt3').prevAll();
lists5.each(function(index, elem){
    console.log(elem.innerHTML);
});
 
// c селектором
var lists1 = $('li.punkt3').prevAll('.punkt1');
lists1.each(function(index, elem){
    console.log(elem.innerHTML);
});
var lists = $('li.punkt3').prevUntil('li.punkt1');
lists.each(function(index, elem){
    console.log(elem.innerHTML);
});
	
var lists3 = $('.punkt2').siblings();
lists3.each(function(index, elem) {
  console.log(elem.innerHTML);
  var lists6 = $('.menu').parent();
  
})
JS
);