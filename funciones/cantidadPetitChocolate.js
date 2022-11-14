function cantidadPetitChocolate(value) {
    nataMontada = 33.33
    azucar = 16.67
    chocolate = 16.67
    quesoMascarpone = 33.33
    cacaoPuro = 5

    nataMontada = nataMontada * value
    nataMontada = Math.round(nataMontada)

    azucar = azucar * value
    azucar = Math.round(azucar)

    chocolate = chocolate * value
    chocolate = Math.round(chocolate)

    quesoMascarpone = quesoMascarpone * value
    quesoMascarpone = Math.round(quesoMascarpone)

    cacaoPuro = cacaoPuro * value
    cacaoPuro = Math.round(cacaoPuro)

    document.getElementById("nataLiquida").innerHTML = nataMontada
    document.getElementById("azucar").innerHTML = azucar
    document.getElementById("chocolateNegro").innerHTML = chocolate
    document.getElementById("quesoMascarpone").innerHTML = quesoMascarpone
    document.getElementById("cacaoPuro").innerHTML = cacaoPuro
    //console.log(`La cantidad de chocolate para ${value}:\n Cantidad de Chocolate: ${cantidadChocolate}\n Cantidad de leche: ${cantidadLeche}ml\n Cantidad de Sal: ${cantidadSal}gr\n Cantidad de Azúcar: ${cantidadAzucar}gr`)
}