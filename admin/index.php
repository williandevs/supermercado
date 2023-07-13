<?php

require_once("../conexao.php");

//VERIFICAR SE EXISTE ALGUM CADASTRO NO BANCO, SE NÃO TIVER CADASTRAR O USUÁRIO ADMINISTRADOR
$res = $pdo->query("SELECT * FROM usuarios");
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$senha_crip = md5('123');
if (@count($dados) == 0) {
    $res = $pdo->query("INSERT into usuarios (nome, cpf, email, senha, senha_crip, nivel) values ('Administrador', '000.000.000-00', '$email', '123', '$senha_crip', 'Admin')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title><?= $nome_loja ?></title>

    <!-- Google font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- bootstrap css -->


    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="../assets/css/style.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Adicione a biblioteca do DataTables -->
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.5/r-2.5.0/datatables.min.css" rel="stylesheet" />



    <style>
        body {
            width: 100%;
            height: 100vh;
            background-image: url("../assets/images/banner/banner-home1.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .cadastrar-btn a {
            font-size: 1rem;
            font-weight: bold;
            color: #B40909;
        }

        .h4 {
            color: #B40909;
        }

        .butao-cadastrar {
            background-color: #888;
            color: #fff;
        }

        .butao-cadastrar:hover {
            background-color: #888;
            color: #fff;
        }
    </style>


</head>

<body>


    <!-- log in section start -->
    <section class="log-in-section section-b-space">

        <div class="container w-100">
            <div class="row">

                <div class="col-xl-5 col-lg-6 me-auto">
                    <div class="log-in-box">
                        <div class="p-2">
                            <a href="../index.php"> <i class="bi bi-house-fill"></i></a>

                        </div>
                        <div class="log-in-title">
                            <h4 class="h5">FAÇA P LOGIN EM SUA CONTA</h4>
                        </div>

                        <div class="input-box">
                            <form action="autenticar.php" method="post" name="login" class="row g-4">

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="text" name="email_login" id="email_login" class="form-control" aria-describedby="emailHelp" placeholder="Insira seu Email ou CPF">
                                        <label for="email">Insira seu Email ou CPF</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="password" name="senha_login" id="senha_login" class="form-control" aria-describedby="emailHelp" placeholder="Senha">
                                        <label for="password">Senha</label>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <button class="btn  text-white w-100" style="background-color:#B40909;" type="submit">Entrar</button>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-2 mb-3">
                                <div class="cadastrar-btn mt-3 text-center">
                                    <h4 class="mb-3 ">Não possui cadastro?</h4>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCadastro">CADASTRA-SE</a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalRecuperar">RECUPERAR
                                            SENHA</a>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- Modal Cadastrar -->
    <div class="modal fade" id="modalCadastro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-color: #f8f8f8;">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">CADASTRA-SE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container-fluid-lg w-100">
                        <div class="row">
                            <div class="input-box">
                                <form class="row g-4">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating theme-form-floating">
                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome e Sobrenome">
                                            <label for="exampleInputEmail1">Nome Completo</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating theme-form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email">
                                            <label for="exampleInputEmail1">Email</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating theme-form-floating">
                                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira seu CPF">
                                            <label for="exampleInputEmail1">CPF</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-floating theme-form-floating">
                                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Inserir Senha">
                                            <label for="exampleInputEmail1">Senha</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-floating theme-form-floating">
                                            <input type="password" class="form-control" id="confirmar-senha" name="confirmar-senha" placeholder="Confirmar Senha">
                                            <label for="exampleInputEmail1">Confirmar Senha</label>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" id="btn-cadastrar" class="btn btn btn-md btn-secondary text-white">cadastrar</button>
                                        <button type="button" id="btn-fechar-cadastrar" class="btn btn btn-md bg-danger text-white" data-bs-dismiss="modal">Fechar</button>




                                    </div>
                                </form>
                            </div>
                            <div id="div-mensagem">

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- Modal recuperar-senha -->
    <div class="modal fade" id="modalRecuperar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background-color: #f8f8f8;">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">RECUPERAR SENHA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container-fluid-lg w-100">
                        <div class="row">


                            <div class="input-box">
                                <form class="row g-4">

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating theme-form-floating">
                                            <input type="email" class="form-control" id="email-recuperar" name="email-recuperar" placeholder="Seu Email">
                                            <label for="exampleInputEmail1">Email</label>
                                        </div>
                                    </div>

                                    <small>
                                        <div id="div-mensagem-rec"></div>
                                    </small>

                                    <div class="modal-footer">
                                        <button type="button" id="btn-recuperar" class="btn btn btn-md btn-secondary text-white">Recuperar</button>
                                        <button type="button" class="btn btn btn-md bg-danger text-white" data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>









<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="../assets/js/script.js"></script>


    <script src="https://cdn.datatables.net/v/dt/dt-1.13.5/r-2.5.0/datatables.min.js"></script>


    <script type="text/javascript">
        $('#btn-cadastrar').click(function(event) {
            event.preventDefault();

            $.ajax({
                url: "cadastrar.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function(msg) {
                    if (msg.trim() === 'Cadastrado com Sucesso!') {

                        $('#div-mensagem').addClass('text-success')
                        $('#div-mensagem').text(msg);
                        $('#btn-fechar-cadastrar').click();
                        $('#email_login').val(document.getElementById('email').value);
                        $('#senha_login').val(document.getElementById('senha').value);
                    } else {
                        $('#div-mensagem').addClass('text-danger')
                        $('#div-mensagem').text(msg);


                    }
                }
            })
        })
    </script>

    <script type="text/javascript">
        $('#btn-editar').click(function(event) {
            event.preventDefault();

            $.ajax({
                url: "editar-perfil.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function(msg) {
                    if (msg.trim() === 'Editado com Sucesso!') {

                        $('#div-mensagem').addClass('text-success')
                        $('#div-mensagem').text(msg);

                    } else {
                        $('#div-mensagem').addClass('text-danger')
                        $('#div-mensagem').text(msg);


                    }
                }
            })
        })
    </script>


    <script type="text/javascript">
        $('#btn-recuperar').click(function(event) {
            event.preventDefault();

            $.ajax({
                url: "recuperar.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function(msg) {
                    if (msg.trim() === 'Senha Enviada para o Email!') {

                        $('#div-mensagem-rec').addClass('text-success')
                        $('#div-mensagem-rec').text(msg);

                    } else if (msg.trim() === 'Preencha o Campo Email!') {
                        $('#div-mensagem-rec').addClass('text-danger')
                        $('#div-mensagem-rec').text(msg);

                    } else if (msg.trim() === 'Este email não está cadastrado!') {
                        $('#div-mensagem-rec').addClass('text-danger')
                        $('#div-mensagem-rec').text(msg);
                    } else {
                        $('#div-mensagem-rec').addClass('text-danger')
                        $('#div-mensagem-rec').text('Deu erro ao Enviar o Formulário! Provavelmente seu servidor de hospedagem não está com permissão de envio habilitada ou você está em um servidor local');


                    }
                }
            })
        })
    </script>



</body>

</html>