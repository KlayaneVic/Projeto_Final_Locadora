<nav class="navbar-header" style="background-color: black; opacity: 1; padding: 10px; ">

	<div class="row">

		<div class="column"><img src="img/logo.png" alt="" style="height: 6em; width: 18em; align: center;"></div>
		<div class="column">
		<form action="pesquisa_filtrada_usu.php" method="POST" />
				<input style="margin-left: 30em; margin-top: 2em; type="search" id="divBusca" name="pesquisa" 
				placeholder="Pesquisar Filme por Nome..." aria-label="Pesquisar">
				
				<input type="submit" class="btn btn-outline-success" value="Buscar"/>
		</form>
		</div>
		<div class="column">
		<select name="select" onchange="location = this.value;" style=" margin-left: 2em; margin-top: 2em; background-color: black; 
		color: white; border-radius: 15px; padding: 0.5em; opacity: 0.9; text-align: center; color: white; font-family: 'Times New Roman', Times, serif;"">
					
					<option selected hidden >Menu</option>
					<option value="home_usu.php">Pagina Inicial</option>
					<option value="listar_filmes_usu.php">Todos os Filmes</option>
					<option value="sair.php">Sair</option>
		</select>
		</div>
	</div>
</nav>