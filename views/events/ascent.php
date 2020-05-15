<?php

/* @var $this yii\web\View */
$this->title = 'Всплытие событий';
?>
    <body>
    <div>
        <button>Жми</button>
    </div>
    </body>

<?php
$this->registerJs(<<<JS
$('button').bind('click', function(e){
    console.log('Событие инициировал элемент ' + e.target.tagName);
    console.log('Событие обрабатывается для элемента ' + e.currentTarget.tagName);
    e.stopPropagation();
});
$('div').bind('click', function(e){
        console.log('Событие инициировал элемент ' + e.target.tagName);
        console.log('Событие обрабатывается для элемента ' + e.currentTarget.tagName);
    });
    $('body').bind('click', function(e){
        console.log('Событие инициировал элемент ' + e.target.tagName);
        console.log('Событие обрабатывается для элемента ' + e.currentTarget.tagName);
    });

JS
);
