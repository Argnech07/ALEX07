//(funcion)(){
    var formulario = document.getElementById('form'),
		nombre = formulario.nombre,
		domicilio = formulario.domicilio,
		pedido = formulario.pedido,
		error = document.getElementById('error');
function validarNombre(e){
    if(nombre.value == '' || nombre == null){
        console.log('Completa el nombre');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Nombre</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validardomicilio(e){
     if(correo.value == '' || domicilio == null){
        console.log('Completa el domicilio');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa tu domicilio</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarpedido(e){
    if(sexo.value == '' || pedido.value == null){
        console.log('ingresa tu pedido');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>ingresa tu pedido</li>';
        e.preventDefault();
    }else{
    error.style.display='none';
}
}

function validarForm(e){
   error.innerHTML = '';
   error.style.display = 'block';
   validarNombre(e);
   validardireccion(e);
   validarpedido(e);
}


formulario.addEventListener('submit', validarForm);

//}())