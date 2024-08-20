<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo Pet</h3>
			
			<form action="php_action/criar_pets.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="nomePet" id="nomePet">
					<label for="nomePet">Nome do animal</label>
				</div>

				
				<div class="input-field col s12">
					<input type="text" name="racaPet" id="racaPet">
					<label for="racaPet">Raça do animal</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="nomeDono" id="nomeDono">
					<label for="nomeDono">Nome do tutor</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="telDono" id="telDono">
					<label for="telDono">Telefone para contato</label>
				</div>
				

				<div class="input-field col s12">
					<input type="text" name="cpfDono" id="cpfDono">
					<label for="cpfDono">CPF </label>
				</div>

				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de Pets</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>