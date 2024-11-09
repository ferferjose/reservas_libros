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
    <?php
        require_once 'header.php';
        require_once 'nav.php';
    ?>
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
                        <a class="boton" href="">Realizar reserva</a>
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
                        <a class="boton" href="">Ver reservas</a>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    <?php
        require_once 'footer.php';
    ?>
</body>
</html>