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

    <script>
    function mostraFormAdicionar() {
        document.getElementById('cad_app').style.display = "block";
        document.getElementById('lista_app').style.display = "none";
        document.getElementById('mapa_rotas').style.display = "none";
    }

    function mostraListagem() {
        document.getElementById('lista_app').style.display = "block";
        document.getElementById('cad_app').style.display = "none";
        document.getElementById('mapa_rotas').style.display = "none";
    }

    function mostraMapa() {
        document.getElementById('mapa_rotas').style.display = "block";
        document.getElementById('lista_app').style.display = "none";
        document.getElementById('cad_app').style.display = "none";
    }
    </script>

    <title>Aplicações | Nexdrones</title>

</head>

<body>
    <?php include("nav_bar.php"); ?>

    <div class="container">
        <div class="row" style="margin-top:100px;">
            <div class="col-md-6 txt_align">
                <button type="button" class="btn btn-dark" style="margin-top:10px" onclick="mostraFormAdicionar();">Adicionar aplicação</button>
            </div>
            <div class="col-md-6 txt_align">
                <button type="button" class="btn btn-dark" style="margin-top:10px" onclick="mostraListagem();">Listar aplicações</button>
            </div>
        </div>
        <div class="row">
            <div id="cad_app" class="container">
                <form action="#" method="post">
                    <h3 class="txt_align"
                        style="margin-bottom:15px;color:#fff;padding-bottom:20px;text-decoration:underline;">Adicionar
                        Aplicação</h3>
                    <div class="form-row">
                        <div class="form-group label">
                            <label for="arquivo" class="label">Arquivo do cartão</label>
                            <input type="file" class="form-control-file" id="arquivo" name="arquivo">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="data_aplicacao" class="label">Data Aplicação</label>
                            <input type="date" class="form-control" id="data_aplicacao" name="data_aplicacao">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="intervalo" class="label">Intervalo (em dias)</label>
                            <input type="number" class="form-control" id="intervalo" name="intervalo">
                        </div>
                    </div>

                    <div class="form-group txt_align"><br>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>

                </form>
            </div>


        </div>
        <div class="row" style="margin-top:50px;">
            <div id="lista_app">
                <table class="table table-striped table-dark table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Data da aplicação</th>
                            <th scope="col">Próxima aplicação</th>
                            <th scope="col">Intervalo (em dias)</th>
                            <th scope="col">Rota da aplicação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>27/02/2019</td>
                            <td>06/03/2019</td>
                            <td>7</td>
                            <td> <a href="rotas.php"><button type="button" class="btn btn-light">ver rota</button></a></td> <!--  onclick="mostraMapa(); -->
                        </tr>
                        <tr>
                            <td>27/02/2019</td>
                            <td>13/03/2019</td>
                            <td>14</td>
                            <td><button type="button" class="btn btn-light">ver rota</button></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div id="mapa_rotas">
               mapa aki

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