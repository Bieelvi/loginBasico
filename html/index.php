<?php include 'header.php'; ?>

<main>
	<form>
		<label for="nickname">Nickname / Apelido</label>
		<input type="text" id="nickname" name="nickname">

		<label for="email">E-mail</label>
		<input type="text" id="email" name="email">
		<label for="confEmail">Confirmar E-mail</label>
		<input type="text" id="confEmail" name="confEmail">

		<label for="senha">Senha</label>
		<input type="text" id="senha" name="senha">
		<label for="confSenha">Confirmar Senha</label>
		<input type="text" id="confSenha" name="confSenha">

		<input type="submit" name="enviar" value="enviar" class="button">
	</form>
</main>

<?php include 'footer.php'; ?>