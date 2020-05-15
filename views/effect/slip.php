<?php
/* @var $this yii\web\View */
$this->title = 'Эффекты скольжения';
?>

    <button id="slideUp">Скрыть</button>
    <button id="slideDown">Раскрыть</button>

<?php
$this->registerJs(<<<JS
/*$(function() {
    $('#slideUp').click(function(){
         $(this).slideUp();
    });
    $('#slideDown').click(function(){
         $('#slideUp').slideDown();
    });
})*/
$(function() {
    $('#slideUp').click(function(){
         $(this).slideToggle('slow');
    });
    $('#slideDown').click(function(){
         $('#slideUp').slideToggle(2000);
    });
});
JS
);
