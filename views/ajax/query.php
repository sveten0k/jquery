<?php

/* @var $this yii\web\View */
$this->title = 'Подгрузка скриптов';
?>
    <button>Загрузить</button>
    <div id="result"></div>

    <form action="jax.php" id="loginForm">
        <input type="text" name="login" placeholder="Логин"/><br><br>
        <input type="text" name="password" placeholder="Пароль"/><br><br>
        <input type="submit" value="Войти"/>
    </form>
    <div id="result"></div>

<?php
$this->registerJs(<<<JS
$(function(){
    $('button').click(function(){
        $.ajax('/ajax.php', {success: function(data){
                $('#result').html(data);
            }
        });
    });
});
$(function(){
    $("#loginForm").submit(function(event) {
        event.preventDefault();
        $.ajax({    
            url: $("#loginForm").attr('action'),
            data: $("#loginForm").serialize(),
            type: 'POST',
            success: function(data){
                    $('#result').html(data);
            }
        });
    });
});
JS
);
