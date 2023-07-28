<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <?php
            if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
                $idUsuario = $_SESSION['id'];
                $user_name = $_SESSION['user_name'];
            } else {
                echo "Usuário não autenticado.";
            }

            $paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

            $resultadosPorPagina = 50; //Total de páginas
            $offset = ($paginaAtual - 1) * $resultadosPorPagina;

            $sql = "SELECT id, nomeTutor, nomeAnimal, especie, dataCriacao FROM consultorio WHERE usuarioAtual =".$idUsuario." LIMIT $offset, $resultadosPorPagina";
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
                print "<th>NOME TUTOR</th>";
                print "<th>NOME ANIMAL</th>";
                print "<th>ESPECIE</th>";
                print "<th>DATA</th>";
                print "<th>AÇÕES</th>";
                print "</tr>";

                $index = $offset;

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $id = $row['id'];
                    $nomeTutor = $row['nomeTutor'];
                    $nomeAnimal = $row['nomeAnimal'];
                    $especie = $row['especie'];
                    $dataCriacao = $row['dataCriacao'];
                    $dataFormatada = date("d/m/Y", strtotime($dataCriacao));

                    print "<tr>";
                    print "<td>".++$index."</td>";
                    print "<td>".$nomeTutor."</td>";
                    print "<td>".$nomeAnimal."</td>";
                    print "<td>".$especie."</td>";
                    print "<td>".$dataFormatada."</td>";
                    echo "<td>
                            <a href='?page=excluirUsuario&id=".$id."&acao=excluirUsuario' class='btn btn-success'>Visualizar</a>
                        </td>";
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
                print "<p class='alert alert-danger mt-5'>Nenhuma consulta encontrada!</p>";
            }
        ?>
    </div>
</body>
</html>