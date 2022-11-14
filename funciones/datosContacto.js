function datosContacto() {
    //Cogemos los valores
    nombre = document.getElementById("Nombre").value
    correo = document.getElementById("Correo").value
    telefono = document.getElementById("Telefono").value
    mensaje = document.getElementById("Mensaje").value

    console.log(`Nombre del usuario: ${nombre}\nCorreo: ${correo}\nTelefono: ${telefono}\nMensaje: ${mensaje}`)

    //Borramos el contenido
    document.getElementById("Nombre").value = ""
    document.getElementById("Correo").value = ""
    document.getElementById("Telefono").value = ""
    document.getElementById("Mensaje").value = ""

    location.href = `datos.php?Nombre=${nombre}&Correo=${correo}&Telefono=${telefono}&Mensaje=${mensaje}`
}