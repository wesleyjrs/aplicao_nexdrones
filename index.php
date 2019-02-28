<?php
session_cache_expire(60);
session_start();
if(isset($_SESSION['usuario'])){
    ?>
    <script type="text/javascript"> window.location.href = "home.php"</script>
    <?php
}else{
    ?>
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
        <?php
        include_once "inc/inc.db_connection.php";
        if(isset($_POST['acao']) && $_POST['acao'] == 'recuperar'){
            $email = $_POST['email'];   
            $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$email'");
            $dado = mysqli_fetch_assoc($sql);            

            if(isset($_POST['ok'])){
                $novasenha = substr(base64_encode(date('i:s')), 0, 6);
                $nscriptografada = base64_encode($novasenha);
            }

            // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
            require 'bibliotecas/phpmailer/PHPMailer/PHPMailerAutoload.php';

            // Inicia a classe PHPMailer
            $mail = new PHPMailer();

            // Define os dados do servidor e tipo de conexão
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->IsSMTP(); // Define que a mensagem será SMTP
            $mail->Host = "mail.nexdrones.com"; // Endereço do servidor SMTP
            $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
            $mail->Username = 'nexdrones@nexdrones.com'; // Usuário do servidor SMTP
            $mail->Password = '142536'; // Senha do servidor SMTP

            // Define o remetente
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->From = "nexdrones@nexdrones.com"; // Seu e-mail
            $mail->FromName = "Nexdrones"; // Seu nome

            // Define os destinatário(s)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->AddAddress("$email");
            //$mail->AddAddress('ciclano@site.net');
            //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
            //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

            // Define os dados técnicos da Mensagem
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
            $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

            // Define a mensagem (Texto e Assunto)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

            $nomeM = $dado['nome'];
            $nome = explode(" ", $nomeM);

            $mail->Subject  = 'Redefinição de senha'; // Assunto da mensagem
            $mail->Body = '	<!DOCTYPE html>
            <html lang="en">

            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            </head>
            <style>
            .alinhamento {
            text-align: center;
            font-size: 20px;
            }

            .cor{
            color: #1483c5;
            }
            </style>

            <body>

            <div class="container" style="padding: 25px; border: 2px solid #c0c0c0; width:90%; border-radius:20px;">


            <h4 class="alinhamento cor">Redefinir Senha</h4>	
            <br><br>				  
            <h1 class="alinhamento "><font class="cor">'. $nome[0] .'</font>, recebemos um pedido de redefinição de senha !</h1>
            <br><br><br>

            <div style="padding:10px;">
            <p class="cor">Sua nova senha é: <font color="black"> '.$novasenha.'</font> </p>				    					        					    
            </div>
            <br><br><br><br>
            <p style="font-size: 13px; text-align: center;"><b>Caso tenha alguma dúvida, ou caso 
            não tenha sido você <br> quem realizou o pedido de redefinição de senha,
            por favor, entre <br> em contato pelo email: <font class="cor"> nexdrones@gmail.com </font>.</b> 
            <br><br><br>
            Atenciosamente: Equipe NEXDRONES</p>
            </div>

            </body>

            </html>';

            //$mail->Body = '<p>
            //Recebemos um pedido de redefinição de senha para este email.<br>
            // Sua nova senha é: '.$novasenha;

            $mail->AltBody = ($nome[0].", recebemos um pedido de redefinição de senha !<br/>\n
            <br/>\n<br/>\n<br/>\n
            Sua nova senha é: ".$novasenha."<br/>\n
            <br/>\n<br/>\n<br/>\n<br/>\n 
            Caso tenha alguma dúvida, ou caso não tenha sido você <br/>\n quem realizou o cpedido de redefinição de senha, por favor, entre <br/>\n em 
            contato pelo email: nexdrones@gmail.com
            <br/>\n<br/>\n<br/>\n 
            Atenciosamente: Equipe NEXDRONES.");


            // Define os anexos (opcional)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo

            // Envia o e-mail
            if($mail->Send()){
                $sql =  "UPDATE usuario SET senha = '$nscriptografada' WHERE email = '$email'";
                $sql_query = mysqli_query($conexao, $sql) or die($conexao->error);

                if($sql_query){
                    $_SESSION['erro'] ='<p style="background:rgba(20, 132, 197, 0.5);border-radius:10px;:center;padding:7px;" id="erro">
                                            Sua nova senha foi enviada para o email informado. <br> 
                                            Cheque sua caixa de spam.
                                        </p>';
                }
            }

            // Limpa os destinatários e os anexos
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();

            

        }
    ?>
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
                <div id="mgn_erro" style="margin:0 auto; position: relative; top: 50px; width: 500px; text-align: center;">
                    <?php
                    if(isset($_SESSION['erro'])){
                        echo $_SESSION['erro'];
                        unset($_SESSION['erro']);
                    ?>
                    <?php
                    }
                    ?>
                </div>
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center txt_form_cad">Login</h3>
                                <div class="form-group">
                                    <label for="username" class="txt_form_cad">Nome</label><br>
                                    <input type="text" name="username" id="username" class="form-control" Placeholder="Digite seu nome">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="txt_form_cad">Senha</label><br>
                                    <input type="text" name="password" id="password" class="form-control" Placeholder="Digite sua senha">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 txt_align">
                                        <a href="#" class="centro">
                                            <button type="button" class="btn btn-link txt_form_cad" id="esqueceu_senha" data-toggle="modal" data-target="#exampleModalCenter" style="font-weight: 600;">
                                                Esqueceu sua senha?
                                            </button>
                                        </a>
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
                        
                            
                        
                        <label >Informe seu email para receber um nova senha!</label><br>
                            <div class="row">
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Informe seu email" name="email">
                                    <input type="hidden" name="acao" value="recuperar">
                                </div>
                                <div class="col-md-3 centro">
                                    <input type="submit" class="btn btn-primary" name="ok" value="Enviar">
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
    </body>
    
    </html>

    <?php
}
?>
