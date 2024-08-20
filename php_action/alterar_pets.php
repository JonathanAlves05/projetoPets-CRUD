<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nomePet = mysqli_escape_string($connection,$_POST['nomePet']);
		$racaPet = mysqli_escape_string($connection,$_POST['racaPet']);
		$nomeDono = mysqli_escape_string($connection,$_POST['nomeDono']);
		$telDono = mysqli_escape_string($connection,$_POST['telDono']);
		$cpfDono = mysqli_escape_string($connection,$_POST['cpfDono']);
		$codPet = mysqli_escape_string($connection,$_POST['codPet']);

		$sql = "UPDATE tbPets SET nomePet = '$nomePet', racaPet = '$racaPet', nomeDono = '$nomeDono', telDono = '$telDono', cpfDono = '$cpfDono' WHERE codPet = '$codPet'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
