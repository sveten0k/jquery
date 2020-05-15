<?php
/* @var $this yii\web\View */
$this->title = 'Изменение стилей CSS';
?>
    <div>
        <a href="1.html" id="link1">Ссылка</a>
        <ul>
            <li>Java</li>
            <li>C/C++</li>
            <li>PHP</li>
        </ul>
    </div>
    <style>
        .redStyle {
            color: red;
        }
    </style>

    <button class="redStyle">Переключить стиль</button>
    <script type="text/javascript">

    </script>

<?php
$this->registerJs(<<<JS
console.log($('body').css('font-size'));
	
$('a').css('font-weight', 'bold');
$('a').css('color', function(index, oldValue){
        if(oldValue=='rgb(0, 0, 238)')
        {return 'red';}
        else
        {return 'green';}
    });

1
$('a').css({'color':'red', 'cursor':'pointer', 'font-size': '14px'});
	
$('a').css({'font-size': '-=1', 'margin-left': '+=10'});
var div = $('div').first();
var newWidth=div.width()+150;
div.width(newWidth);
var newHeight = div.height()+50;
div.height(newHeight);
$('ul').first().addClass("redStyle");
// добавление двух классов
$('div').first().addClass("black visible");

if($('ul').first().hasClass("redStyle")){
    console.log('Список содержит класс redStyle');
}
else{
    console.log('Список не содержит класс redStyle');
}
$(function(){
    $('button').click(function(){
        $(this).toggleClass("redStyle");
            })
        });
       
JS
);

