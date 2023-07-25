<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <?php
            //Verifica qual página está sendo solicitada
            $paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

            $resultadosPorPagina = 50; //Total de páginas
            $offset = ($paginaAtual - 1) * $resultadosPorPagina;

            $sql = "SELECT nomeEmpresa, cnpj, nomeRepresentante, emailRepresentante FROM fornecedor LIMIT $offset, $resultadosPorPagina";
            $stmt = $conn->query($sql);

            print "<br>";
            print "<div class='d-flex justify-content-end'>";
            print "<div class='col-md-5'>";
            print "<div class='input-group'>";
            print "<input class='form-control' type='text' placeholder='Procure pelo CNPJ do fornecedor'>";
            print "<div class='input-group-append'>";
            print "<button class='btn btn-outline-success' type='submit'>Pesquisar</button>";
            print "</div>";
            print "</div>";
            print "</div>";
            print "</div>";
            
            
            if ($stmt->rowCount() > 0) {
                print "<table class='table table-hover table-striped table-bordered mt-3'>";
                print "<tr>";
                print "<th>#</th>";
                print "<th>NOME FORNECEDOR</th>";
                print "<th>CNPJ</th>";
                print "<th>REPRESENTANTE</th>";
                print "</tr>";

                $index = $offset;

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $nomeEmpresa = $row['nomeEmpresa'];
                    $cnpj = $row['cnpj'];
                    $nomeRepresentante = $row['nomeRepresentante'];

                    print "<tr>";
                    print "<td>".++$index."</td>";
                    print "<td>".$nomeEmpresa."</td>";
                    print "<td>".$cnpj."</td>";
                    print "<td>".$nomeRepresentante."</td>";
                    print "</tr>";
                }

                print("</table>");

                $sqlCount = "SELECT COUNT(*) as total FROM produto";
                $stmtCount = $conn->query($sqlCount);
                $totalResultados = $stmtCount->fetch(PDO::FETCH_ASSOC)['total'];
                $totalPaginas = ceil($totalResultados / $resultadosPorPagina);

                if ($totalPaginas > 1) {
                    print "<nav aria-label='Page navigation example'>";
                    print "<ul class='pagination'>";
                    print "<li class='page-item'>";
                    print "<a class='page-link' href='?page=listarCliente&pagina=1' aria-label='Previous'>";
                    print "<span aria-hidden='true'>&laquo;</span>";
                    print "<span class='sr-only'>Previous</span>";
                    print "</a>";
                    print "</li>";
                
                    for ($i = 1; $i <= $totalPaginas; $i++) {
                        $active = ($i == $paginaAtual) ? "active" : "";
                        print "<li class='page-item'><a class='page-link $active' href='?page=listarCliente&pagina=$i'>$i</a></li>";
                    }
                
                    print "<li class='page-item'>";
                    print "<a class='page-link' href='?page=listarCliente&pagina=$totalPaginas' aria-label='Next'>";
                    print "<span aria-hidden='true'>&raquo;</span>";
                    print "<span class='sr-only'>Next</span>";
                    print "</a>";
                    print "</li>";
                    print "</ul>";
                    print "</nav>";
                }                
            } else {
                print "<p class='alert alert-danger mt-5'>Nenhum cadastro foi encontrado!</p>";
            }
        ?>
    </div>



</body>
</html>