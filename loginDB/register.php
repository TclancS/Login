<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login</title>
</head>
<body>
    <form action="registration.php" method="post" name="signup-form">
        <div class="form-element">
            <label>Usuario</label>
            <input type="text" name="username" maxlength="10" pattern="[a-zA-Z+0-9]+" required>
        </div>

        <div class="form-element">
            <label>Correo</label>
            <input type="text" name="email" maxlength="30" required>
        </div>

        <div class="form-element">
            <label>Contraseña</label>
            <input type="password" name="password" maxlength="10" pattern="[a-zA-Z0-9]+">
        </div>

        <button type="submit" name="register" value="register">Enviar</button>
    </form>
    
</body>
</html>