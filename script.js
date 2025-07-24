function RedirectForms() {
    window.location.href = "create.php";
    

}

function home() {
    window.location.href = "index.php";
    
}

$(document).ready(function () {
  $('#cpf').mask('000.000.000-00');
});


function mostrarLoading() {
    // Mostra o loading
    document.getElementById('barra-progresso').style.display = 'none';
}

function proximoForm() {
    // Vai para o proximo formulario
    document.getElementById('style-form1').style.display = 'none';
    document.getElementById('style-form2').style.display = 'block';
}






