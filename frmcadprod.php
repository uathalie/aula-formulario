<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Cadastrar produto</title>
        <link rel='stylesheet' href='cadprod.css'>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
            <h1>Formulário de Cadastro de Produtos</h1>
        </div>

        <div><hr class="linha"></div>

        <a href="menu.php" name="voltar">Voltar ao menu</a>
        <br><br>
        <form action="inserirproduto.php" method="post" autocomplete="off">
            Código:     <input name="cod" type="text" maxlength="9" required><br><br>
            Produto:    <input name="prod" type="text" required><br><br>
            Descrição:  <input name="desc" type="text" required><br><br>
            Empresa:    <input name="empr" type="text" required><br><br>
            Estoque:    <input name="est" type="number" min="1" required><br><br>
                        <input type="submit" name="dt" value="CADASTRAR">
        </form>
    </body>
</html>