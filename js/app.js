$(document).ready(function () {
    $("#conf").click(function () {
        
      var ano = $("#ano").val();
      var curso = $("#curso").val();
      var grupo1 = $("#grupo1").val();
      var grupo2 = $("#grupo2").val();
      
      if (ano == '' || curso == '') {
        alert("Por favor llene todos los campos");
        return false;
      }

      $.ajax({
        type: "POST",
        url: "carga.php",
        data: {ano,curso,grupo1,grupo2},
        cache: false,
        success: function (e) {
            /* Fix this shit */
            if (e == 'okok') {
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