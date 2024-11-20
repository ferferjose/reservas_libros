<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de inicio</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php require_once './header.php' ?>
    <nav>
        <a href="inico.php">Inicio</a>
        <a href="reservaLibros1User.html">Realizar reserva</a>
        <a href="verReservasUser.html">Ver reservas</a>
    </nav>
    <main>
        <h1>Página de inicio</h1>
        <section class="card">
            <div>
                <img src="../assets/img/realizarReserva.png" alt="Icono de un libro">
            </div>
            <div>
                <h2>Realizar reserva</h2>
                <div>
                    <p>Pulse en el botón para realizar su reserva. El botón le llevará al formulario de reserva donde podrá realizarla.</p>
                    <div>
                        <a class="boton" href="reservaLibros1User.html">Realizar reserva</a>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="card">
            <div>
                <img src="../assets/img/verReservas.png" alt="Icono de un libro">
            </div>
            <div>
                <h2>Ver reservas</h2>
                <div>
                    <p>Pulse en el botón para realizar su reserva. El botón le llevará al formulario de reserva donde podrá realizarla.</p>
                    <div>
                        <a class="boton" href="verReservasUser.html">Ver reservas</a>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    <?php require_once './footer.php' ?>
</body>
</html>