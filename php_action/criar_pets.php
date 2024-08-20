<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {

		//sanitização
		
		$nomePet = mysqli_escape_string($connection,$_POST['nomePet']);
		$racaPet = mysqli_escape_string($connection,$_POST['racaPet']);
		$nomeDono = mysqli_escape_string($connection,$_POST['nomeDono']);
		$telDono = mysqli_escape_string($connection,$_POST['telDono']);
		$cpfDono = mysqli_escape_string($connection,$_POST['cpfDono']);

		$sql = "INSERT INTO tbPets(nomePet,racaPet,nomeDono,telDono,cpfDono)VALUES('$nomePet','$racaPet','$nomeDono','$telDono','$cpfDono')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
