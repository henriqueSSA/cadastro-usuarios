function RedirectForms() {
    window.location.href = "create.php";


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


    document.getElementById("data_nasc").addEventListener("change", function () {
      const dataNasc = new Date(this.value);
      const hoje = new Date();

      console.log("Data de Nascimento:");

      let idade = hoje.getFullYear() - dataNasc.getFullYear();
      const mes = hoje.getMonth() - dataNasc.getMonth();

      // Ajuste se ainda não fez aniversário este ano
      if (mes < 0 || (mes === 0 && hoje.getDate() < dataNasc.getDate())) {
        idade--;
      }

      // Preencher o campo de idade
      document.getElementById("idade").value = idade >= 0 ? idade : '';
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










