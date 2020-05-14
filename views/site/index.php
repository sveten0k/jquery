<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <button >Загрузить</button>
    <div id="news"><h3>Нет новостей</h3></div>


    <form action="/site/test" id="getInfo">
    <input id="event" placeholder="Имя события"><br>
    <input id="date" placeholder="Дата события"><br>

        <button class="btn btn-info" id="submitForm" disabled>Отправить</button>
    </form>


</div>

<?php
$this->registerJs(<<<JS

$("#getInfo").on('change, keyup', 'input', function() {
  if($("#event").val() && $("#date").val()) {
      $("#submitForm").removeAttr("disabled");
  } else {
      $("#submitForm").attr("disabled", "disabled");
  }
})

$('#submitForm').click(function(){
    $.get('/site/test', {'event':$("#event").val(), 'date':$("#date").val()}, function(data) {
      $("#news").html(data);
    });
    return false;
});

JS
);