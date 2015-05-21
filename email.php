<!doctype html>

<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="De: $name\nMensagem: $message";
$recipient = "fsdias@computacao.ufla.br";
$subject = "Contato SETI";
$mailheader = "De: $email \r\n";
mail($recipient, $subject	, $formcontent, $mailheader) or die("Error!");
?>


<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
        <link rel="stylesheet" href="css/styles.css" />
        <script src="jquery-2.1.4.min.js"></script>
        <script src="jquery_countdown.js"></script>    
        <link href="elements.css" rel="stylesheet">
<script src="my_js.js"></script>
    <title>SETI - Semana de Tecnologia da Informação - DCC/UFLA </title>
    
    <link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/coming-sssoon.css" rel="stylesheet" />    
    
    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  
</head>

<body>
<nav class="navbar navbar-transparent navbar-static-top" role="navigation">  
<div class="topo"></div>
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                
                Home 
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Contato</a></li>
              </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
             
             <li>
                <a href="#"> 
                    <i class="fa fa-envelope-o "onclick="div_show()" ></i>
                    <span id="bcontato" onclick="div_show()">Contato</button>
                </a>
            </li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<div class="main" style="background-image: url('img/background.png')">

<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">

        

        <div class="logo"><img src="img/logoSeti.png"/></div>

        <h1>II Semana da Tecnologia da Informação</h1>
        <h2>Universidade Federal de Lavras</h2>
        <h3>24 a 30 de Agosto | 2015</h3>

        <img src="img/divisor.png"/>

    <div id="abc">
        <!-- Popup Div Starts Here -->
        <div id="popupContact">
            <!-- Contact Us Form -->
            <form action="email.php" id="form" method="POST" name="form">
                <img id="close" src="img/3.png" onclick ="div_hide()">
                <h3 id="titulocontato">Contate-nos!</h3>
                <hr>
                <input id="name" name="name" placeholder="Nome" type="text">
                <input id="email" name="email" placeholder="Email" type="text">
                <textarea id="msg" name="message" placeholder="Mensagem"></textarea>
                <a href="javascript:%20check_empty()" id="submit">Enviar</a>
            </form>
        </div>
    <!-- Popup Div Ends Here -->
    </div>  
        <!-- CONTADOR -->
        <div id="contador"></div>
         <script type="text/javascript">
            $('#contador').countdown('2015/08/24', function(event) {
                var $this = $(this).html(event.strftime(''
                + '<span id="dia">%D</span> <span class="sep">:</span> '
                + '<span id="d">Dias</span> '
                + '<span id="hora">%H</span> <span class="sep">:</span> '
                + '<span id="h">Horas</span> '
                + '<span id="min">%M</span> <span class="sep">:</span> '
                + '<span id="m">Minutos</span> '
                + '<span id="seg">%S</span> '
                + '<span id="s">Segundos</span> '));
            });
         </script>
        <!-- FIM CONTADOR -->

    <footer>
            <div class="organizador">Organização:</div>
            <img class="organizador" src="img/ufla.png">
            <img class="organizador" src="img/dcc.png">
            <img class="organizador" src="img/compjunior.png">
            <img class="organizador" src="img/peti.png">
            <img class="organizador" src="img/cacc.png">
            <img class="organizador" src="img/casi3.png">
        </footer>
    </div><div class="cidade"><img src="img/cidade.png"></div>  
        
        
    <div class="footer">
      
    </div>
 </div>
 </body>
   <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
   <script src="js/bootstrap.min.js" type="text/javascript"></script>

</html>
