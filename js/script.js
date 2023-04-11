$(document).on('click','.btn-check', function(){
      let elemento = $(this)[0].parentElement.parentElement;
      let id =$(this).attr('id');
     // console.log(id);
      //console.log($(this).is(":checked"));
        
  
      const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
         checkbox.addEventListener('click', function() {
           const checked = document.querySelectorAll('input[type="checkbox"]:checked');
              if (checked.length > 1) {
                 swal({
                       title: "Error",
                       text: "seleccione una sola opcion",             
                       icon: "error",
                       button: "aceptar",
                       });
                 this.checked = false;
              }
         });
     });
      
   })
  
   
   $(document).on('click','#botonV', function(){
       let id1 = '';
       $( ".btn-check" ).each(function( i ) {
         if($(this).is(":checked")){
            id1=$(this).attr('id');
         };
        
       });
  
      if (id1 == '') {
         swal({
            title: "Error",
            text: "Por favor, seleccione una opcion",             
            icon: "error",
            button: "aceptar",
          });
        //alert("Por favor llene todos los campos");
        return false;
    }  
  
  
      $.ajax({
        type: "POST",
        url: "vote_action.php",
        data: {id1},
        cache: false,
        success: function (e) { 
        //alert(e)
         swal({
            title: "Voto",
            text: "Votacion completeda",             
            icon: "success",
            button: "aceptar",
          });
          window.location = 'lobby.html';
        },
        error: function (xhr, status, error) {
        console.error(xhr);
        swal({
            title: "Error",
            text: "Oh! ha ocurrido un error",             
            icon: "error",
            button: "aceptar",
          });
        }
    });
   
  
   })
  