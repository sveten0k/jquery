<?php
/* @var $this yii\web\View */
$this->title = 'Атрибуты и свойства элементов';
?>

    <!--<a href="1.html" id="link1">Ссылка</a>-->

    <ul data-year="2010" data-description="lang">
        <li>Java</li>
        <li>C/C++</li>
        <li>PHP</li>
    </ul>

<?php
$this->registerJs(<<<JS
/*$(function(){
        var ahref=document.getElementsByTagName('a')[0]
    console.log(ahref.id); // выведет link1
});
$('a').first().prop('href','33.html');
$('a').first().removeProp('href');
$('a').each(function(index,elem){
    console.log($(elem).prop('href'));
});*/
/*$('a').each(function(index,elem){
    console.log($(elem).attr('href'));
});
	
$('a').first().attr('href','33.html');
	
$('a').first().removeAttr('href');
	*/
	
$('ul').first().data('year', '2012');
	
$('ul').first().data('lang', { rate: "tiobe", year: 2012 });
JS
);

