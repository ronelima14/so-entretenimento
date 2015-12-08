<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Só Entretenimento</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/hq.css">
</head>
<body>
    
    	<?php
    		@include "includes/header.php";
    	?>
    <div class="container">
        <!-- main -->
        <article class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            
        <section>
            <h5 class="text-center hq-texto">DC X MARVEL</h5>
            <a href="hq-gibi1.php"><img src="images/hq-capa3.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
            <a href="padrao-noticia.php"><img src="images/hq-capa2.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
            <a href="padrao-noticia.php"><img src="images/hq-capa1.jpg" alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
            <a href="padrao-noticia.php"><img src="images/hq-capa4.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
        </section>
      
            
        <section>
            <h5 class="text-center hq-texto">VARIADOS</h5>
            <a href="padrao-noticia.php"><img src="images/hq-capa8.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
            <a href="padrao-noticia.php"><img src="images/hq-capa6.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
            <a href="padrao-noticia.php"><img src="images/hq-capa7.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
            <a href="padrao-noticia.php"><img src="images/hq-capa5.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
        </section>
        
           
        <section>
            <h5 class="text-center hq-texto">MANGÁS</h5>
            <a href="padrao-noticia.php"><img src="images/hq-capa12.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
            <a href="padrao-noticia.php"><img src="images/hq-capa10.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
            <a href="padrao-noticia.php"><img src="images/hq-capa11.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
            <a href="padrao-noticia.php"><img src="images/hq-capa9.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></a>
        </section>
        
            
        <section>
            <h5 class="text-center hq-texto">EVENTOS</h5>
            <a href="padrao-noticia.php"><img src="images/hq-evento1.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-4"></a>
            <a href="padrao-noticia.php"><img src="images/hq-evento2.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-4"></a>
            <a href="padrao-noticia.php"><img src="images/hq-evento3.jpg"  alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-3 col-lg-4"></a>
        </section>
        
        </article>

        <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <h2 class="text-center hq-tittlea">DESTAQUE DO DIA!</h2>
                 <a href="http://localhost/integrador/padrao-noticia.php"><img src="images/hq-destaque.jpg" alt="imagem de teste" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></a>
                 <section class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
                   <h3 class="hq-tittleb">Guerra Civil</h3>
                   <h4 class="hq-tittlec">Moore, Stuart</h4>
                   <h4>Sobre o Produto</h4>
                   <p>A épica história que provoca a separação do Universo Marvel. 
                   Homem de Ferro e Capitão América: dois membros essenciais para os Vingadores, 
                   a maior equipe de super-heróis do mundo. Quando uma trágica batalha deixa um buraco na cidade de Stamford, 
                   atando centenas de pessoas, o governo americano exige que todos os super-heróis revelem sua identidade
                    e registrem seus poderes...</p>
                    <button class="btn btn-default" type="submit">Veja Mais</button>
                 </section>
        </aside>
</div>
<?php
    @include "includes/footer.php";
    @include "includes/scripts.php";
?>

</body>
</html>