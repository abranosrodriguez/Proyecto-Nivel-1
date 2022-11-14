<?php require('./layout/header.php')?>
<div class="texto">
    <h2>Ingredientes:</h2>
    <img src="imagenes/recetas/Bundt cake de doble chocolate/tarta.jpg">
    <ul>
        <li>Sé lo que estaréis pensando viendo mi receta de bundt cake de doble chocolate ¿no tiene suficientes dulces esta mujer que aún preparar un bizcocho chocolateado? Efectivamente estamos en época pre vorágine de atracones, pues falta un mes escaso para las fiestas navideñas, pero si en casa no tenemos un dulce para acompañar el café y la leche de la mañana, no es desayuno, así que mejor preparar alguno que esté francamente delicioso.</li>
        <li>Eso, y también que tenía muchas ganas de estrenar mi molde nuevo de bundt, así que no me hacen falta demasiadas excusas para encender el horno. La receta es de la archiconocida Martha Stewart y vale la pena probarla aunque sea con un simple molde de bizcochos pues está deliciosa. Claro que para comprobarlo tendréis que poneros manos a la obra, sin olvidar que mejor no abusar si queremos llegar en condiciones a la Navidad.</li>
    </ul>
        <ul >
            <h3>Personas: 
            <select id="numeros" name="valores" onchange="saberCantidadPersonas(); cantidadDobleChocolate(value);">
                <option value="1" id="uno">1</option>
                <option value="2" id="dos">2</option>
                <option value="3">3</option>
                <option value="4" >4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8" selected>8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>

            </select></h3>
            <li>Mantequilla sin sal (y un poco más en el molde) <span id="mantequilla">230</span> gr</li>
            <li>Harina <span id="harina">270</span> gr</li>
            <li>Cacao en polvo sin azúcar <span id="cacaoPolvo">75</span> gr</li>
            <li>Leche <span id="leche">120</span> ml</li>
            <li>Crema agria <span id="cremaAgria">120</span> gr</li>
            <li>Azucar <span id="azucar">250</span> gr</li>
            <li>Huevos (tamaño L) <span id="huevos">4</span> </li>
            <li>Chocolate negro amargo picado (para el glaseado) <span id="chocolateNegro">85</span> gr</li>
            <li>Nata líquida 35% materia grasa (para el glaseado) <span id="nataLiquida">120</span> ml</li>
            <li>Mantequilla sin sal (para el glaseado) <span id="mantequillados">30</span> gr</li>
        </ul>
        <script src="funciones/boton.js"></script>
        <script src="funciones/cantidadDobleChocolate.js"></script>
        <h3>Cómo hacer petit de chocolate</h3>
        <ul>
        <li>Calentamos el azúcar con la nata. Cuando hierva retiramos del fuego y agregamos el chocolate troceado. Dejamos templar mientras removemos <b>para que no queden grumos</b>. Añadimos el cacao en polvo tamizado y el ron (podemos elegir otro licor, al gusto).</li>
        <li>Por último echamos el queso mascarpone, removiendo hasta que no queden grumos. Vertemos con cuidado la crema en los vasitos de presentación y <b>refrigeramos unas horas</b>, hasta que los petit de chocolate cuajen.</li>
       
        </ul> 
    <img src="imagenes/recetas/petitChocolate/petit chocolate2.jpg">
    <h2>Con qué acompañar los petit de chocolate</h2>
    <ul>
    <li>Estos <b>petit de chocolate</b> debemos hacerlos con antelación ya que requieren de refrigeración para alcanzar la textura final deseada. Resulta un postre muy sencillo de elaborar y rápido, por lo que nos puede salvar de cualquier apuro.</li>
    </ul>
</div>
<?php require('./layout/footer.php')?>