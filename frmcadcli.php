<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar cliente</title>

        <link rel="stylesheet" href="cadcli.css?version=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
            <h1>Formulário de Cadastro de Clientes</h1>
        </div>

        <div><hr class="linha"></div>
        
        <a href="menu.php" name="voltar">Voltar ao menu</a>
        <br><br>
        <form action="inserircliente.php" method="post" autocomplete="off">
                Nome:       <input name="nome" type="text" required><br><br>
                CPF:        <input name="cpf" type="text" maxlength="30" required><br><br>
                Endereço:   <input name="endereco" type="text" required><br><br>
                Estado:     <input name="estado" type="text"><br><br>
                País:       <input name="pais" type="text" required><br><br>
                Sexo:       <select name="sexo" id="sexo">
                                <option name="sxf" value="feminino">feminino</option>
                                <option name="sxm" value="masculino">masculino</option>
                            </select><br><br>
                Email:      <input name= "email" type="email" required><br><br>
                Telefone:   <input name= "tel" type="text"><br><br>
                            <input type="submit" name="dt" value="CADASTRAR">
        </form>
    </body>
</html>