function deleteButtons() {
      var buttons = document.querySelectorAll("#Eliminar");
      buttons.forEach(function(button) {
         button.addEventListener("click", function() {
            var id = this.getAttribute("data-id");
            // Envía una solicitud de eliminación al archivo eliminar.php con el id del paciente como parámetro
            window.location.href = "eliminar.php?idPacientes=" + id;
         });
      });
   }

function validateForm() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
}

function load() {
    deleteButtons();
}

document.addEventListener("DOMContentLoaded", load, false);