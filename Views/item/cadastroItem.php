<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto" >
            <div class="card-body">
            <form id="formulario" action="?page=clienteAcoes" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="mb-3">
                    <label>Nome Tutor</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Nome Animal</label>
                    <input type="text" name="nomeAnimal" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>CPF</label>
                    <input type="text" name="cpf" class="form-control" maxlength="11" required>
                </div>
                <div class="mb-3">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" required>
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