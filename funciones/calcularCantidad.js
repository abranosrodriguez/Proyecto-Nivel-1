function calcularCantidad(value) {
    cantidadChocolate = 100
    cantidadLeche = 250
    cantidadSal = 1
    cantidadAzucar = 50
    cantidadHarina = 3.75

    cantidadChocolate = cantidadChocolate * value
    cantidadLeche = cantidadLeche * value
    cantidadSal = cantidadSal * value
    cantidadAzucar = cantidadAzucar * value
    cantidadHarina = cantidadHarina * value

    document.getElementById("gramosChocolate").innerHTML = cantidadChocolate
    if (cantidadLeche >= 1000) {
        cantidadLeche = cantidadLeche / 1000
        document.getElementById("litrosLeche").innerHTML = cantidadLeche + "L"
    } else if (cantidadLeche < 1000) {
        document.getElementById("litrosLeche").innerHTML = cantidadLeche + "ml"
    }

    document.getElementById("gramosSal").innerHTML = cantidadSal
    document.getElementById("gramosAzucar").innerHTML = cantidadAzucar
    document.getElementById("gramosHarina").innerHTML = cantidadHarina
    //console.log(`La cantidad de chocolate para ${value}:\n Cantidad de Chocolate: ${cantidadChocolate}\n Cantidad de leche: ${cantidadLeche}ml\n Cantidad de Sal: ${cantidadSal}gr\n Cantidad de Azúcar: ${cantidadAzucar}gr`)
}