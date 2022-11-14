<?php require('./layout/header.php')?>
<div class="texto">

        <h2>Ingredientes:</h2>
        <img src="imagenes/Chocolate-a-la-taza.jpg">
        <ul >
            <h3>Personas: 
            <select id="numeros" name="valores" onchange="saberCantidadPersonas(); calcularCantidad(value);">
                <option value="1" id="uno">1</option>
                <option value="2" id="dos">2</option>
                <option value="3">3</option>
                <option value="4" selected>4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>

            </select></h3>
            <li><span id="gramosChocolate">400</span> gr de Chocolate negro</cantidadAucar></li>
            <li><span id="litrosLeche">1l</span> de leche</li>
            <li>Sal (<span id="gramosSal">4 </span>gr)</li>
            <li>Azucar <span id="gramosAzucar">50</span>gr</li>
            <li>Opcional: <span id="gramosHarina">15</span>gr de harina o almidón de maíz (Maizena)</li>
            <li>Opcional: Para aromatizar, una ramita de canela o un toque de vainilla en rama. Incluso un poco de tu licor preferido</li>
        </ul>
            <script src="funciones/boton.js"></script>
            <script src="funciones/calcularCantidad.js"></script>
            <h2>Preparación del chocolate a la taza</h2>
            <ol>
                <li>Calentamos la leche en una cazuela. Si vamos a utilizar un chocolate muy potente, en este punto es donde añadimos el toque de azúcar para endulzar la leche. 
                    Añadimos el chocolate y un punto de sal. Si lo queremos con un toque aromatizado, sería el momento de añadir la rama de canela o la vainilla.</li>
                <li>Removemos con una cuchara de madera o unas varillas, hasta que el cacao se integre bien mientras se funde. 
                    Si no tenemos mucho tiempo, podemos trocear el chocolate previamente con un cuchillo en una tabla. De esta forma aceleramos el proceso.</li>
                <li>Cuando empiece a hervir lo retiramos del fuego y lo dejamos que deje de burbujear. Ya estará listo, pero si quieres que tenga más consistencia, lo puedes poner de nuevo al fuego hasta que comience a hervir otra vez. 
                    De nuevo se retira y ya lo puedes servir. De esta forma queda más espeso. Tened cuidado de que no se queme.</li>
            </ol>
        <h2>Opción más espesa de un chocolate a la taza</h2>
        <ul>
            <li>Si no queremos estar removiendo todo el rato, se puede espesar con un poco de harina o almidón de maíz (este ingrediente se mezclaría al principio de todo con la leche en frío). Lo mejor es batir todo hasta que esté todo muy bien integrado, es importante este paso para que luego no queden grumos. 
                Os aconsejo almidón de maíz, pues es más fácil de manejar. Luego el resto de la receta sería igual que la anterior</li>
            <li>Si no quieres hacerlo con chocolate en onzas, tienes la opción de cacao en polvo. Hay muchos tipos de marcas, aunque recomiendo aquellas que no ponen «especial preparado chocolate a la taza instantáneo». 
                Suelen llevar muy poco chocolate y mucho almidón y azúcar.</li>
            <li>Aunque sería una opción fácil para hacerlo, os aconsejo cacao en polvo (con cacao de verdad), sustituyendo el chocolate por el cacao y empleando una batidora en vez de la cuchara de madera. El proceso sería similar.</li>
            <li>Se sirve bien caliente, perfecto para acompañar con churros, porras o tu roscón de Reyes casero.</li>
        </ul>
        <h2>Consejos para un chocolate a la taza de rechupete</h2>
        <ul>
            <li>Para este súper chocolate hemos añadido un toque de azúcar, al gusto de casa. Lo hemos hecho porque el chocolate que hemos empleado era del 81%, con lo que queda un chocolate muy potente. 
                Si el chocolate que vais a utilizar lleva menos cacao será más dulce con lo que necesitará menos azúcar. Por eso el tema del «azúcar al gusto»</li>
            <li>Este chocolate a la taza casero tiene un sabor mucho más intenso que los industriales, no lleva miles de cosas, como veis con 3 ingredientes ya estaría hecho.</li>
            <li>El otro consejo es que tunéis vuestro chocolate a la taza, en México le añaden un toque de picante, un golpe de pimienta potencia su sabor. Un toque increíble, además del potenciador de sabor del punto de sal.</li>
            <li>Si te gusta el chocolate más espeso, debes cocinarlo durante más tiempo, reduciendo el líquido. La otra opción que sugiero en la lista de ingredientes es añadir una cucharada de harina o almidón de maíz refinada al chocolate mientras se cocina. 
                Pero este punto es opcional, para los puristas del chocolate a la taza nada de espesantes,</li>
            <li>Por último, puedes servir el chocolate caliente cubierto de nata montada, una presentación muy habitual en las cafeterías. Además, puedes aromatizarlos con un poco de canela molida por encima para darle un toque especial.</li>
        </ul>
       </div>
       <?php require('./layout/footer.php')?>