<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Administrador</title>
        <link rel="stylesheet" href="../assets/css/reset.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <?php require_once 'header.php'; ?>
        <main>
            <div class="tabla">
                <div class="container">
                    <h1>INICIO ADMINISTRADOR</h1>
                    <hr class="divider">
                    <form action="vistas/inicio.html" method="POST">
                        <input type="email" name="email" placeholder="Correo" required>
                        <input type="password" name="password" placeholder="Contraseña" required>
                        <input type="submit" class="boton" value="Iniciar sesion">
                    </form>
                </div>
            </div>
        </main>
        <?php require_once 'footerAdmin.php'; ?>
    </body>
</html>