const nombre = document.getElementById("name");
const identificacion = document.getElementById("empleadoDNI");
const correo = document.getElementById("email");
const password = document.getElementById("password");
const repeatPassword = document.getElementById("password-confirm");
const boton = document.getElementById('Registro');
var point1 = false;
var point2 = false;
var point3 = false;
var point4 = false;
var point5 = false;


  var valNom = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
  var valAp = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
  var valPass = /^.{4,12}$/; // 4 a 12 digitos.
  var valDNI = /^\d{8,10}$/;
  var valEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;


// Añadir un evento input al campo de texto
nombre.addEventListener("input", function() {
  // Obtener el valor ingresado
  var valor = nombre.value;
  // Si el valor no cumple con la expresión regular, deshabilitar el botón y mostrar el error
  if (valor=="") {
    mostrarEmotic("error", "🌩️");
    mostrarMensajeError("empleadoName","Ingrese un nombre");
  }else if(!valNom.test(valor)){
    mostrarEmotic("error", "🤦‍♂️");
    mostrarMensajeError("empleadoName","Error de ingreso");
  } else {
    // Si cumple, habilitar el botón y ocultar el error
    mostrarEmotic("error", "😁");
    mostrarMensajeError("empleadoName","");
    point1 = true;
    if(point1 && point2 && point3 && point4 && point5) boton.disabled = false
  }
});

correo.addEventListener("input", function() {
  var valor = correo.value;
  if (valor=="") {
    mostrarEmotic("error", "🌩️");
    mostrarMensajeError("empleadoEmail","Ingrese un correo");
  }else if(!valEmail.test(valor)){
    mostrarEmotic("error", "🤦‍♂️")
    mostrarMensajeError("empleadoEmail","Error de ingreso")
  } else {
    // Si cumple, habilitar el botón y ocultar el error
    mostrarEmotic("error", "😁");
    mostrarMensajeError("empleadoEmail","");
    point2 = true;
    if(point1 && point2 && point3 && point4 && point5) boton.disabled = false
  }
});

password.addEventListener("input", function() {
  var valor = password.value;
  if (valor=="") {
    mostrarEmotic("error", "🌩️")
    mostrarMensajeError("password","Ingresa una contraseña")
  }else if(!valPass.test(valor)){
    mostrarEmotic("error", "🤦‍♂️")
    mostrarMensajeError("password","Tamaño de 4 a 12 caracteres")
  } else {
    // Si cumple, habilitar el botón y ocultar el error
    mostrarEmotic("error", "😁");
    mostrarMensajeError("password","");
    point3 = true;
    if(point1 && point2 && point3 && point4 && point5) boton.disabled = false
  }
});

repeatPassword.addEventListener("input", function() {
  let valor1 = password.value;
  let valor2 = repeatPassword.value;
  if (valor2=="") {
    mostrarEmotic("error", "🌩️")
    mostrarMensajeError("repeatPassword","Repite la contraseña")
  }else if(valor2 != valor1){
    mostrarEmotic("error", "🤦‍♂️")
    mostrarMensajeError("repeatPassword","La contraseña no coincide")
  }else{
    mostrarEmotic("error", "😁");
    mostrarMensajeError("repeatPassword","");
    point4 = true;
    if(point1 && point2 && point3 && point4 && point5) boton.disabled = false
  }
});

identificacion.addEventListener("input", function() {
  // Obtener el valor ingresado
  var valor = identificacion.value;
  // Si el valor no cumple con la expresión regular, deshabilitar el botón y mostrar el error
  if (valor=="") {
    mostrarEmotic("error", "🌩️");
    mostrarMensajeError("empleadoDNI","Ingrese un DNI");
  }else if(!valDNI.test(valor)){
    mostrarEmotic("error", "🤦‍♂️");
    mostrarMensajeError("empleadoDNI","Error de ingreso");
  } else {
    // Si cumple, habilitar el botón y ocultar el error
    mostrarEmotic("error", "😁");
    mostrarMensajeError("empleadoDNI","");
    point5 = true;
    console.log(point1, point2, point3, point4, point5);
    if(point1 && point2 && point3 && point4 && point5) boton.disabled = false
  }
});


function mostrarEmotic(id, mensaje) {
  let elemento = document.getElementById(id);
  elemento.innerHTML = mensaje;
}

function mostrarMensajeError(claseInput, mensaje) {
  let elemento = document.querySelector(`.${claseInput}`);
  elemento.lastElementChild.innerHTML = mensaje;
}

/*
form.addEventListener("submit", (e) => {
  e.preventDefault();
  let condicion = validacionForm();
  if (condicion) {
    enviarFormulario();
  }
});

function validacionForm() {
  form.lastElementChild.innerHTML = "";
  let condicion = true;
  listInputs.forEach((element) => {
    element.lastElementChild.innerHTML = "";
  });

  condicion = validacionNombre();
  condicion = validacionApellido();
  condicion = validacionEmail();
/*
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}*/
  
  /*if (
    celular.value.length != 9 ||
    celular.value.trim() == "" ||
    isNaN(celular.value)
  ) {
    mostrarMensajeError("mobile", "Celular no valido*");
    condicion = false;
  }*/
/*
condicion = validacionPassword();
condicion = validacionRepPass();
  /*if (!terminosYcondiciones.checked) {
    mostrarMensajeError("termsAndConditions", "Acepte*");
    condicion = false;
  } else {
    mostrarMensajeError("termsAndConditions", "");
  }
  */
/*
  return condicion;
}

function mostrarMensajeError(claseInput, mensaje) {
  let elemento = document.querySelector(`.${claseInput}`);
  elemento.lastElementChild.innerHTML = mensaje;
}

function enviarFormulario() {
  form.reset();
  form.lastElementChild.innerHTML = "Listo !!";
}

function validacionNombre() {
    const valNom = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
    if (nombre.value.trim() === "") {
        mostrarMensajeError("txtNombre", "*Ingrese un nombre");
        condicion = false;
      }else if(!valNom.test(nombre.value)){
        mostrarMensajeError("txtNombre", "*Formato no adecudado");
        condicion = false;
      }
      return condicion;
}

function validacionApellido(){
    const valAp = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
    if (apellidos.value.trim() === "") {
        mostrarMensajeError("txtApellido", "*Ingrese su apellido");
        condicion = false;
      }else if(!valAp.test(apellidos.value)){
        mostrarMensajeError("txtApellido", "*Formato no adecudado");
        condicion = false;
      }
      return condicion;
}

function validacionEmail() {
    const valEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    if (correo.value.trim() === "") {
        mostrarMensajeError("txtEmail", "*Ingrese su correo");
        condicion = false;
      }else if(!valEmail.test(correo.value)){
        mostrarMensajeError("txtEmail", "*Formato no adecudado");
        condicion = false;
      }
      return condicion;
}

function validacionPassword() {
    const valPass = /^.{4,12}$/;
    if (password.value.trim() === "") {
        mostrarMensajeError("txtPassword", "*Ingrese una contraseña");
        condicion = false;
      }else if(!valPass.test(password.value)){
        mostrarMensajeError("txtPassword", "*Formato no adecudado");
        condicion = false;
    }
    return condicion;
}

function validacionRepPass(){
    if (repeatPassword.value != password.value) {
        mostrarMensajeError("txtRepetirPassword", "Las contraseñas no coinciden");
        condicion = false;
    }
    return condicion;
}
*/