
function total() {
    let cantidad = document.getElementById("cantidad_tickets");
    let categoria = document.getElementById("categoria");
    let valor_entrada = 200;
    let total = 0;

    if (categoria.value == "estudiante") {
        total = cantidad.value * valor_entrada * 0.2
    }
    else if (categoria.value == "trainee") {
        total = cantidad.value * valor_entrada * 0.5
    }
    else {
        total = cantidad.value * valor_entrada * 0.85
    }
    document.getElementById("total").innerHTML = total;
}

function borrar() {
    document.getElementById("cantidad_tickets").value = '';
    document.getElementById("categoria").value = 'estudiante';
    document.getElementById("total").innerHTML = '';
}

