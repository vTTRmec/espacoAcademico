<?php 

session_start();

$login = $_POST["usuario"];
$senha = $_POST["senha"];


if($login == "aluno" &&
   $senha == 123){
	header("location: aluno.php");
} else if($login == "professor" &&
   $senha == 123){
	header("location: professor.php");
}

?>