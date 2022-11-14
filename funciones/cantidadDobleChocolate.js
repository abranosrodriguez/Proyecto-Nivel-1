function cantidadDobleChocolate(value) {
    mantequilla = 28.75
    harina = 33.75
    cacao = 9.38
    leche = 15
    cremaAgria = 15
    azucar = 31.25
    huevos = 0.5
    chocolateNegro = 10.62
    nataLiquida = 15
    mantequilla_dos = 3.75

    mantequilla = Math.round(mantequilla * value)
    harina = Math.round(harina * value)
    cacao = Math.round(cacao * value)
    leche = Math.round(leche * value)
    cremaAgria = Math.round(cremaAgria * value)
    azucar = Math.round(azucar * value)
    huevos = Math.round(huevos * value)
    chocolateNegro = Math.round(chocolateNegro * value)
    nataLiquida = Math.round(nataLiquida * value)
    mantequilla_dos = Math.round(mantequilla_dos * value)

    document.getElementById("mantequilla").innerHTML = mantequilla
    document.getElementById("harina").innerHTML = harina
    document.getElementById("cacaoPolvo").innerHTML = cacao
    document.getElementById("leche").innerHTML = leche
    document.getElementById("cremaAgria").innerHTML = cremaAgria
    document.getElementById("azucar").innerHTML = azucar
    document.getElementById("huevos").innerHTML = huevos
    document.getElementById("chocolateNegro").innerHTML = chocolateNegro
    document.getElementById("nataLiquida").innerHTML = nataLiquida
    document.getElementById("mantequillados").innerHTML = mantequilla_dos
}