<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Innout</title>
    <link rel="stylesheet" href="../curso-php-arquivos/innout/public/assets/css/comum.css">
    <link rel="stylesheet" href="../curso-php-arquivos/innout/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../curso-php-arquivos/innout/public/assets/css/icofont.min.css">
    <link rel="stylesheet" href="../curso-php-arquivos/innout/public/assets/css/login.css">
</head>
<body>
    <div>Login</div>
    <form class="form-login" action="#" method="post">
        <div class="login-card">
            <div class="card-header">
                <i class="icofont-travelling mr-0"></i>
                    <span class="font-weight-light">In </span>
                    <span class="font-weight-bold mx-2">'N</span>
                    <span class="font-weight-light">Out</span>
                <i class="icofont-runner-alt-1 ml-2"></i>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $email ?>"
                        placeholder="Informe o e-mail" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" class="form-control" 
                        placeholder="Informe a senha">
                </div>
            </div>
            <div class="card-footer">
                    <button class="btn btn-lg btn-primary">Entrar</button>
            </div>
        </div>
    </form>
</body>
</html>