<?php
// Parte 1 — Variáveis e Echo

$nome = "Seu Nome Aqui"; 
$curso = "GTI"; 

echo "<h2>Parte 1 - Informações Iniciais</h2>";
echo "Olá, meu nome é $nome e eu faço o curso de $curso.<br>";
echo "<hr>"; 
?>

<h2>Parte 2 & Desafio Extra - Formulário</h2>

<form method="POST" action="">
    <label for="nome">Digite seu nome:</label>
    <input type="text" id="nome" name="nome" required>
    
    <button type="submit">Enviar</button>
</form>

<?php
// Desafio Extra — Captura e Mensagem Personalizada

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['nome'])) {
        
        echo "<br><h3>Resultado do Desafio:</h3>";

        echo "Bem-vindo(a), {$_POST['nome']}!<br>";
        echo "Você está no curso de $curso.";
        
    }
}
?>