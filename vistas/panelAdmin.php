<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel Administrador</title>
        <link rel="stylesheet" href="../assets/css/reset.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <?php require_once './header.php'?>
        <nav>
            <a href="panelAdmin.html">Panel de administración</a>
        </nav>
        <main>
            <div class="tabla">
                <div class="container">
                    <h1>Panel Administrador</h1>
                    <hr>

                    <div>
                        <h2>Gestion de libros</h2>
                        <a href="gestionLibros.html" class="boton mb-2 enlaceAdmin bgreen">Añadir libros</a>
                        <a href="eliminarLibros.html" class="boton mb-2 enlaceAdmin bred">Eliminar libros</a>
                    </div>
                    <div>
                        <h2>Hacer reservas</h2>
                        <a href="reservaLibros1ADM.html" class="boton mb-2 enlaceAdmin bgreen">Realizar reserva</a>
                    </div>
                    <div>
                        <h2>Gestión de reservas</h2>
                        <a href="verificarReservas.html" class="boton mb-2">Verificar reserva</a>
                        <a href="librosPedidos.html" class="boton mb-2">Libros pedidos</a>
                        <a href="confirmarReservas.html" class="boton mb-2">Confirmar entrega</a>
                        
                    </div>
                </div>
            </div>
        </main>
        <?php require_once './footerAdmin.php' ?>
    </body>
</html>