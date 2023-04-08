$(document).ready(function(){
    $("body").on("click", "#login", function() {
            var dni = $("#dni").val();
            var password = $("#password").val();
            $.ajax({
                method: "POST",
                url: "login_action.php",
                data: {
                    dni: dni,
                    password: password
                },
                success: function(data) {
                    console.log(data);
                    alert(data);
                }
            });
        });
    });