$(document).ready(function () {
    $('#tick_descrip').summernote({
      height: 150
   }) 
   get_AllCateorias()
});

const url = '../controller/nuevoTiket.php'
function get_AllCateorias() {
   $.ajax({
      type: "POST",
      url,
      data: { opcn: 'getAll_categorias' },
      dataType: "json",
      success: function (response) {
         let data = response.map(el => {
            return `
            <option value="1">${el.nombre}</option>
            `
         })
         $('#categoria_id').html(data)
      }
   });
}

/* guardar datos  */
$("#ticket_form").submit(function (e) {
   e.preventDefault();
   var data = $("#ticket_form").serializeArray()
   data.push({
      name:'opcn',
      value:'addTiket'
   })
   
   $.ajax({
      type: "POST",
      url,
      data,
      dataType: "json",
      success: function (response) {
         console.log(response)
         if ($('#tick_descrip').summernote('isEmpty') || $('#tick_titulo').val()==''){
            swal("Advertencia!", "Campos Vacios", "warning")
            return
         }
         swal({
            title: "Exito!",
            text: "Ticket Guardado Correctamente!",
            type: "success",
            confirmButtonClass: "btn-success",
            confirmButtonText: "Aceptar",
            showConfirmButton: false,
         timer: 1500
         });
                  
      

      }
   });




});