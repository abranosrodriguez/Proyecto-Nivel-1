<?php require('./layout/header.php')?>
<div class="texto">
    <h2>Ingredientes:</h2>
    <img src="imagenes/recetas/petitChocolate/petit chocolate.jpg">
    
        <ul >
            <h3>Personas: 
            <select id="numeros" name="valores" onchange="saberCantidadPersonas(); cantidadPetitChocolate(value);">
                <option value="1" id="uno">1</option>
                <option value="2" id="dos">2</option>
                <option value="3"selected>3</option>
                <option value="4" >4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>

            </select></h3>
            <li>Nata Liquida <span id="nataLiquida">100</span> ml</cantidadAucar></li>
            <li>Azucar <span id="azucar">50</span> gr</li>
            <li>Chocolate Negro <span id="chocolateNegro">50</span> gr</li>
            <li>Queso mascarpone a temperatura ambiente <span id="quesoMascarpone">100</span> gr</li>
            <li>Cacao en polvo puro <span id="cacaoPuro">15</span> gr</li>
            <li>Opcional: Ron (licor) un chorrito</li>
        </ul>
        <script src="funciones/boton.js"></script>
        <script src="funciones/cantidadPetitChocolate.js"></script>
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