<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmar Reserva</title>
        <link rel="stylesheet" href="../assets/css/reset.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <?php
            require_once 'header.php';
            require_once 'nav.php';
        ?>
        <main>
            <div class="container">
                <h1>Confirmar Reserva</h1>
                <form action="confirmarReserva.php" method="post">
                    <label for="precio">Precio total de tu reserva</label>
                    <input type="text" id="precio" name="precio" readonly>
                    
                    <label for="justificante">Adjuntar Justificante de Pago</label>
                    <input type="file" id="justificante" name="justificante">
                    
                    <input type="submit" class="boton mtb-2">
                    <a href="reservaLibros2.php" class="boton mtb-2">Volver atrás</a>
                </form>
            </div>
        </main>
        <?php
            require_once 'footer.php';
        ?>
    </body>
</html>
