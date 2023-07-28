<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto" >
            <div class="card-body">
            <h3 class="text-center mb-4">CADASTRO DE USUARIO</h3>
                <form id="formulario" action="?page=usuarioAcoes" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    <div class="mb-3">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">   
                        <label for="tipoPessoa">Tipo de Pessoa</label>
                        <select class="form-control" id="tipoPessoa" name="tipoPessoa" required>
                            <option value="">Selecione</option>
                            <option value="1">Administrador</option>
                            <option value="2">Médico Veterinário</option>
                            <option value="3">Recepcionista</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Login</label>
                        <input type="text" name="login" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Senha</label>
                        <input type="password" name="senha" class="form-control" required>
                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">CADASTRAR USUARIO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>