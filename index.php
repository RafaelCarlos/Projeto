

<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <title>Login</title>
        
        
        
        <link href="resources/css/jasny-bootstrap.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="resources/mascaraTelefone.js" ></script>
        <script src="resources/js/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="resources/js/jquery/jquery.js" type="text/javascript"></script>
        <script src="resources/js/jquery/jquery.maskedinput.js" type="text/javascript"></script>

        <link rel="stylesheet" href="resources/css/style.css" media="screen" type="text/css" />

    </head>

    <body>

        <span href="#" class="button" id="toggle-login">Log in</span>
                 
        <div id="login">
            <div id="triangle"></div>
            <h1>Log in</h1>
            <form  method="post" action="login.php" id="formlogin" name="formlogin" >
                <input name="login" autofocus required type="text" placeholder="Email" />
                <input id="senha" name="senha" type="password" placeholder="Password" />
                <input type="submit" value="Log in" />
                <a href="#" >Esqueci minha senha</a> </br>
                </br> 

                <a href="#"  data-toggle="modal" data-target="#myModal">Cadastre-se </a>
            </form>


        </div>
       

        <script src="resources/js/jquery.js"></script>

        <script src="resources/js/index.js"></script>


        <?php
        if ($_GET["erro"] == 1) {
            echo "Login e/ou Senha Incorretos!";
        } else if ($_GET["erro"] == 2) {
            echo "Acesso não permitido!";
        }
        ?>

    </body>

</html>



