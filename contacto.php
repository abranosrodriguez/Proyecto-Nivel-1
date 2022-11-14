<?php require('./layout/header.php')?>

    <div class="texto">
    <h3>Información del creador:</h3>
        <ul>
            <li><b>Nombre:</b> Adrian Braños Rodriguez</li>
            <li><b>Correo:</b> abranosrodriguez@danielcastelao.org</li>
            <li><b>Localidad:</b> Vigo,Pontevedra,Galicia</li>
        </ul>
    
    <p>En esta página web está creada con la funcionalidad de hacer la práctica de nivel 1.<br>
    La idea escogida fue la de <b><i>Cacao y Chocolate</i></b><br>
    Desarrolla un sitio web para los que quieran conocer sobre el cacao y cómo hacer chocolate (para comer o beber ;-) ).<br>

    Además tendrá varias recetas para realizar con chocolate. La aplicación web permitirá modificar las raciones y por lo tanto la cantidad de cada ingrediente.</p>
    
    <h2>Ponerse en Contacto</h2>
    <div>
        <form>
            <input type="text" name="Nombre" placeholder="Nombre" id="Nombre" value="">
            <input type="text" name="Correo" placeholder="Correo" id="Correo" value="">
            <input type="text" name="Telefono" placeholder="Telefono" id="Telefono" value="">
            <textarea name="Mensaje" placeholder="Mensaje" id="Mensaje"></textarea>
            <input type="button" value="Enviar" id="boton" onclick="datosContacto()">
        </form>
        <script src="funciones/datosContacto.js"></script>
    </div>
    </div>

<?php require('./layout/footer.php')?>
