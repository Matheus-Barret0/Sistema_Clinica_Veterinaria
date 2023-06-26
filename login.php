<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawsLuck Clinic</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <style>
        body {
            margin-top: 20px;
            background: #f6f9fc;
        }

        .account-block {
            padding: 0;
            background-image: url(https://bootdey.com/img/Content/bg1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            position: relative;
        }

        .account-block .overlay {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .account-block .account-testimonial {
            text-align: center;
            color: #fff;
            position: absolute;
            margin: 0 auto;
            padding: 0 1.75rem;
            bottom: 3rem;
            left: 0;
            right: 0;
        }

        .text-theme {
            color: #5369f8 !important;
        }

        .btn-theme {
            background-color: #5369f8;
            border-color: #5369f8;
            color: #fff;
        }
    </style>
</head>

<body>
    <div id="main-wrapper" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                    </div>

                                    <h6 class="h5 mb-0">Bem vindo!</h6>
                                    <p class="text-muted mt-2 mb-4">Digite seu login e senha para acessar a
                                        planataforma.</p>

                                    <form method="POST" action="App/auth.php">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Login</label>
                                            <input type="text" name="user" class="form-control">
                                        </div>
                                        <br>
                                        <div class="form-group mb-5">
                                            <label for="exampleInputPassword1">Senha</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-theme">Login</button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block rounded-right">
                                    <div class="overlay rounded-right"></div>
                                    <div class="account-testimonial">
                                        <h4 class="text-white mb-4">PawsLuck Clinic</h4>
                                        <p class="lead text-white">“Medir o progresso da programação por linhas de
                                            código é como medir o progresso da construção
                                            de aeronaves em termos de peso.” </p>
                                        <p>- Bill Gates</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>