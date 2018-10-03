$(document).ready(function() {
    // Faz animação para subir
    jQuery('#btn-back-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, 300);
    })
});
