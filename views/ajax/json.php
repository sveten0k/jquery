<?php

/* @var $this yii\web\View */
$this->title = 'Получение данных JSON';
?>
    <select id="countries">
        <option disabled>Выберите страну</option>
    </select>

    <table id="users">
        <tr>
            <td>Id</td>
            <td>Имя</td>
            <td>Возраст</td>
        <tr>
    </table>

<?php
$this->registerJs(<<<JS
$(function(){
    $.getJSON('/countries.json', function(data) {
                $.each(data, function(key, val) {
                    $('#countries').append('<option value="' + val + '">' + key + '</option>');
                });
    });
});
$(function(){
    $.getJSON('/users.json', function(data) {
            for(var i=0;i<data.users.length;i++){
                $('#users').append('<tr><td>' + data.users[i].id + '</td><td>' + data.users[i].name + 
                '</td><td>' + data.users[i].age + '</td><tr>');
            }
    });
});
JS
);

