<?php
/* @var $this yii\web\View */
$this->title = 'Создание и добавление дочерних элементов';
?>
    <ul id="langs">
        <li>Java</li>
        <li>C/C++</li>
        <li>PHP</li>
    </ul>

<?php
$this->registerJs(<<<JS
/*
var newList=$('<ul><li>Item1</li><li>Item2</li></ul>');
console.log(newList.html());
var newList1=$('ul').first().clone();
console.log(newList1.html());*/
$('#langs').append('<li>C#</li>');
var jsItem = document.createElement('li');
jsItem.innerHTML='JavaScript';
$('#langs').append(jsItem);
var vbItem = $('<li>Visual Basic</li>');
$('#langs').append(vbItem);
$('ul#langs').prepend(function(index,html){
    return $('<li>JavaScript</li>');
});
$('<li>C#</li>').prependTo('#langs')
var list = document.getElementById('langs');
$('<li>JavaScript</li>').appendTo(list);
JS
);
