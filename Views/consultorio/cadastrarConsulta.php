<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../Script/pesquisaConsultorioCPF.js"></script>
    <script src="../Script/mascaraCPF.js"></script>

    <style>
        .input-group .form-control {
            flex: 1;
            max-width: calc(40% - 45px);
        }
        .input-group {
            justify-content: between;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto">
            <div class="card-body">
                <h3 class="text-center mb-4">PRONTUÁRIO</h3>
                <h5>Informações Gerais</h5>
                <br>
                <div class="input-group mb-3">
                    <input type="text" name="cpf" class="form-control" placeholder="Pesquise pelo CPF" aria-label="CPF" aria-describedby="buscar-cpf">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="buscar-cpf">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <form id="formulario" action="?page=clienteAcoes" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    <div class="mb-3">
                        <label>Nome Tutor</label>
                        <input type="text" name="nomeTutor" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label>Nome Animal</label>
                        <input type="text" name="nomeAnimal" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label>Espécie</label>
                        <input type="text" name="especie" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label>Sexo</label>
                        <input type="text" name="sexo" class="form-control" readonly>
                    </div>
                    <br>
                    <h5 class="mb-4">Informações Especificas</h5>
                    <div class="mb-3">
                        <label class="form-label">Status de vacinação viral:</label>
                        <ul class="list-inline">
                            <li class="form-check-inline">
                                <input type="radio" name="viral" class="form-check-input" value="Atualizado" >
                                <label class="form-check-label" for="sexo-masculino">Atualizado</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="viral" class="form-check-input" value="Desatualizado">
                                <label class="form-check-label" for="sexo-feminino">Desatualizado</label>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <div class="mb-3">
                        <label class="form-label">Antirrábica:</label>
                        <ul class="list-inline">
                            <li class="form-check-inline">
                                <input type="radio" name="antirrabica" class="form-check-input" value="Atualizado" >
                                <label class="form-check-label" for="sexo-masculino">Atualizado</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="antirrabica" class="form-check-input" value="Desatualizado">
                                <label class="form-check-label" for="sexo-feminino">Desatualizado</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="antirrabica" class="form-check-input" value="Campanha">
                                <label class="form-check-label" for="sexo-feminino">Campanha</label>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <div class="mb-3">
                        <label class="form-label">Vermífugo:</label>
                        <ul class="list-inline">
                            <li class="form-check-inline">
                                <input type="radio" name="vermifugo" class="form-check-input" value="Atualizado" >
                                <label class="form-check-label" for="sexo-masculino">Atualizado</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="vermifugo" class="form-check-input" value="Desatualizado">
                                <label class="form-check-label" for="sexo-feminino">Desatualizado</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="vermifugo" class="form-check-input" value="Campanha">
                                <label class="form-check-label" for="sexo-feminino">Campanha</label>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <div class="mb-3">
                        <label class="form-label">Sistema Neurológico:</label>
                        <ul class="list-inline">
                            <li class="form-check-inline">
                                <input type="radio" name="sistNeurologico" class="form-check-input" value="Mioclonia" >
                                <label class="form-check-label" for="sexo-masculino">Mioclonia</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistNeurologico" class="form-check-input" value="Convulsão">
                                <label class="form-check-label" for="sexo-feminino">Convulsão</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistNeurologico" class="form-check-input" value="Decubito">
                                <label class="form-check-label" for="sexo-feminino">Decubito</label>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <div class="mb-3">
                        <label class="form-label">Sistema Digestório :</label>
                        <ul class="list-inline">
                            <li class="form-check-inline">
                                <input type="radio" name="sistDigestorio" class="form-check-input" value="Vômito" >
                                <label class="form-check-label" for="sexo-masculino">Vômito</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistDigestorio" class="form-check-input" value="Diarreia">
                                <label class="form-check-label" for="sexo-feminino">Diarreia</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistDigestorio" class="form-check-input" value="Decubito com Sangue">
                                <label class="form-check-label" for="sexo-feminino">Diarreia com Sangue</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistDigestorio" class="form-check-input" value="Red. Apetite">
                                <label class="form-check-label" for="sexo-feminino">Red. Apetite</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistDigestorio" class="form-check-input" value="Red. Água">
                                <label class="form-check-label" for="sexo-feminino">Red. Água</label>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <div class="mb-3">
                        <label class="form-label">Sistema Urogenital:</label>
                        <ul class="list-inline">
                            <li class="form-check-inline">
                                <input type="radio" name="sistUrogenital" class="form-check-input" value="Disuria" >
                                <label class="form-check-label" for="sexo-masculino">Disuria</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistUrogenital" class="form-check-input" value="Sec. Vaginal/Peniana">
                                <label class="form-check-label" for="sexo-feminino">Sec. Vaginal/Peniana</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistUrogenital" class="form-check-input" value="Obstrução">
                                <label class="form-check-label" for="sexo-feminino">Obstrução</label>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <div class="mb-3">
                        <label class="form-label">Sistema Cardio Respiratorio:</label>
                        <ul class="list-inline">
                            <li class="form-check-inline">
                                <input type="radio" name="sistCardioResp" class="form-check-input" value="Tosse" >
                                <label class="form-check-label" for="sexo-masculino">Tosse</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistCardioResp" class="form-check-input" value="Cansaço Respiratório">
                                <label class="form-check-label" for="sexo-feminino">Cansaço Respiratório</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistCardioResp" class="form-check-input" value="Secreção Nasal">
                                <label class="form-check-label" for="sexo-feminino">Secreção Nasal</label>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <div class="mb-3">
                        <label class="form-label">Sistema Locomotor:</label>
                        <ul class="list-inline">
                            <li class="form-check-inline">
                                <input type="radio" name="sistCardioResp" class="form-check-input" value="Fratura" >
                                <label class="form-check-label" for="sexo-masculino">Fratura</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistUrogenital" class="form-check-input" value="Claudicação">
                                <label class="form-check-label" for="sexo-feminino">Claudicação</label>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <div class="mb-3">
                        <label class="form-label">Sistema Tegumentar:</label>
                        <ul class="list-inline">
                            <li class="form-check-inline">
                                <input type="radio" name="sistTegumentar" class="form-check-input" value="Alopecia" >
                                <label class="form-check-label" for="sexo-masculino">Alopecia</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistTegumentar" class="form-check-input" value="Prurido">
                                <label class="form-check-label" for="sexo-feminino">Prurido</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistTegumentar" class="form-check-input" value="Ectoparasitas">
                                <label class="form-check-label" for="sexo-feminino">Ectoparasitas</label>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <div class="mb-3">
                        <label class="form-label">Sistema Ocular:</label>
                        <ul class="list-inline">
                            <li class="form-check-inline">
                                <input type="radio" name="sistOcular" class="form-check-input" value="Sec. Ocular" >
                                <label class="form-check-label" for="sexo-masculino">Sec. Ocular</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistOcular" class="form-check-input" value="Prurido">
                                <label class="form-check-label" for="sexo-feminino">Prurido</label>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-4">
                    <div class="mb-3">
                        <label class="form-label">Sistema Auditivo:</label>
                        <ul class="list-inline">
                            <li class="form-check-inline">
                                <input type="radio" name="sistAuditivo" class="form-check-input" value="Prurido" >
                                <label class="form-check-label" for="sexo-masculino">Prurido</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistAuditivo" class="form-check-input" value="Secreção">
                                <label class="form-check-label" for="sexo-feminino">Secreção</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistAuditivo" class="form-check-input" value="Odor">
                                <label class="form-check-label" for="sexo-feminino">Odor</label>
                            </li>
                            <li class="form-check-inline">
                                <input type="radio" name="sistAuditivo" class="form-check-input" value="Otomematoma">
                                <label class="form-check-label" for="sexo-feminino">Otomematoma</label>
                            </li>
                        </ul>
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
