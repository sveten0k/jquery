<?php
/* @var $this yii\web\View */
$this->title = 'Выборка элементов';
?>

    <table>
        <tr class="tabhead">
            <td>Слово</td>
            <td>Перевод</td>
        </tr>
        <tr>
            <td>Cabbage</td>
            <td>Капуста</td>
        </tr>
        <tr>
            <td>Carrot</td>
            <td>Морковь</td>
        </tr>
        <tr>
            <td>Potato</td>
            <td>Картофель</td>
        </tr>
        <tr>
            <td>Tomato</td>
            <td>Помидор</td>
        </tr>
    </table>

<?php
$this->registerJs(<<<JS
$('tr:even').css('background-color', 'silver');  

$(function(){
    var array = $("tr:even");
    for(var i=0;i<array.length;i++){
        console.log(i.toString()+". " +array[i].innerHTML);
    }
});
$(function(){
    var array = $("tr:even");
    array.eq(1).css('background-color', 'yellow');
    array.eq(-1).css('background-color', 'yellow');
});
$(function(){
    var array = $("tr:even");
    var firstEl = array.first();
    console.log("Первый элемент: " + firstEl.html());
    var lastEl = array.last();
    console.log("Последний элемент: " + lastEl.html());
});
$(function(){
    $("tr:even").each(function(index, elem){
        console.log(index + ". " + elem.innerHTML);
    });
});
$(function(){
    var array = $("tr:even");
    var firstEl = array.first();
    var index = array.index(firstEl);
    console.log(index); //выведет 0
});
$(function(){
    var array = $("tr");
    var index = array.index($("tr.tabhead"));
    console.log(index);
});
$(function(){
    var array = $("tr:even");
    console.log(array.selector); //выведет tr:even
});
$(function(){
    var array = $("tr:even").add("tr:odd:first");
    //данное выражение эквивалентно следующему
    // var array = $("tr:even, tr:odd:first");
});
JS
);

