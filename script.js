function RedirectForms() {
    window.location.href = "create.php";
}


function mostrarLoading() {
    // Mostra o loading
    document.getElementById('barra-progresso').style.display = 'block';
}

function proximoForm() {
    // Mostra o primeiro formulario
    document.getElementById('style-cadastro').style.display = 'none';
    document.getElementById('style-cadastro').style.display = 'block';
}

function proximaEtapa() {
    // Mostra o segundo formulario
    document.getElementById('style-btform1').style.display = 'none';
    document.getElementById('style-btform1').style.display = 'block';
}




