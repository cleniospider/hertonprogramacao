<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados com $_POST e tratando contra XSS com htmlspecialchars
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $cidade = htmlspecialchars($_POST['cidade']);
    $curso = htmlspecialchars($_POST['curso']);

    // Mensagem de boas-vindas com todas as informações (conforme o exemplo da imagem)
    echo "<strong>Cadastro realizado com sucesso!</strong><br>";
    echo "Nome: " . $nome . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Cidade: " . $cidade . "<br>";
    echo "Curso: " . $curso . "<br>";
} else {
    echo "Nenhum dado de cadastro enviado.";
}
?>