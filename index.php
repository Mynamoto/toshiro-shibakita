<?php
/*
 * Aplicação de Exemplo - AWS Docker
 * 
 * Funcionalidade:
 * - Conecta ao banco de dados MySQL
 * - Insere registro com dados aleatórios
 * - Exibe versão do PHP e status da operação
 */

// Configurações de exibição de erros
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

// Credenciais do banco de dados (ATENÇÃO: Substituir por variáveis de ambiente em produção)
$servername = "54.234.153.24"; // IP do servidor MySQL
$username = "root";            // Usuário (não recomendado para produção)
$password = "Senha123";        // Senha (armazenar com segurança em produção)
$database = "meubanco";        // Nome do banco

// Conexão com o banco
$link = new mysqli($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// Geração de dados aleatórios para teste
$valor_rand1 = rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();

// Query de inserção (Vulnerável a SQL Injection - corrigir em produção)
$query = "INSERT INTO dados (...) VALUES (...)";

if ($link->query($query) {
    echo "New record created successfully";
} else {
    echo "Error: " . $link->error;
}
?>
