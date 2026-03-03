<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$destino = "vendas@atcards.com.br";
$assunto = "Novo orçamento - AT Cards";

$corpo = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem: $mensagem";

$headers = "From: $email";

mail($destino, $assunto, $corpo, $headers);

echo "<script>alert('Mensagem enviada com sucesso!'); window.location='index.html';</script>";

?>