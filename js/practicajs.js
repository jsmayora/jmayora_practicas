$(document).ready(function(){

// alertify.success("Dentro de tbl");
	// alertify.alert("Dentro de tbl");
// Sintaxis de los selectores
	// Estructura de llamada
	$('p').css("color","blue");
	$('#pie').css("border","2px solid black");
	$('.adv').css("color","red");


// alertify.alert($('#especial tbody tr:first').length + '\nelementos!');

// Proiedades de estilo
var fontSize = $('#celebs tbody tr:first').css('font-size');
// alertify.alert(fontSize);



/*Cambio de proiedades*/
	// $('#celebs tbody tr:even').css('background-color', '#adddddd');

// combinar las dos acciones en la misma llamada a la funcioncss:
$('#celebs tbody tr:even').css({

	'background-color': '#adddddd',
	'color': '#666666',
	'font-size': '11pt',
	'line-heigth':'2.5em'
});

$('#celebs tr:even').addClass('cebra');


/*Esconde elementos con hide*/
$('#btnEsconder').click(function(){
	$('#condicionDuso').hide();

});


	//Manejo de Eventos
		// Valor this

		$('#hideButton').click(function(){

			$(this).hide();

		});

// Mostrar elementos escondidos
$('#btnMostrar').click(function(){
	$('#condicionDusos').show();
});

// Mostrar y esconder un boton
$('#btnCambiante').click(function(){

	if ($('#dedo').is(':visible')) {

		$('#dedo').hide();

	} else {
		$('#dedo').show();
	}

});


// Cambiar entre visible  e invisible con toggle
$('#toggle').click(function(){

	// var alertp= ;
	$('#psp').toggle();

	// alert("funcionando" +' ' +alertp);
});

// Cambiar entre visible  e invisible 2 is(), hide(),this,val() y slow()
$('#btn_cambiar').click(function(){

	if ($('#condDuso').is(':visible')) {
		$('#condDuso').hide();
		$(this).val('Esconder');
	} else {
		$('#condDuso').show();
		$(this).val('Mostrar');
	}

});

// Agregar Elemontos
$('<p>¡Un nuevo párrafo</p>').addClass('nuevo').insertAfter('#ptr_btn ');

// Insertar el boton esconder o mostrar las acciones de uso
$('<input type="button" value="cambiar" id="btn_cmbnt" class="btn btn-info">').insertAfter('#btn_cndDuso');

$('#btn_cmbnt').click(function(){

	$('#condDuso_ds').toggle();
	// $(this).val('Oculto');
});

// Eliminar un elemento
$('#sin-script').remove();

// Eliminar los tr que contienen la palabra cantante de la tbl "celebs"
$('#celebs tr').remove(':contains("cantante")');


// Modificación de elementos
$('p#pt').html('¡<strong>Adios,</strong> párrafo crueles!');

$('h2').text('Todos lo titulos nos pertenecen');

// alert($('h2:first').text());
// $("#rmv").remove(.css("color"));

// Animaciones basicas
// Desvanecimiento
// Uso de fadeIn y fadeOu
//
$("#btns_esndr").click(function(){
	// $('#cnd_D_uso').fadeOut();
	// $('#cnd_D_uso').toggle('slow');
	$('#cnd_D_uso').slideToggle(slow);
});

$("#flip").click(function() {
	/* Act on the event */
	$("#panel").fadeOut();
// alert(ver);
});


// Funciones de retorno de llamada (callbacks)
$("#btn_txt").click(function(){
	$("#panel_div").slideToggle(
		'slow',
		function(){
			alert('¡Ya termino de deslizat!');
		});
});

// $('#celebs tr').removeClass("cebra");
// Aplicar sobre vuelo a los "#celebs tbody tr" de la tbl
// Sobrevuelo (hover)
// Forma 1
// $("#celebs tbody tr").hover(
// 	function() {
// 		/* Stuff to do when the mouse enters the element */
// 		$(this).addClass("sobreVueloCebra");
// 	},
// 	function() {
// 		/* Stuff to do when the mouse leaves the element */
// 		$(this).removeClass("sobreVueloCebra");
// 	});


// Forma 2 se activa cunado se hace click en una fila de la lista
$('#celebs tbody tr').click(function(){
	$(this).toggleClass("sobreVueloCebra");
});


//  Respuesta escondida
$('.revelacion').hide();

$('<span class="revelado">¡Quiero saber!</span>').insertBefore('.revelacion');
$('.revelado').click(function() {
	$(this).hide();
	$(this).next().fadeIn();
	/* Act on the event */
});





















});
