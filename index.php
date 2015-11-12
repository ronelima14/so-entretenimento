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
    		@include "includes/nav.php";
    	?>
    <div class="container">
        <!-- main -->
        <article>
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
        </article>
        <!-- side main -->
        <section>
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        </section>
        <div class="clearfix"></div>
        <!-- categories -->
        <!-- movies -->
        <section>
            <h1>Filmes</h1>
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hidden-xs hidden-sm">
        </section>
        <!-- TV -->
        <section>
            <h1>TV</h1>
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hidden-xs hidden-sm">
        </section>
        <!-- HQ -->
        <section>
            <h1>HQs</h1>
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hidden-xs hidden-sm">
        </section>
        <!-- Lazer -->
        <section>
            <h1>Lazer</h1>
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hidden-xs hidden-sm">
        </section>
        <!-- Música -->
        <section>
            <h1>Música</h1>
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <img src="images/img.jpg" alt="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hidden-xs hidden-sm">
        </section>
    </div>
<?php
    @include "includes/footer.php";
?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>