<?php
/* @var $this yii\web\View */
$this->title = 'Содержимое элементов';
?>
    <div class="header">Заголовок</div>
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
    <input type="text" value="Введите значение"/>
<?php
$this->registerJs(<<<JS
// получение разметки для элемента списка и вывод ее в консоль
var html = $('li.punkt2').html();
console.log(html);
     
// установка новой разметки элемента списка
$('li.punkt1').html("Пункт 1 <ul class='submenu'><li>Подпункт 1.1</li></ul>")
var oldHtml = $('div.header').html();
$('div.header').html(oldHtml+"<p> Новый параграф</p>")

var oldText = $('div.header').text();
console.log(oldText);
$('div.header').text("Название статьи");
/*
$('div').first().text(function(index,oldValue){
    console.log("Старый текст: " +oldValue);
    return "Новый текст";
});*/
$(function(){
    // получение значения текстового поля
    var oldValue = $('input[type="text"]').val();
    console.log(oldValue);
     
    $('input[type="text"]').first().val("Введите логин");
     
    // использование функции для установки значения
    $('input[type="text"]').first().val(function(index,oldValue){
        console.log("Старое значение: " +oldValue);
        return "Введите пароль";
    });
});
JS
);
