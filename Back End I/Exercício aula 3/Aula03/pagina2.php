<?php
	include("dados.php");
	//var_dump($tutoriais);//utilizei para testar o conteúdo recebido
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
				<li><a href="#" title="Tutoriais" alt="Tutoriais">Tutoriais</a></li>
				<li><a href="#" title="Artigos" alt="Artigos">Artigos</a></li>
				<li><a href="#" title="Suporte" alt="Suporte">Suporte</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Nosso Ultimos tutoriais</h1>
				<p>Desfrute dos tutoriais, eles vão lhe auxiliar nesta caminhada!</p>
			</header>
			<?php
                $id = $_GET['id'];//na próxima aula iremos realizar a validação deste valor
                echo "id = " . $id;

				foreach($tutoriais as $key => $value){
                    if($value['id'] == $id){
			?>
			<article><!-- é necessário melhorar o css desta parte-->
				<a href="#"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['descricao'];?></p>
			</article>
			<?php
                    }
				}
			?>
			
		</section>


        <section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Ver outros Tutoriais</h1>
				<p>xxxxx</p>
			</header>
			<?php
				foreach($tutoriais as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><?=$value['titulo'];?></h2>
	    	</article>
			<?php
                    }
				}
			?>
			
		</section>



		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<!-- preparar o footer -->
	</footer>
</body>
</html>