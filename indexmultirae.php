<!DOCTYPE html>
<html lang="en">
<head>
    <!--Formulário -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            display:flex;
            align-items:center;
            justify-content:center;
            align-content:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="http://localhost/projetos/insercaomultirae.php" method="post">
            <table>
                <tr>
                    <td><input placeholder="Nome" type="text" name="nome"></td>
                </tr>
                <tr>
                    <td><input placeholder="Data de Nascimento" type="date" name="dt_nasc"></td>
                </tr>
                <tr>
                    <td><input placeholder="CPF" type="text" name="cpf"></td>
                </tr>
                <tr>
                    <td><input placeholder="CEP" type="text" name="cep"></td>
                </tr>
                <tr>
                    <td><input placeholder="Endereço" type="text" name="endereco"></td>
                </tr>
                <tr>
                    <td><input placeholder="E-mail" type="email" name="email"></td>
                </tr>
                <tr>
                    <td><input placeholder="Senha" type="password" name="senha"></td>
                </tr>
                <tr>
                    <td><p><input type="submit" value="Enviar"></p></td>
                </tr>
                
            </table>
        </form>
    </div>

</body>
</html>

