function datosUrl() {
    queryString = window.location.search;
    urlParams = new URLSearchParams(queryString);
    nombre = urlParams.get('Nombre')
    correo = urlParams.get('Correo')
    telefono = urlParams.get('Telefono')
    mensaje = urlParams.get('Mensaje')
    console.log(`Nombre del usuario: ${nombre}\nCorreo: ${correo}\nTelefono: ${telefono}\nMensaje: ${mensaje}`);
    document.getElementById("nombre").innerHTML = nombre
    document.getElementById("correo").innerHTML = correo
    document.getElementById("telefono").innerHTML = telefono
    document.getElementById("mensaje").innerHTML = mensaje
}
datosUrl()