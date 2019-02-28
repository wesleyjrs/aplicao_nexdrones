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


    <title>Minha conta</title>

</head>

<body>
    <?php include("nav_bar.php"); ?>

    <?php 
        include_once("db_connection.php");
        
        $id = $_SESSION['id'];

        $select = mysqli_query($conexao, "SELECT * FROM usuario WHERE id = '$id'");
        $linha = mysqli_fetch_assoc($select);
        ?>

    <div class="container" style="margin-top:100px;margin-bottom:100px;">

        <div class="row">
            <div class="container">
                <div class="row">
                    <div id="form_cad" class="container">
                        <form action="#" method="post">
                            <h3 class="txt_align"
                                style="margin-bottom:15px;color:#fff;padding-bottom:20px;text-decoration:underline;">
                                Alterar Dados Pessoais</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome" class="label">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome"
                                        value="<?php echo $linha['nome'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="<?php echo $linha['email'] ?>">
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="endereco" class="label">Endereço</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco"
                                        value="<?php echo $linha['endereco'] ?>">

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cep" class="label">Cep</label>
                                    <input type="text" class="form-control" id="cep" name="cep"
                                        value="<?php echo $linha['cep'] ?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="numero" class="label">Numero</label>
                                    <input type="text" class="form-control" id="numero" name="numero"
                                        value="<?php echo $linha['numero'] ?>">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="bairro" class="label">Bairro</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro"
                                        value="<?php echo $linha['bairro'] ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cidade" class="label">Cidade</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade"
                                        value="<?php echo $linha['cidade'] ?>">


                                </div>
                                <div class="form-group col-md-4">
                                    <label for="estado" class="label">Estado</label>
                                    <select id="estado" name="estado" class="form-control">
                                        <?php $tipo = $linha['estado'];?>
                                        <option value="">Selecione</option>
                                        <option value="AC" <?php echo $tipo=='AC' ?'selected':'';?>>Acre</option>
                                        <option value="AL" <?php echo $tipo=='AL' ?'selected':'';?>>Alagoas</option>
                                        <option value="AP" <?php echo $tipo=='AP' ?'selected':'';?>>Amapá</option>
                                        <option value="AM" <?php echo $tipo=='AM' ?'selected':'';?>>Amazonas</option>
                                        <option value="BA" <?php echo $tipo=='BA' ?'selected':'';?>>Bahia</option>
                                        <option value="CE" <?php echo $tipo=='CE' ?'selected':'';?>>Ceará</option>
                                        <option value="DF" <?php echo $tipo=='DF' ?'selected':'';?>>Distrito
                                            Federal</option>
                                        <option value="ES" <?php echo $tipo=='ES' ?'selected':'';?>>Espírito
                                            Santo</option>
                                        <option value="GO" <?php echo $tipo=='GO' ?'selected':'';?>>Goiás</option>
                                        <option value="MA" <?php echo $tipo=='MA' ?'selected':'';?>>Maranhão</option>
                                        <option value="MT" <?php echo $tipo=='MT' ?'selected':'';?>>Mato
                                            Grosso</option>
                                        <option value="MS" <?php echo $tipo=='MS' ?'selected':'';?>>Mato
                                            Grosso do Sul</option>
                                        <option value="MG" <?php echo $tipo=='MG' ?'selected':'';?>>Minas
                                            Gerais</option>
                                        <option value="PA" <?php echo $tipo=='PA' ?'selected':'';?>>Pará</option>
                                        <option value="PB" <?php echo $tipo=='PB' ?'selected':'';?>>Paraiba</option>
                                        <option value="PR" <?php echo $tipo=='PR' ?'selected':'';?>>Paraná</option>
                                        <option value="PE" <?php echo $tipo=='PE' ?'selected':'';?>>Pernambuco</option>
                                        <option value="PI" <?php echo $tipo=='PI' ?'selected':'';?>>Piauí</option>
                                        <option value="RJ" <?php echo $tipo=='RJ' ?'selected':'';?>>Rio de
                                            Janeiro</option>
                                        <option value="RN" <?php echo $tipo=='RN' ?'selected':'';?>>Rio
                                            Grande do Norte</option>
                                        <option value="RS" <?php echo $tipo=='RS' ?'selected':'';?>>Rio
                                            Grande do Sul</option>
                                        <option value="RO" <?php echo $tipo=='RO' ?'selected':'';?>>Rondônia</option>
                                        <option value="RR" <?php echo $tipo=='RR' ?'selected':'';?>>Roraima</option>
                                        <option value="SC" <?php echo $tipo=='SC' ?'selected':'';?>>Santa
                                            Catarina</option>
                                        <option value="SP" <?php echo $tipo=='SP' ?'selected':'';?>>São
                                            Paulo</option>
                                        <option value="SE" <?php echo $tipo=='SE' ?'selected':'';?>>Sergipe</option>
                                        <option value="TO" <?php echo $tipo=='TO' ?'selected':'';?>>Tocantis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="celular" class="label">Celular</label>
                                    <input type="text" class="form-control" id="celular" name="celular">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="rg" class="label">Rg</label>
                                    <input type="text" class="form-control" id="rg" name="rg">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cpf" class="label">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="senha" class="label">Senha</label>
                                    <input type="password" class="form-control" id="senha" name="senha">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="confirma_senha" class="label">Confirme sua senha</label>
                                    <input type="password" class="form-control" id="confirma_senha"
                                        name="confirma_senha">
                                </div>
                            </div>

                            <div class="form-group txt_align">
                                <button type="submit" class="btn btn-success">Alterar</button>
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