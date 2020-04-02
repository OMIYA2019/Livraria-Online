<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Livraria Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--copiado do arquivo links.txt -->

	<!-- CSS compilado e minificado * copiou do links.txt -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Biblioteca jQuery  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--http://localhost/Livraria/ -->
	<!-- JavaScript compilado e minificado -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--ate aqui copiado do arquivo links.txt -->

    <style type="text/css">
    	.navbar{
    		margin-bottom:0;
    	}
    </style>

</head>

<body>
	<!-- criou nav.php, arquivo externo, com codigo do arquivo menu.txt  -->
	<?php
       include 'nav.php';
       include 'cabecalho.html';
	?>
    
<div class="container-fluid">
    <div class="row">
    <!-- criando coluna -->
    <div class="col-sm-3">
    <img src="https://placehold.it/450x320" class="img-responsive"
    style="width:100%">
    <div><h1>Nome do Produto:</div<h1></div>
    <div><h3>Preço do Produto:</h3></div>	
    </div>
    <!-- finalizando coluna -->
     <!-- criando coluna -->
    <div class="col-sm-3">
    <img src="https://placehold.it/450x320" class="img-responsive"
    style="width:100%">
    <div><h1>Nome do Produto:</div<h1></div>
    <div><h3>Preço do Produto:</h3></div>	
    </div>
    <!-- finalizando coluna -->
     <!-- criando coluna -->
    <div class="col-sm-3">
    <img src="https://placehold.it/450x320" class="img-responsive"
    style="width:100%">
    <div><h1>Nome do Produto:</div<h1></div>
    <div><h3>Preço do Produto:</h3></div>	
    </div>
    <!-- finalizando coluna -->
    <!-- criando coluna -->
    <div class="col-sm-3">
    <img src="https://placehold.it/450x320" class="img-responsive"
    style="width:100%">
    <div><h1>Nome do Produto:</div<h1></div>
    <div><h3>Preço do Produto:</h3></div>	
    </div>
    <!-- finalizando coluna -->
</div>

      <?php
       include 'rodape.html';
      
	?>
	
</body>
</html>