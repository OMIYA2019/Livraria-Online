<!-- copiou de menu.txt  -->
	<nav class="navbar navbar-default"> <!-- abrindo a class nav -->
		<div class="container-fluid"> <!-- container fluido -->   
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<!-- botão hamburger -->
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Livraria Online</a> <!-- nome do site -->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

         <!--        <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>

        FOI REMOVIDO A CLASSE ACTIVE -->

                          
				<ul class="nav navbar-nav">
					<!-- Retirado classe active e alterado para href="index.php" -->
					<li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>

        <!--  alterado para <li><a href="#">Link</a></li>  -->
					<li><a href="lanc.php">Lançamentos</a></li>

					<li class="dropdown">

                      <!--
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>

                       Dropdown trocado por Categorias -->

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>

<!--
 <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>

           a classe dropdown-menu foi alterado

-->


						<ul class="dropdown-menu">
							<li><a href="categorias.php">Design</a></li>
							<li><a href="categorias.php">Infraestrutura</a></li>
							<li><a href="categorias.php">Dados</a></li>
							<li><a href="categorias.php">Mobile</a></li>							
						</ul>

					</li>
				</ul>

<!--
 <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">   ==>alterado de Search para Buscar
        </div>
        <button type="submit" class="btn btn-default">Submit</button> ==>alterado de Submit para Procurar
      </form>
-->

				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>					
					<button type="submit" class="btn btn-default">Procurar</button>
				</form>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="Contato.php">Contato</a></li>
<!--
 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>

        foi removido a classe dropdown, pois não iremos utilizar

-->
					<li><a href="#"><span class="glyphicon glyphicon-log-in"> Logon</span></a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav> <!-- fechando a classe nav -->