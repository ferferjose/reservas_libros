<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="../assets/css/reset.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <!-- Header de la pagina -->
        <?php
        require_once './header.php'?>
        <main>
        <div class="tabla">
            <div class="container">
                <h1>REGISTRARSE</h1>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Correo" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <input type="password" name="password2" placeholder="Repetir contraseña" required>
                    <input type="submit" class="boton">
                </form>
                <a href="./login.php" class="registrar">Iniciar Sesión</a>
            </div>
        </div>
            
        </main>
        
        <!-- Footer de la pagina -->
        <?php
        require_once './footer.php'?>
    </body>
</html>