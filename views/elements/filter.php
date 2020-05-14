<?php
/* @var $this yii\web\View */
$this->title = 'Выборка элементов';
?>

<table>
    <tr class="header"><td>Слово</td><td>Перевод</td></tr>
    <tr><td>Cabbage</td><td>Капуста</td></tr>
    <tr><td>Carrot</td><td>Морковь</td></tr>
    <tr><td>Potato</td><td>Картофель</td></tr>
    <tr><td>Tomato</td><td>Помидор</td></tr>
</table>

<?php
$this->registerJs(<<<JS
$(function(){
    //Фильтрация по селектору
    var array = $(".header").filter("tr");
    array.css('background-color', 'silver');
     
    // Фильтрация по элементу html
    var elem = document.getElementsByTagName("tr")[0];
    var array1 = $(".header").filter(elem);
    array1.css('background-color', 'silver');
});
/*
$(function(){
    var array = $("tr").filter(function(){
        if($(this).hasClass("header")) { return true;}
        else {return false;}
    });
    array.css('background-color', 'silver');
});*/
$(function(){
    var array = $("tr").not(function(){
        if($(this).hasClass("header")) { return true;}
        else {return false;}
    });
    array.css('background-color', 'silver');
});
/*
$(function(){
    var array = $("tr").slice(1,4);
    array.css('background-color', 'yellow');
});*/
$(function(){
    var array = $("tr").slice(3);
    array.css('background-color', 'yellow');
});
JS
);
