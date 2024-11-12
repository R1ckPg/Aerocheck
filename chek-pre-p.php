<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "kiki2401";
$dbname = "aerocheck";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Receber os dados do formulário
$cmbst = $_POST['combustivel'];
$oleo = $_POST['oleo'];
$filtro = $_POST['Filtro-de-Ar'];
$stm_freio = $_POST['Sistema_de_freios'];
$pneus = $_POST['pneus_de_rodas'];
$controles = $_POST['superficie_de_controle'];
$luz_nav = $_POST['Luzes_de_navegacao'];
$luz_beacon = $_POST['Luz_Estroboscópica'];
$tnq_dreno = $_POST['Tanque_de_dreno_de_combustível'];
$helice = $_POST['Hélice'];
$capo = $_POST['Capô_do_Motor'];
$vidros = $_POST['Vidros_do_Cockpit'];
$flaps = $_POST['Flaps'];
$antenas = $_POST['Antenas'];
$trimtab = $_POST['Trim_Tab'];
$extintores = $_POST['Extintor_de_Incêndio'];
$cintos = $_POST['Cintos_de_Segurança'];

// Inserir dados na tabela
$sql = "INSERT INTO cesna182_pre (
    cmbst, oleo, filtro, stm_freio, pneus, controles, luz_nav, luz_beacon,
    tnq_dreno, helice, capo, vidros, flaps, antenas, trimtab, extintores, cintos
) VALUES (
    '$cmbst', '$oleo', '$filtro', '$stm_freio', '$pneus', '$controles', '$luz_nav', '$luz_beacon',
    '$tnq_dreno', '$helice', '$capo', '$vidros', '$flaps', '$antenas', '$trimtab', '$extintores', '$cintos'
)";

// Executar a inserção e verificar erros
if ($conn->query($sql) === TRUE) {
    echo "Checklist registrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar conexão
$conn->close();
?>
