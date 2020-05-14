<?php
/* @var $this yii\web\View */
$this->title = 'Обертывание элементов. Метод wrap';
?>
    <ul class="langs">
        <li>Java</li>
        <li>C/C++</li>
        <li>PHP</li>
    </ul>

    <div class="lang">Java</div>
    <div class="lang">C/C++</div>
    <div class="lang">PHP</div>

    <ul>
        <li class="lang">Java</li>
        <li class="lang">C/C++</li>
        <li class="lang">PHP</li>
    </ul>
<?php
$this->registerJs(<<<JS
$('.langs').wrap('<div class="redStyle"></div>');
var header = document.getElementById('header');
$('.langs').wrap(header);
$('.lang').wrapAll('<div class="langs"></div>');
	
$('li.lang').wrapInner('<p></p>');
JS
);