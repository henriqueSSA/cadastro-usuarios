function RedirectForms() {
    window.location.href = "create.php";


}

function RedirectForms2() {
    window.location.href = "readerUser.php";


}

function home() {
    window.location.href = "index.php";

}


function mostrarLoading() {
    // Mostra o loading
    document.getElementById('barra-progresso').style.display = 'none';
}

function proximoForm() {
    // Vai para o proximo formulario
    document.getElementById('style-form1').style.display = 'none';
    document.getElementById('style-form2').style.display = 'block';
}


   document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("data_nasc").addEventListener("change", function () {
    const dataNasc = new Date(this.value);
    const hoje = new Date();

    let idade = hoje.getFullYear() - dataNasc.getFullYear();
    const mes = hoje.getMonth() - dataNasc.getMonth();

    if (mes < 0 || (mes === 0 && hoje.getDate() < dataNasc.getDate())) {
      idade--;
    }

    const campoIdade = document.getElementById("idade");
    if (campoIdade) {
      campoIdade.value = idade >= 0 ? idade : '';
    }
  });
});

$(document).ready(function () {

   $('#cpf').mask('000.000.000-00');
   $('#cep').mask('00000-000');
     
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        
    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function () {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");
                

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});


function validarPrimeiraEtapa() {
  // pegar os inputs
  const name = document.getElementById('name');
  const cpf = document.getElementById('cpf');
  const email = document.getElementById('email');
  const dataNasc = document.getElementById('data_nasc');

  // exemplo simples de validação
  if (!name.value.trim()) {
    alert('Por favor, preencha o nome');
    name.focus();
    return false;
  }

  if (!cpf.value.trim()) {
    alert('Por favor, preencha o CPF');
    cpf.focus();
    return false;
  }
  // aqui você pode validar o formato do CPF com regex se quiser

  if (!email.value.trim() || !email.checkValidity()) {
    alert('Por favor, preencha um email válido');
    email.focus();
    return false;
  }

  if (!dataNasc.value) {
    alert('Por favor, preencha a data de nascimento');
    dataNasc.focus();
    return false;
  }

  // Se passou tudo
  return true;
}

window.validationForm = function() {
  if (validarPrimeiraEtapa()) {
    document.getElementById('style-form1').style.display = 'none';
    document.getElementById('style-form2').style.display = 'block';

    // Atualizar a barra de progresso se quiser aqui
  }
}

const botaoSalvar = document.getElementById('botaoSalvar');

botaoSalvar.addEventListener('click', function(event) {
    alert('Cadastro realizado com sucesso!');
});













