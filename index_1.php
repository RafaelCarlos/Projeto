<?php
include_once './cabecalho.php';
?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="Paginas Web/resource/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="Paginas Web/resource/css/Site.css" rel="stylesheet" type="text/css" />
    <link href="Paginas Web/resource/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="Paginas Web/resource/css/jasny-bootstrap.css" rel="stylesheet" type="text/css" /></link>
    <script type="text/javascript" src="Paginas Web/resource/bootstrap-3.3.4-dist/js/jquery/jquery-2.1.3.min.js"></script>
    <script src="Paginas Web/resource/bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="Paginas Web/resource/bootstrap-3.3.4-dist/js/jquery/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="Paginas Web/resource/bootstrap-3.3.4-dist/jquery.js" type="text/javascript"></script>

<script type="text/javascript">
            /* Máscaras ER */
            function mascara(o, f) {
                v_obj = o
                v_fun = f
                setTimeout("execmascara()", 1)
            }
            function execmascara() {
                v_obj.value = v_fun(v_obj.value)
            }
            function mtel(v) {
                v = v.replace(/\D/g, "");             //Remove tudo o que não é dígito
                v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
                v = v.replace(/(\d)(\d{4})$/, "$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
                return v;
            }
            function id(el) {
                return document.getElementById(el);
            }
            window.onload = function () {
                id('telefone').onkeyup = function () {
                    mascara(this, mtel);
                }
            }
        </script>

</head>

<body>


    <form  method="post" action="src/controller/Login.php" id="formlogin" name="formlogin" >
        <div class="container">
            <div class="jumbotron">
                <h1 align="center">Compras Coletivas</h1>
            </div>
            <div class="container col-md-4">
                <label>Login: </label>
                <input type="text" name="login" id="login" autofocus required  class="form-control col-md-5"  /><br />

                <label>Senha:</label>
                <input type="password" name="senha" id="senha" required class="form-control"/><br />



                <button id="entrar" name="entrar" type="submit" class="btn btn-primary" >Entrar</button>
                <a href="#"  data-toggle="modal" data-target="#myModal">Cadastre-se </a>

            </div>
    </form>

    <form  method="post" action="operacao.php" id="formdialog" name="formdialog" >

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" 
                                data-toggle="tooltip" data-placement="top" title="Fechar"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cadastro</h4>
                    </div>
                    <div class="modal-body">
                        <label>Nome: </label>
                        <input type="text" name="nomecadastro" id="nomecadastro" autofocus required  class="form-control col-md-5"  
                               data-toggle="tooltip" data-placement="top" title="Digite seu nome completo!"/><br />

                        <label>Email:</label>
                        <input type="email" name="emailcadastro" id="emailcadastro" required class="form-control"
                               data-toggle="tooltip" data-placement="top" title="Digite seu email"/><br />

                        <label>Telefone:</label>
                        <input for="telefone" type="tel"name="telefone" id="telefone" required class="form-control" placeholder="(99) 9999-9999" maxlength="15" 
                               data-toggle="tooltip" data-placement="top" title="Digite apenas números!"/><br />



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Cancelar">Cancelar</button>
                        <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Cadastrar">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
    

    <?php
    if ($_GET["erro"] == 1) {
        echo "Login e/ou Senha Incorretos!";
    } else if ($_GET["erro"] == 2) {
        echo "Acesso não permitido!";
    }
    ?>

</body>
</html>