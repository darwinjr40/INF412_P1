const formulario = document.getElementById('personal');
const inputs = document.querySelectorAll('#personal input');
// alert("hola a java scrip");

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    ci: /^[a-zA-Z0-9\_\-]{4,16}$/,
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // letras, espacios y puede llevar acentos(minimo 1 y maximo 40 caracteres).
	password: /^.{4,12}$/, // 4 a 12 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, //El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.
	telefono: /^\d{7,14}$/, // El telefono solo puede contener entre 7 y 14 dígitos.
    domicilio: /^.{5,50}$/, // El domicilio puede contener entre 5 y 50 caracteres.
}

const campos ={
    usuario: false,
    ci: false,
	nombre: false, 
	password: false, 
	email: false,
	telefono: false 
}


const validarFormulario = (e) => {
    var a = e.target.name; 
    //  alert(expresiones.usuario.test(e.target.value));
    if (a == "ci"){
        validarCampo(expresiones.ci, e.target.value, 'ci' )
    } else if (a == "nombre"){
        validarCampo(expresiones.nombre, e.target.value, 'nombre' )
    } else if (a == "sexo"){
    } else if (a == "telefono"){
        validarCampo(expresiones.telefono, e.target.value, 'telefono' )
    } else if (a == "email"){
        validarCampo(expresiones.email, e.target.value, 'email' )
    } else if (a == "domicilio"){
        validarCampo(expresiones.domicilio, e.target.value, 'domicilio' )
    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('formulario__validacion-estado1');
        document.querySelector(`#grupo__${campo} i`).classList.add('formulario__validacion-estado2');
        // document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');        
        document.getElementById(`${campo}`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('formulario__validacion-estado2');
        document.querySelector(`#grupo__${campo} i`).classList.add('formulario__validacion-estado1');
        // document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        document.getElementById(`${campo}`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
    }
}  


inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);//comprobacion cuando soltamos una tecla
    input.addEventListener('blur', validarFormulario); //comprobacion cuando hacemos click 

});

formulario.addEventListener('submit', (e)=>{
    

    if (campos.nombre) {
        formulario.onsubmit = true;
    } else {
        e.preventDefault();
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');            
        }, 5000);
    }
    
});


