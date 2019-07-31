<?php
	// Conectar o banco
	require_once '../conexao.php';
	// Recebi o id para a exclusão
	$id = $_GET['id'];
	mysqli_query($conn, "DELETE FROM paciente where idpac = $id");
	mysqli_query($conn);
	// Inserir Confirmação de Exclusão
	
	header('location:../listagem-pac.php');

?>