<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TV</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/tv.css">
</head>
<body>
    
    	<?php
    		@include "includes/header.php";
    	?>
    <div class="container">
        <!-- main -->
        <article class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        	<h1>HISTORIA DA TV</h1>
            <img src="images/tv-historia-tv-antiga.png" alt="imagem de uma das primeiras tvs com imagem preto e branco" class="img-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur laborum architecto alias debitis, 
            	impedit pariatur! Quaerat, vel? Amet labore neque, dolor repellendus ab earum asperiores. 
            	Fuga praesentium ut a amet.</p>
            <h3>Trama</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur laborum architecto alias debitis, 
            	impedit pariatur! Quaerat, vel? Amet labore neque, dolor repellendus ab earum asperiores. 
            	Fuga praesentium ut a amet.</p>
            <h3>Sucesso</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur laborum architecto alias debitis, 
            	impedit pariatur! Quaerat, vel? Amet labore neque, dolor repellendus ab earum asperiores. 
            	Fuga praesentium ut a amet.</p>
            <h3>Curiosidades</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur laborum architecto alias debitis, 
            	impedit pariatur! Quaerat, vel? Amet labore neque, dolor repellendus ab earum asperiores. 
            	Fuga praesentium ut a amet.</p>
                <img src="images/tv-historia-tv-nova.png" alt="imagem de uma tv grande moderna de tela curva resolução 4k" class="img-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12">
        </article>
        <aside class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="container related-container">
                <h2 class="text-center">Relacionados</h2>
            </div>
            <a href="tv-novela.php"><img src="images/tv-novela-o-clone.jpg" alt="imagem de teste" class="img-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p> <h4 class="text-center tv-title">NOVELA </h4></p></a>
            <a href="tv-series.php"><img src="images/tv-serie-lista-negra.jpg" alt="imagem de teste" class="img-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p ><h4 class="text-center tv-title">SERIES</h4></p></a>
            
            <a href="tv-humor.php"><img src="images/tv-humor-a-praça-e-nossa.jpg" alt="imagem de teste" class="img-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12">
            	<p><h4 class="text-center tv-title">HUMOR</h4></p></a>
            <a href="http://www.skyassine.tv.br/?gclid=CIzU5-rpyckCFRAFkQodMAcBwQ">
            	<img src="images/tv-propaganda-sky.jpg" alt="imagem propaganda de tv por assinatura sky" class="img-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12">
            </a>
             <iframe  src="https://www.youtube.com/embed/EM9fE6dxpmw" frameborder="0" allowfullscreen></iframe> 
             <p><a href="https://www.youtube.com/embed/EM9fE6dxpmw">Assista no youtube </a></p>
            
        </aside>
        <!-- TV -->
        
    </div>
<?php
    @include "includes/footer.php";
    @include "includes/scripts.php";
?>
</body>
</html>