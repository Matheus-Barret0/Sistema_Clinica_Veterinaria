<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto" >
            <div class="card-body">
            <h3 class="text-center mb-4">CADASTRO DE PRODUTO</h3>
            <form id="formulario" action="?page=produtoAcoes" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="mb-3">
                    <label>Nome do Item</label>
                    <input type="text" name="nomeItem" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Descrição do Item</label>
                    <input type="text" name="descricaoItem" class="form-control" required>
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