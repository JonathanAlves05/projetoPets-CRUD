<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbPets WHERE codPet = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}



?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Pet</h3>
			
			<form action="php_action/alterar_pets.php" method="POST">

				<input type="hidden" name = "codPet" value="<?php echo $dados['codPet']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nomePet" id="nomePet" value="<?php echo $dados['nomePet']; ?>">
					<label for="nomePet">Nome do animal</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="racaPet" id="racaPet" value="<?php echo $dados['racaPet']; ?>"
					>
					<label for="racaPet">Raça do animal</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="nomeDono" id="nomeDono" value="<?php echo $dados['nomeDono']; ?>">
					<label for="nomeDono">Nome do tutor</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="telDono" id="telDono" value="<?php echo $dados['telDono']; ?>">
					<label for="telDono">Telefone para contato</label>
				</div>

				
				<div class="input-field col s12">
					<input type="text" name="cpfDono" id="cpfDono" value="<?php echo $dados['cpfDono']; ?>">
					<label for="cpfDono">CPF</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de Pets</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>