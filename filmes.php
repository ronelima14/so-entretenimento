<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filmes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/filmes.css" />
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
          
    	<?php
    		@include 'includes/header.php';
    	?>
    <div class="container">
        
        <article class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <a href="padrao-noticia.php"> <h4>Em cartaz</h4> </a>        
            <img src="images/jogos-vorazes-poster4.jpg" class="img-responsive">
            <h2> <a href="padrao-noticia.php">A batalha final vai começar!</a></h2>
           <p>Cras quis nunc vel odio posuere egestas. Suspendisse potenti. Sed vel lacus turpis. Donec vel iaculis orci. </p>
                
        </article>
        
        <section id="noticia" class="col-xs-12  col-sm-4 col-md-4 col-lg-4">
          <a href="padrao-noticia.php"><h4>Notícias</h4></a>
              
          <img src="images/self-noticia.jpg" alt="" class="img-responsive">
          <img src="images/premier01-noticia.jpg" alt="" class="img-responsive col-md-6">
          <img src="images/premier02-noticia.jpg" alt="" class="img-responsive col-md-6">
            <a href="padrao-noticia.php">  <p class="text-justify">Elenco de Jogos Vorazes se reúne em premiere e exibem elegância, com direito a big Selfie</p></a>
        </section>

        <section id="em-breve" class="col-sm-12 col-md-8 col-lg-8" >
           <a href="padrao-noticia.php"> <h4>Em breve</h4></a>
           <a href="padrao-noticia.php"> <img src="images/tris-convergente.jpg" alt="" class="img-responsive" ></a>
            <p>Cras quis nunc vel odio posuere egestas. Suspendisse potenti. Sed vel lacus turpis. Donec vel iaculis orci, in ultrices metus. Aenean ac viverra nisl, a dapibus nibh. Aliquam cursus tristique lorem id laoreet. Donec semper turpis sed ligula blandit viverra. Phasellus sapien mi, cursus varius maximus non, sollicitudin nec arcu. </p>
        </section>
        
        
        <!--Aqui começa a sessão de bilheterias-->
        
        <section class="col-xs-12 col-sm-4 col-md-4 col-lg-4">    
            <h4><a href="padrao-noticia.php">Bilheterias</a></h4> 
            <div class="row">
            <div class="col-md-3 col-sm-12">
                <a href="padrao-noticia.php"> <img src="images/007-contra-spectre-poster.jpg" alt="" class="img-responsive"></a>
            </div>
            <div class="col-md-9">
               <b><p class="negrito">007 Contra Spectre</p></b>
               <p>SONY PICTURES</p>
               <a href="https://www.youtube.com/watch?v=sYp6GpBlb7I"target="_blank">Veja o Trailer</a>
            </div>
            </div>
           <div class="row">
            <div class="col-md-3 col-sm-12">
            <a href="padrao-noticia.php"><img src="images/jogos-vorazes-poster.jpg" alt="" class="img-responsive"></a>
            </div>
            <div class="col-md-9">
                <b><p class="negrito">Jogos Vorazes: A Esperança-Parte2</p></b>
                <p>PARIS FILMES</p>
                <a href="https://www.youtube.com/watch?v=0al2icizjqY" target="_blank">Veja O Trailer</a>
            </div>
            </div>
            
            <div class="row">
            <div class="col-md-3 col-sm-12">
            <a href="padrao-noticia.php"> <img src="images/alianca-do-crime.jpg" alt="" class="img-responsive"></a>
            </div>
            <div class="col-md-9">
                <b><p>A Aliança do Crime</p></b>
                <p>WARNER BROS</p>
                <a href="https://www.youtube.com/watch?v=1PnSLtBnh7E" target="_blank">Veja o Trailer</a>
            </div>
            </div>
            
           <div class="row">
            <div class="col-md-3 col-sm-12">
            <a href="padrao-noticia.php"><img src="images/o-reino-gelado-2.jpg" alt="" class="img-responsive"></a>
            </div>
            <div class="col-md-9">
                <b><p>O Reino Gelado 2</p></b>
                <p>CALIFORNIA FILMES</p>
                <a href="https://www.youtube.com/watch?v=SDVfzWXcYXk" target="_blank">Veja o Trailer</a>
            </div>
            </div>
                    
        </section>
        
         <!--Aqui termina a sessão de bilherias-->
        
         <!--Aqui começa a sessão de críticas-->
        <div class="row">
         <section id="criticas">
         
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <a href="padrao-noticia.php"><h4>Últimas Críticas</h4></a>           
            <img src="images/o-reino-gelado-2.jpg" alt="" class="img-responsive" >
                <p>Cras quis nunc vel odio posuere egestas, sollicitudin nec arcu.</p>
        </div>
            
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <h4 class="fonteb">Poltergeist</h4>            
            <img src="images/ponte-dos-espioes.jpg" alt="" class="img-responsive">
                <p>Cras quis nunc vel odio posuere egestas, sollicitudin nec arcu.</p>
        </div>
        </section>
        
        
        
        <section id="lancamentos">
        
        <div  class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <a href="padrao-noticia.php"> <h4>Lançamentos</h4></a>          
            <img src="images/ferias-frustradas.jpg" alt="" class="img-responsive" >
                <p>Cras quis nunc vel odio posuere egestas, sollicitudin nec arcu.</p>
        </div>
        
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <h4 class="fonteb">Divertidamente</h4>
            <img src="images/divertida-mente.jpg" alt="" class="img-responsive">
                <p>Cras quis nunc vel odio posuere egestas, sollicitudin nec arcu.</p>
        </div>
        </section>    
             
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <section id="publicidade">
            <a href="http://globosatplay.globo.com/telecine/conheca/" target="_blank"><h4>Publicidade</h4></a>
            <a href="http://globosatplay.globo.com/telecine/conheca/" target="_blank"> <img src="images/publicidade-telecine.jpg" alt="" class="img-responsive"> </a>
        </section>
        </div>
             
        </div>
        
        
    </div>
<?php
    @include "includes/footer.php";
?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>