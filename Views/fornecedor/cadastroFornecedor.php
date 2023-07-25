<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="..\Script\mascaraCNPJ.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto" >
            <div class="card-body">
            <h3 class="text-center mb-4">CADASTRO DE FORNECEDOR</h3>
            <form id="formulario" action="?page=fornecedorAcao" method="POST">
                <input type="hidden" name="acao" value="cadastrar"> 
                <div class="mb-3">
                    <label>Nome da Empresa</label>
                    <input type="text" name="nomeEmpresa" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>CNPJ</label>
                    <input type="text" name="cnpj" class="form-control" maxlength="18" required>
                </div>
                <div class="mb-3">
                    <label>E-mail</label>
                    <input type="email" name="emailEmpresa" class="form-control" required>
                </div> 
                <div class="mb-3">
                    <label>Endereco</label>
                    <input type="text" name="endereco" class="form-control" required>
                </div>
                <br>
                <hr>
                <div class="mb-3">
                    <h5>Representante</h5>
                </div>
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nomeRepresentante" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>E-mail</label>
                    <input type="email" name="emailRepresentante" class="form-control" required>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">CADASTRAR</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>