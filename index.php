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
#teste {
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
                                            data-toggle="modal" data-target="#exampleModalCenter"
                                            style="font-weight: 600;">
                                            Esqueceu sua senha?
                                        </button></a>
                                </div>
                                <div class="col-md-6 txt_align">
                                    <a href="cadastro_usuario.php">
                                        <button type="button" class="btn btn-link txt_form_cad"
                                            style="font-weight: 600;">
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

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Esqueceu a senha?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                    <p style="background:rgba(20, 132, 197, 0.5);border-radius:10px;:center;padding:7px;">Sua nova senha foi enviada para o email informado. <br> Cheque sua caixa de spam.</p>
                    <label >Informe seu email para receber um nova senha!</label><br>
                        <div class="row">
                            <div class="col-md-9">
                               
                                <input type="text" class="form-control" placeholder="Informe seu email" name="emailPf">
                                <input type="hidden" name="acao" value="recuperarpf">
                            </div>
                            <div class="col-md-3 centro">
                                <input type="submit" class="btn btn-primary" name="ok"
                                    value="Enviar">
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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