<?php
// Verifica se os dados foram enviados
if (isset($_GET['nome']) && isset($_GET['email'])) {
    $nome = htmlspecialchars($_GET['nome']);
    $email = htmlspecialchars($_GET['email']);

    echo "<h2>Informações Recebidas (GET):</h2>";
    echo "Nome: " . $nome . "<br>";
    echo "E-mail: " . $email . "<br>";
} else {
    echo "Nenhum dado recebido.";
}
?>