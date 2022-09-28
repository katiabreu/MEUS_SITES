<?php
	$title = "Aula 02 de PHP";
	$tituloTutorial1 = "Aplicando conceitos de Herança com PHP";
	$textoTutorial1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
	$imgTutorial1 = "img/bd1.jpg";

	$tituloTutorial2 = "Aplicando conceitos de Herança com PHP";
	$textoTutorial2 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 2500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 2960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
	$imgTutorial2 = "img/bd3.png";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Tutoriais</a></li>
				<li><a href="#">Artigos</a></li>
				<li><a href="#">Suporte</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<section>
			<header>
				<h1></h1>
				<p></p>
			</header>
			<article>
				<img src=<?=$imgTutorial1;?> width="300px">
				<h2><?=$tituloTutorial1;?></h2>
				<p><?=$textoTutorial1;?></p>
			</article>
			<article>
				<img src=<?=$imgTutorial2;?> width="300px">
				<h2><?=$tituloTutorial2;?></h2>
				<p><?=$textoTutorial2;?></p>
			</article>
			<article>
				<img src=<?=$imgTutorial1;?> width="300px">
				<h2><?=$tituloTutorial1;?></h2>
				<p><?=$textoTutorial1;?></p>
			</article>
		</section>
	</main>

	<footer>
	<!-- preparar o footer -->
	</footer>
</body>
</html>