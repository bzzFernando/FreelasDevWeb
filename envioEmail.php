<?php
/**
 * Created by PhpStorm.
 * User: rafa-
 * Date: 03/05/2018
 * Time: 14:48
 */

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$email_remetente = "rafa-612@hotmail.com";

$email_destinatario = "fernandormurta@gmail.com"; //
$email_reply = "$email";
$email_assunto = "Contato FreelasDev";


$email_conteudo = "Nome = $nome \n";
$email_conteudo .= "Email = $email \n";
$email_conteudo .= "Telefone = $telefone \n";
$email_conteudo .= "Mensagem = $mensagem \n";


$email_headers = implode ( "\n",array ( "From: $email_remetente",
    "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0",
    "X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );

if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
    echo "<script>window.location='index.html';alert('Contato enviado com sucesso');</script>";
}
else{
    echo "<script>window.location='index.html';alert('Contato não enviado');</script>";
}
?>


