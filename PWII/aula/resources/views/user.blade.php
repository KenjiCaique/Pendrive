<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="CSS/styleUser.css">
</head>
<body>
    <div class="container">
    <h2>Cadastro de Usuário</h2>
    <form action="/user" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="txtName" required><br>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="txtEmail" required><br>
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="txtPassword" required><br>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirme a Senha:</label>
            <input type="password" name="txtPassword_confirmation" required><br>            
        </div>

        <div class="form-group">
            <button type="submit" class="btn-submit">Cadastrar</button>
        </div>
    </form>
    </div>
</body>
</html>
