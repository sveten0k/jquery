<?php
/* @var $this yii\web\View */
$this->title = 'Создание и добавление дочерних элементов';
?>


<?php
$this->registerJs(<<<JS
var newList=$('<ul><li>Item1</li><li>Item2</li></ul>');
console.log(newList.html());
JS
);
