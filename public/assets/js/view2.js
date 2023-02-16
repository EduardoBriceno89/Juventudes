const curp = document.getElementById("inpCurp");
const nombreTutor = document.getElementById("inpNombreTutor");
const residencia = document.getElementById("selResidencia");
const email = document.getElementById("inpEmail");
const celular = document.getElementById("inpCelular");


(function () {
    'use strict'
  
    
    
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        console.log(form);
        form.addEventListener('submit', function (event) {
          console.log(event);
          
          event.preventDefault()
          event.stopPropagation()
          
          if(curp.checkValidity() == false){
            curp.classList.add("is-invalid");
          }

          if( email.checkValidity() == false  || email.validity.typeMismatch){
            email.classList.add("is-invalid");
          }

          if(nombreTutor.value != ""){
            nombreTutor.className += " is-valid";
          }
          //form.classList.add('was-validated')
          

        }, false)
    })
})()