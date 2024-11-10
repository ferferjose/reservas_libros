<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reserva tus libros</title>
        <link rel="stylesheet" href="../assets/css/reset.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <?php
            require_once 'header.php';
            require_once 'nav.php';
        ?>
        <main>
            <div class="tabla">
                <div class="container">
                    <h1>Reserva Libros</h1>
                    <form action="reservaLibros2.php" method="post">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre">
                        <label for="cursos">Selecciona el curso al que perteneces</label>
                        <select name="cursos" id="cursos">
                            <option value="" disabled selected>Selecciona un curso</option>
                            <option value="">1DAW</option>
                            <option value="">2DAW</option>
                            <option value="">1SMR</option>
                            <option value="">2SMR</option>
                        </select>
                        
                        <input type="submit" class="boton mtb-2" value="Siguiente">
                    </form>
                </div>
            </div>
        </main>
        <?php
            require_once 'footer.php';
        ?>
    </body>
</html>