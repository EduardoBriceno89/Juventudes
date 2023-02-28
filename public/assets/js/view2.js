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
          curp.classList.remove("is-valid");
          curp.classList.add("is-invalid");
        }else{
          curp.classList.remove("is-invalid");
          curp.classList.add("is-valid");
        }

        if( email.checkValidity() == false  || email.validity.typeMismatch){
          email.classList.remove("is-valid");
          email.classList.add("is-invalid");
        }else{
          email.classList.remove("is-invalid");
          email.classList.add("is-valid");
        }

        if(residencia.value == ""){
          residencia.classList.remove("is-valid");
          residencia.classList.add("is-invalid");
        }else{
          residencia.classList.remove("is-invalid");
          residencia.classList.add("is-valid");
        }

        if(celular.value != ""){
          celular.classList.add("is-valid");
        }

        if(nombreTutor.value != ""){
          nombreTutor.classList.add("is-valid");
        }
        //form.classList.add('was-validated')
        

    }, false)
  })
})()