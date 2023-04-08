$(document).ready(function(){
$("body").on("click", "#register", function() {
        var dni = $("#dni").val();
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var curso = $("#curso").val();
        var grupo = $("#grupo").val();
        var password = $("#password").val();
        var password_confirm = $("#password_confirm").val();
        var postulante = $('#postulante').is(':checked');
        $.ajax({
            method: "POST",
            url: "register_action.php",
            data: {
                dni: dni,
                nombre: nombre,
                apellido: apellido,
                curso: curso,
                grupo: grupo,
                postulante: postulante,
                password: password,
                password_confirm: password_confirm
            },
            success: function(data) {
                console.log(data);
                alert(data);
            }
        });
    });
});