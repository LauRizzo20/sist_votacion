$(document).ready(function () {
    $("#conf").click(function () {
        
      var ano = $("#ano").val();
      var curso = $("#curso").val();
      var grupo1 = $("#grupo1").val();
      var grupo2 = $("#grupo2").val();
      
      if (ano == '' || curso == '') {
        alert("Por favor llene todos los campos");
        return false;
      } else if (ano <= 2 || curso <= 2 || grupo1 <= 4 || grupo2 <= 4) {
        alert("Cantidad de caracteres erronea");
        return false;
      }

      $.ajax({
        type: "POST",
        url: "carga.php",
        data: {ano,curso,grupo1,grupo2},
        cache: false,
        success: function (e) {
            if (e == 'ok') {
                console.log(e);
                window.location.reload();
            } else {
                alert('Error, vuelva a intentarlo');
                window.location.reload();
            }
        },
        error: function (xhr, status, error) {
          alert('Oh! ha ocurrido un error');
          console.error(xhr);
        }
      });
    });
  });