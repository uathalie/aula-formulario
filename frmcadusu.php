<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar usuário</title>

        <link rel="stylesheet" href="cadusu.css?version=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
            <h1>Formulário de Cadastro de Usuários</h1>
        </div>

        <div><hr class="linha"></div>
        
        <a href="menu.php" name="voltar">Voltar ao menu</a>
        <br><br>
        <form action="inserirusuario.php" method="post" autocomplete="off">
                Login:          <input name="login" type="text" required><br><br>
                Senha:          <input name="senha" type="password" required><br><br>
                Email:          <input name="email" type="email" required><br><br>
                Data cadastro:  <input name="dtcad" type="date"><br><br>
                                <input type="submit" name="dt" value="CADASTRAR">
        </form>
    </body>
</html>