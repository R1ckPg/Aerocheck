<?php
// Configuração de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "kiki2401";
$dbname = "aerocheck";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Captura dos dados do formulário usando método POST
$mistura = $_POST['mistura'];
$avionics = $_POST['avionics'];
$luzes_nav = $_POST['luzes_nav'];
$chv_ign = $_POST['chv_ign'];
$freio = $_POST['freio'];
$controle_flap = $_POST['controle_flap'];
$helice = $_POST['helice'];
$capo = $_POST['capo_do_motor'];
$qnt_fuel = $_POST['tanques_de_combustivel'];
$ties = $_POST['Tie_downs'];
$cbrt_parabrisa = $_POST['cobertura'];
$flight_log = $_POST['requisitos_de_voo'];

// Comando SQL para inserir os dados na tabela
$sql = "INSERT INTO cesna182_pos (mistura, avionics, luzes_nav, chv_ign, freio, controle_flap, helice, capo, qnt_fuel, ties, cbrt_parabrisa, flight_log)
VALUES ('$mistura', '$avionics', '$luzes_nav', '$chv_ign', '$freio', '$controle_flap', '$helice', '$capo', '$qnt_fuel', '$ties', '$cbrt_parabrisa', '$flight_log')";

// Executa a inserção e verifica se foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Checklist salvo com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
