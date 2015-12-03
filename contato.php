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
</head>
<body>
    
    	<?php
    		@include "includes/header.php";
    	?>
    <div class="container">
        <article class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <form role="form" class="form-contact">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control">
                </div>
                <div class="form-group">
                    <label>Assunto</label>
                    <input class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label" for="textarea">Mensagem</label>                    
                    <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">Receber novas notícias</label>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </article>
        
    </div>
<?php
    @include "includes/footer.php";
?>
</body>
</html>