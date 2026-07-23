<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $curso = htmlspecialchars($_POST['curso']);
    $idade = htmlspecialchars($_POST['idade']);

    echo "<h2>Dados exibidos em uma nova página (POST):</h2>";
    echo "Nome: " . $nome . "<br>";
    echo "Curso: " . $curso . "<br>";
    echo "Idade: " . $idade . " anos<br>";
} else {
    echo "Por favor, envie o formulário primeiro.";
}
?>