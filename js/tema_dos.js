$(document).ready(function(){

// activando js
// alert("js activo");

// $('p').animate({
//     padding: '20px',
//     borderBotton: '3px solid #8f8f8f',
//     borderRigth: '3px solid #bfbfbf'
// },2000);


$('#navegation li').hover(
    function(){
        $(this).animate({paddingLeft: '+=15px'},200);
    },
    function(){
        $(this).animate({paddingLeft: '-=15px'},200);
    });

$('#condicionDuso li').animate({
    opacity: 'hide',
    height: 'hide'

}, 'slow');

$('#div_q').animate({
    backgroundColor: '#ff9f5f'
}, 2000);


// Facilitación (Easing)
//  aplicando animate a la primera "first" etiqueta p
//  $('p:first')
$('#textp').toggle(
    function(){
        $(this).animate({'heigth': '+=150px'}, 1000,'linear');
    },
    function(){
        $(this).animate({'height': '-=150px'}, 1000, 'swing');
    });

// $('p:first').animate({
//     backgroundColor: '#ff9f5f'
// }, 2000);

// $('p:first').animate({'height': '+=300px'}, 2000, 'easeOutBounce');
// $('p:first').animate({'height': '-=300px'}, 2000, 'easeInOutExpo');
// $('p:first').animate({'height': 'hide'}, 2000, 'easeOutCirc');
// $('p:first').animate({'height': 'slow'}, 2000, 'easeOutElastic');


$('#tptp').animate({
    backgroundColor: '#ff9f5f'
}, 2000);

$('#tptp').animate({'height': '+=300px'}, 2000, 'easeOutBounce');
$('#tptp').animate({'height': '-=300px'}, 2000, 'easeInOutExpo');
$('#tptp').animate({'height': 'hide'}, 2000, 'easeOutCirc');
$('#tptp').animate({'height': 'slow'}, 2000, 'easeOutElastic');




// Contenidos expansibles.
$('#bio > div').hide();
$('#bio > div:first').show();

//  Animación
$('#bio h3').click(function(){
    $(this).next().animate({'height': 'toggle'}, 'slow', 'easeOutBounce');
});


});
