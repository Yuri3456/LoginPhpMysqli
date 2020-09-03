<?php
include 'Conexao.php';

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];


//$sql = "INSERT INTO `cadastrar`(`nome`, `email`, `senha`) VALUES (:nome, :email, :senha)";
$sql = "INSERT INTO `cadastrar`(`nome`, `email`, `senha`) VALUES (:nome,:email,:senha)";
$result = $db->prepare($sql);
$exec = $result->execute(array(":nome"=>$nome, ":email"=>$email, ":senha"=>$senha));
//$exec = $result->execute(array(":ent1"=>$ent1, ":ent2"=>$ent2));

if($exec){
    header('Location: ../Bem_Vindo.html');
}else{
    echo "<a href='../DOCTYPE_html.html'>VOLTAR</a>";
}