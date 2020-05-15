<?php

/* @var $this yii\web\View */
$this->title = 'POST-запросы';
?>
    <form action="ajax.php" id="loginForm">
        <input type="text" name="login" placeholder="Логин"/><br><br>
        <input type="text" name="password" placeholder="Пароль"/><br><br>
        <input type="submit" value="Войти"/>
    </form>
    <div id="result"></div>

<?php
$this->registerJs(<<<JS
/* $("#loginForm").submit(function(event) {
            // Предотвращаем обычную отправку формы
            event.preventDefault();
            $.post('/ajax/ajax', {'login':$('#login').val(), 'password' : $('#password').val()},
                    function(data) {
                            $('#result').html(data);
                    });
            });*/

$("#loginForm").submit(function(event) {
    // Предотвращаем обычную отправку формы
    event.preventDefault();
    $.post('/ajax/ajax', $("#loginForm").serialize(),
            function(data) {
                    $('#result').html(data);
            });
    });
JS
);
