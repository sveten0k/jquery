//$('*').css({'color':'grey'});
$('h1.first').css({'color':'red'});
$('h1#second').css({'color':'green'});
$('ul li:last').css({'color':'red'});
$('ul li:even').css({'color':'black'});
$('ul li:nth-child(2)').css({'color':'blue'});

var id = $('h1').data('id');
console.log(id);
var name = $('h1').data('name');
console.log(name);

$('h2[title = "test-word"]').css({'color':'blue'});

$('h2:contains("Hello")').css({'color':'orange'});
$('ul li:has("span")').css({'color':'pink'});
$('ul li:parent').css({'color':'turquoise'});
$('table tr td:parent').css({'background':'red'});

/*$('button').click(function () {
alert('test');
})*/
$('button').on('click',function () {
    alert('test2');
})
