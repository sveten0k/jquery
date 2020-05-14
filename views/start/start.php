<?php
/* @var $this yii\web\View */
$this->title = 'Мир jQuery';
?>

<h2>Добро пожаловать в мир jQuery</h2>
<button id="btn1">jQuery</button>
<button id="btn2" onclick="alert('Мир JavaScript'); ">JavaScript</button>

<h2>Словарь</h2>
<table id="tab">
<tr class="tabhead"><td><p>Слово</p></td><td><p>Перевод</p></td></tr>
<tr><td><p>table</p></td><td><p>таблица</p></td></tr>
<tr><td><p>apple</p></td><td><p>яблоко</p></td></tr>
</table>

    <div id="menu">
        <a href="m.tml" class="redStyle">Ссылка на сайт</a>
    </div>

    <div id="menu">
    <p><a href="1.html" class="open">Ссылка 1</a></p>
    <p><a href="2.html" class="open">Ссылка 2</a></p>
</div>
<p><a href="3.html" class="open">Ссылка 3</a></p>

<?php
$this->registerJs(<<<JS
$('#btn1').bind('click', function(){
        $(this).css('background-color', 'red');
            alert('Мир jQuery');
    });
$('#tab .tabhead').css('background-color', 'silver');
$('div#menu a.redStyle').css('color', 'green');
$(".open", "div#menu").css('background-color', 'silver');
JS
);




