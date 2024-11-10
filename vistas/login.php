<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="../assets/css/reset.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <!-- <link rel="stylesheet" href="../assets/css/style2.css"> -->
    </head>
    <body>
        <!-- Header de la pagina -->
        <?php
        require_once './header.php'
        ?>
        <main>
            <div class="container">
                <h1>INICIAR SESIÓN</h1>
                <button class="boton google-login">
                    <img src="../assets/img/google.png" alt="Google Logo">
                    Iniciar sesión con Google
                </button>
                <hr class="divider">
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Correo" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <input type="submit" class="boton" value="Iniciar sesion">
                </form>
                <a href="./registro.php" class="registrar">Registrarse</a>
            </div>
        </main>
        <!-- Footer de la pagina -->
        <?php
            require_once './footer.php'
        ?>
    </body>
</html>