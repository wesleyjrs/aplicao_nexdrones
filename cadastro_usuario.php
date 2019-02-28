<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bibliotecas/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo_mobile.css">
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery.mask.min.js"></script>
    <link rel="icon" type="imagem/png" href="imagens/drone.png">

    <script>
        $(document).ready(function(){
            $("#cpf").mask("000.000.000-00");
            $("#cep").mask("00000-000");
            $("#celular").mask("(00)00000-0000");               
        });
        
    </script>
    <title>Cadastro de usuário</title>

</head>

<body id="fundo">

    <div class="container">
        <div class="row">
            <div id="form_cad" class="container">
                <form action="inserir_usuario.php" method="post">
                    <h3 class="txt_align" style="margin-bottom:15px;color:#fff;padding-bottom:20px;text-decoration:underline;">Cadastro de usuário</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome" class="label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email" class="label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-row">
                        
                        <div class="form-group col-md-6">
                            <label for="endereco" class="label">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="cep" class="label">Cep</label>
                            <input type="text" class="form-control" id="cep" name="cep">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="numero" class="label">Numero</label>
                            <input type="text" class="form-control" id="numero" name="numero">
                        </div>
                       
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="bairro" class="label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cidade" class="label">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade">


                        </div>
                        <div class="form-group col-md-4">
                            <label for="estado" class="label">Estado</label>
                            <select id="estado" name="estado" class="form-control">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraiba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP" selected>São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantis</option>
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
                            <input type="text" class="form-control" id="rg" name="rg" title="000.000.000-00" pattern="^\d{3}.\d{3}.\d{3}-\d{2}$" minlength="11">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cpf" class="label">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" title="000.000.000-00" pattern="^\d{3}.\d{3}.\d{3}-\d{2}$" minlength="11">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="senha" class="label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirma_senha" class="label">Confirme sua senha</label>
                            <input type="password" class="form-control" id="confirma_senha" name="confirma_senha">
                        </div>
                    </div>

                    <div class="form-group txt_align">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>





    <script src="bibliotecas/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>