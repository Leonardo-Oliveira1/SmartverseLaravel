<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="data:image/svg+xml,<svg
    xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22>
    <text y=%22.9em%22 font-size=%2290%22>🚦</text></svg>">
    <link rel="stylesheet" href="css/forms/form_login_user.css">
</head>
<body>
    <div class="container">
        <div class="message">
            <h1>Entrar</h1>
        </div>

        <form method="POST" action="/login/auth">
            @csrf
            <label>Email</label><br>
            <input type="email" id="user_email" required name="user_email"><br><br>

            <label>Senha</label><br>
            <input type="password" id="user_password" required name="user_password"><br><br>

            <input type="submit" value="Continue" name="send">
        </form>
    </div>

</body>
</html>
