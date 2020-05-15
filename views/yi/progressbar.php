<?php
/* @var $this yii\web\View */
$this->title = 'Виджет progressbar';
?>
    <div id="progress"></div>
    <p><button id="getVal">Получить значение</button></p>
    <p><input type="text" id="val" /> <button id="setVal">Установить значение</button></p>
<?php
$this->registerJs(<<<JS
$(function(){
    $('#progress').progressbar({value:25});
    $('#getVal').button().click(function(){
        // получаем значение
        var val=$('#progress').progressbar('option', 'value');
        alert("Значение индикатора: "+val);
    });
    $('#setVal').button().click(function(){
        // устанавливаем значение
        var val = parseInt($('#val').val());
        if(val>100 || val<0){
            alert('Введено недопустимое значение');
        }
        else{
            $('#progress').progressbar('option', 'value', val);
        }
    });
});

JS
);

