<?php

$nome = $_POST['name'];
$tel = $_POST['telefone'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

if (!empty($nome) & !empty($tel) & !empty($email) & !empty($assunto) & !empty($mensagem)){
    echo "<script type='text/javascript'>alert('Todos os campos estão preenchidos!')</script>";
    echo "click para retornar: <button><a href='index.php'>Retornar</a></button>";
    
} else {
    echo "<script type='text/javascript'>alert('Por favor, preencha todos os campos!')</script>";
    echo "click para retornar: <button><a href='index.php'>Retornar</a></button>";
}