<?php
/* @var $this yii\web\View */
$this->title = 'Замена и удаление элементов';
?>
    <ul>
        <li class="lang">Java</li>
        <li class="lang">C/C++</li>
        <li class="lang">PHP</li>
    </ul>

    <ul>
        <li class="lang">Java</li>
        <li class="lang">C/C++</li>
        <li class="lang">PHP</li>
        <li class="lang">JavaScript</li>
    </ul>

<?php
$this->registerJs(<<<JS
$('li.lang').first().replaceWith('<li class="lang">JavaScript</li>');
$('div.lang').replaceWith(function() {
        return '<li class="lang">'+$(this).text()+"</li>";
});
$('div#list').replaceWith(function() {
        return '<ol>'+$(this).html()+"</ol>";
});
$('<li class="lang">Элемент списка</li>').replaceAll('li.lang');
//$('li:even').remove();
$('li').remove(':even');
var item = $('li:first').detach();
$('ul').append(item);
$('ul').empty();
JS
);
