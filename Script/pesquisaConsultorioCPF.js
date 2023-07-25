$(document).ready(function() {
  $('#buscar-cpf').click(function() {
    var cpf = $('input[name="cpf"]').val();
    $.ajax({
      type: 'GET', 
      url: '../Views/acoes/pesquisaConsultorioCPF.php', 
      data: { cpf: cpf }, 
      dataType: 'json', 
      success: function(response) {
        $('input[name="nomeTutor"]').val(response.nomeTutor);
        $('input[name="nomeAnimal"]').val(response.nomeAnimal);
        $('input[name="especie"]').val(response.especie);
        $('input[name="sexo"]').val(response.sexoAnimal);
      },
      error: function(xhr, status, error) {
        // Função de erro - tratamento do erro da requisição
        console.log('Erro na requisição AJAX: ' + error);
      }
    });
  });
});
