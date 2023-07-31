<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.2/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.2/vfs_fonts.js"></script>
    <script src="../Script/visualizarProntuario.js"></script>

</head>
<body>
    <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $sql = "SELECT nomeAnimal FROM consultorio WHERE id = $id";
            $stmt = $conn->query($sql);

            $sqlPdf = "SELECT nomeAnimal, nomeTutor, especie, sexo, viral, vermifugo, antirrabica, sistNeurologico, sistDigestorio, sistUrogenital, sistCardioResp, sistLocomotor, sistTegumentar, sistOcular, sistAuditivo 
            FROM consultorio WHERE id = :id";
            $stmtPdf = $conn->prepare($sqlPdf);
            $stmtPdf->bindParam(':id', $id, PDO::PARAM_INT);
            $stmtPdf->execute();

            $result = $stmtPdf->fetch(PDO::FETCH_ASSOC);
            $jsonResult = json_encode($result);
        }
    ?>
    <script>
        var pacienteData = <?php echo $jsonResult; ?>;
    </script>

   <div class="container mt-5">
    <div class="card mx-auto" >
        <div class="card-body">
            <h3 class="text-center mb-5">CONSULTA</h3>
               <div class="d-flex justify-content-between"> 
                    <div class="mb-3">
                        <label><strong>Paciente:</strong></label>
                        <span><?php $row = $stmt->fetch(PDO::FETCH_ASSOC); echo $row['nomeAnimal']; ?></span>
                    </div>
                    <div class="mb-3 text-right"> 
                        <button class="btn btn-outline-secondary" type="button" id="buscar-cpf" onclick="gerarPDF()">
                            📄 Visualizar Prontuário
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>