<?php
/* @var $this yii\web\View */
$this->title = 'Мир jQuery';
?>


<h2>Добро пожаловать в мир jQuery</h2>
<button id="btn1">jQuery</button>
<button id="btn2" onclick="alert('Мир JavaScript'); ">JavaScript</button>

<?php
$this->registerJs(<<<JS
$('#btn1').bind('click', function(){
        $(this).css('background-color', 'red');
            alert('Мир jQuery');
    });
JS
);

