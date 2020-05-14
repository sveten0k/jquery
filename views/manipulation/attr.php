<?php
/* @var $this yii\web\View */
$this->title = 'Атрибуты и свойства элементов';
?>

<a href="1.html" id="link1">Ссылка</a>



<?php
$this->registerJs(<<<JS
$(function(){
        var ahref=document.getElementsByTagName('a')[0]
    console.log(ahref.id); // выведет link1
});
$('a').first().prop('href','33.html');
$('a').first().removeProp('href');
$('a').each(function(index,elem){
    console.log($(elem).prop('href'));
});
JS
);

