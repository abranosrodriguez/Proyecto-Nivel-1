<?php require('./layout/header.php')?>

    <div class="texto">
        <h2>Datos Enviados:</h2>
        <ul>
            <li>Nombre: <b><span id="nombre"></span></b></li>
            <li>Correo: <b><span id="correo"></span></b></li>
            <li>Telefono: <b><span id="telefono"></span></b></li>
            <li>Mensaje: <b><span id="mensaje"></span></b></li>
        <ul>
            <p><i>Prueba de un pequeño formulario donde recibiremos la información del cliente.

                <ol>
                    <li>No tiene un verificador de correos</li>
                    <li>Problema de inyeccion de código</li>
                    <li>Mejoras para el futuro</li>

                </ol>
            </i></p>
        <script src="funciones/datosUrl.js"> </script>
    </div>
  
<?php require('./layout/footer.php')?>