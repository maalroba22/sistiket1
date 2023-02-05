$(document).on('click', '#btn_soporte', function (e) {
    e.preventDefault();

    if ($('#rol_id').val() == 1) {
        $('#lb_titulo').html('Acceso soporte')
        $('#btn_soporte').html('Acceso Usuario')
        $('#rol_id').val(2)
    } else {
        $($('#lb_titulo')).html('Acceso Usuario')
        $('#btn_soporte').html('Acceso Soporte')
        $('#rol_id').val(1)
    }

})