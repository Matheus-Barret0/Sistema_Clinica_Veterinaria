// Função para gerar o PDF
function gerarPDF() {
    var paciente = pacienteData.nomeAnimal;
    var nomeTutor = pacienteData.nomeTutor;
    var especie = pacienteData.especie;
    var sexo = pacienteData.sexo;
    var viral = pacienteData.viral;
    var vermifugo = pacienteData.vermifugo;
    var antirrabica = pacienteData.antirrabica;
    var sistNeurologico = pacienteData.sistNeurologico;
    var sistDigestorio = pacienteData.sistDigestorio;
    var sistUrogenital = pacienteData.sistUrogenital;
    var sistCardioResp = pacienteData.sistCardioResp;
    var sistLocomotor = pacienteData.sistLocomotor;
    var sistTegumentar = pacienteData.sistTegumentar;
    var sistOcular = pacienteData.sistOcular;
    var sistAuditivo = pacienteData.sistAuditivo;

    var docDefinition = {
        content: [
            { text: 'CONSULTA', style: 'header' },
            { text: 'Paciente: ' + paciente },
            { text: 'Nome do Tutor: ' + nomeTutor },
            { text: 'Espécie: ' + especie },
            { text: 'Sexo: ' + sexo },
            { text: 'Viral: ' + viral },
            { text: 'Vermífugo: ' + vermifugo },
            { text: 'Antirrábica: ' + antirrabica },
            { text: 'Sistema Neurologico: ' + sistNeurologico },
            { text: 'Sistema Digestório: ' + sistDigestorio },
            { text: 'Sistema Urogenital: ' + sistUrogenital },
            { text: 'Sistema Cardio-Respiratório: ' + sistCardioResp },
            { text: 'Sistema Locomotor: ' + sistLocomotor },
            { text: 'Sistema Tegumentar: ' + sistTegumentar },
            { text: 'Sistema Ocular: ' + sistOcular },
            { text: 'Sistema Auditivo: ' + sistAuditivo },
        ],
        styles: {
            header: {
                fontSize: 18,
                bold: true,
                margin: [0, 0, 0, 10]
            }
        }
    };

    pdfMake.createPdf(docDefinition).open();
}
