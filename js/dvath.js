// JavaScript Document
var $j = jQuery.noConflict();

function isMobile() {
    return $j(window).width() < 1000;
}

var calculateMenu = function() {
    var sizeMenu = $j('.menuPrincipal li').size();
    var liWidth = 950 / sizeMenu;
    if (isMobile()) {
        liWidth = '';
    }
    $j('.menuPrincipal li').css('width', liWidth);
};

/**
 * ON RESIZE
 */
$j(window).resize(function() {
    calculateMenu();
});

/**
 * DOCUMENT READY
 */
$j(document).ready(function() {
    /*Widths Menu*/

    calculateMenu();

    //italic
    Cufon.replace('.myriad_pro_semibold_italic', { fontFamily: 'Myriad Pro Semibold Italic', hover: true });

    //regular
    Cufon.replace('.myriad_pro_regular', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('ul.menuHeader li a', { fontFamily: 'Myriad Pro Regular', lineHeight: '24px', hover: true });
    //Cufon.replace('ul.menuPrincipal li a', { fontFamily: 'Myriad Pro Regular', lineHeight: '24px', hover: true });
    //Cufon.replace('ul.subMenu li a', { fontFamily: 'Myriad Pro Regular', lineHeight: '24px', hover: true });
    Cufon.replace('.homeD h4', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('.homeD p', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('.homeBottom h4', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('.homeBottom p', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('#experiencias h2', { fontFamily: 'Myriad Pro Regular', hover: true });
    //Cufon.replace('#experiencias p', { fontFamily: 'Myriad Pro Regular',  hover: true });
    Cufon.replace('#experiencias h3', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('#hogares_ch .colRigth h5', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('#instalacion .colRigth h1', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('#limpieza .colLeft h1', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('#pananeles .colLeft h1', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('#lena .colLeft h1', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('#clima_perfecto .colLeft h1', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('h1', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('#preguntasF h3', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('.ndescr b', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('.ndescr h4', { fontFamily: 'Myriad Pro Regular', hover: true });
    //Cufon.replace('.ndescr p', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('.block_comp p', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('#comprar .legales h4', { fontFamily: 'Myriad Pro Regular', hover: true });
    Cufon.replace('.colLeft p', { fontFamily: 'Myriad Pro Regular', hover: true });

    //bold
    Cufon.replace('.myriad_pro_bold', { fontFamily: 'Myriad Pro Bold', hover: true });
    Cufon.replace('.homeD h1', { fontFamily: 'Myriad Pro Bold', hover: true });
    Cufon.replace('#limpieza .colRigth blockquote', { fontFamily: 'Myriad Pro Bold', hover: true });
    Cufon.replace('#limpieza .colCenter h4', { fontFamily: 'Myriad Pro Bold', hover: true });
    Cufon.replace('#preguntasF h4', { fontFamily: 'Myriad Pro Bold', hover: true });
});

/*****FORM****/
function validar() {
    var nombre = $j('#nombre').val();
    var apellido = $j('#apellido').val();
    var email = $j('#email').val();
    var mensaje = $j('#mensaje').val();

    $j.post('checkDatos.php', { nombre: nombre, apellido: apellido, email: email, mensaje: mensaje }, function(data) {
        if (data != 'Ok') {
            $j('#result').html(data);
            $j('#result').fadeIn('fast');
        }
        if (data == 'Ok') {
            window.location = 'gracias.php';
        }
    });

    return false;
}
