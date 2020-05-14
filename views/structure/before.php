<?php
/* @var $this yii\web\View */
$this->title = 'Добавление сестринских элементов';
?>
    <ul>
        <li class="lang">Java</li>
        <li class="lang">C/C++</li>
        <li class="lang">PHP</li>
    </ul>


<?php
$this->registerJs(<<<JS
$('li.lang').first().before('<li class="lang">JavaScript</li>');
var vbItem = document.createElement('li');
vbItem.innerHTML='Visual Basic';
$('li.lang').first().before(vbItem);
$('li.lang').last().after('<li class="lang">JavaScript</li>');
$('li.lang').last().after($('li.lang').last().clone().html('Visual Basic'));
$('<li class="lang">C/C++</li>').insertBefore('li.lang:first');
$('<li class="lang">PHP</li>').insertAfter('li.lang:last');
JS
);
