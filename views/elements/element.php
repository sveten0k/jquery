<?php
/* @var $this yii\web\View */
$this->title = 'Выборка элементов';
?>

<table>
    <tr><td>Слово</td><td>Перевод</td></tr>
    <tr><td>Cabbage</td><td>Капуста</td></tr>
    <tr><td>Carrot</td><td>Морковь</td></tr>
    <tr><td>Potato</td><td>Картофель</td></tr>
    <tr><td>Tomato</td><td>Помидор</td></tr>
</table>

<?php
$this->registerJs(<<<JS
$('tr:even').css('background-color', 'silver');  
JS
);

