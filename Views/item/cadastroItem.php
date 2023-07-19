<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php 
        $sql = "SELECT nomeItem FROM produto";
        $stmt = $conn->query($sql);
    ?>


</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto" >
            <div class="card-body">
            <h3 class="text-center mb-4">CADASTRO DE ITENS</h3>
            <form id="formulario" action="?page=itemAcoes" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
                
                <div class="mb-3">
                    <label>Nome Produto</label>
                    <select name="produto" class="form-control" required>
                        <option value="">Selecione o produto...</option>
                        <?php 
                        if ($stmt->rowCount() > 0){
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo '<option value="' . $row["nomeItem"] . '">' . $row["nomeItem"] . '</option>';
                            }
                        }
                        ?>
                    <select>
                </div>  
                <div class="mb-3">
                    <label>Fornecedor</label>
                    <input type="text" name="fornecedor" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Quantidade</label>
                    <input type="number" name="quantidade" step="1" class="form-control">
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