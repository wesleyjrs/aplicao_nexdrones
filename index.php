<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bibliotecas/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo_mobile.css">
    <link rel="icon" type="imagem/png" href="imagens/drone.png">


    <title>Login | Nexdrones</title>

</head>

<style>
    #teste  {
  background: url('imagens/fundo_login.jpg') center center no-repeat fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;


    }
</style>

<body id="teste">

    <div id="login" style="margin-top:50px;">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center txt_form_cad">Login</h3>
                            <div class="form-group">
                                <label for="username" class="txt_form_cad">Nome</label><br>
                                <input type="text" name="username" id="username" class="form-control"
                                    Placeholder="Digite seu nome">
                            </div>
                            <div class="form-group">
                                <label for="password" class="txt_form_cad">Senha</label><br>
                                <input type="text" name="password" id="password" class="form-control"
                                    Placeholder="Digite sua senha">
                            </div>
                            


                            <div class="row">
                                <div class="col-md-6 txt_align">
                                    <a href="#" class="centro">
                                        <button type="button" class="btn btn-link txt_form_cad" id="esqueceu_senha"
                                            style="font-weight: 600;">
                                            Esqueceu sua senha?
                                        </button></a>
                                </div>
                                <div class="col-md-6 txt_align">
                                <a href="cadastro_usuario.php">
                                    <button type="button" class="btn btn-link txt_form_cad" style="font-weight: 600;">
                                        Efetuar cadastro
                                    </button>
                                </a>


                            </div>

                            <div class="form-group centro">
                                <input type="submit" name="submit" class="btn btn-primary btn-md" value="Entrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="bibliotecas/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>