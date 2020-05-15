$('input[name="name"]').keyup(function () {
    var value = $(this).val();
    $('input[name="submit"]').val(value);
});
$('form').submit(function () {
    alert('Отправлено');
});
//$('form').css({'display':'none'});
$('form').show(1000).delay(5000).hide(1000);
//$('#jj').animate({'width':'50px'},2000);
$('#jj').fadeOut();

//alert($('input[name="name"]').attr('value'));
//alert($('.first').data('id'));

/*$(window).resize(function () {
var width = $(this).width();
console.log(width);
});*/
$(window).scroll(function () {
    var height = $(this).height();
    console.log(height);
});
$('h1').addClass('red');
$('h1').click(function () {
    $(this).toggleClass('blue');

 /*   $(this).on('click', function () {
        $(this).removeClass('blue');
    })*/

})

var text = $('.text').text();
//console.log(text);

$('.text').text('Новый текст');

console.log($('ul').html());

$('ul').append('<li>Новая строка</li>');
$('ul').prepend('<li>Первая строка</li>');
$('ul').after('<span>Hello</span>');
$('ul li:last-child').after('<li>1/1</li>');
$('ul li:nth-child(2)').after('<li>2/2</li>');

$('form').wrap('<div class="blue"></div>')
$('form').unwrap();




