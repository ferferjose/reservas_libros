<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selecciona tus Libros</title>
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
                <h1>Selecciona tus Libros</h1>
                <form action="reservaLibros3.php" method="post">
                    <label for="libro1">
                        <input type="checkbox" id="libro1" name="libro" value="Libro1">
                        1DAW - Libro de Desarrollo Web
                    </label>
                    <label for="libro2">
                        <input type="checkbox" id="libro2" name="libro" value="Libro2">
                        2DAW - Libro de Programación Avanzada
                    </label>
                    <label for="libro3">
                        <input type="checkbox" id="libro3" name="libro" value="Libro3">
                        1SMR - Libro de Sistemas Operativos
                    </label>
                    <label for="libro4">
                        <input type="checkbox" id="libro4" name="libro" value="Libro4">
                        2SMR - Libro de Redes
                    </label>
                    
                    <input type="submit" class="boton mtb-2">
                    <a href="reservaLibros1.php" class="boton mtb-2">Volver atrás</a>
                </form>
            </div>
        </main>
        <?php
            require_once 'footer.php';
        ?>
    </body>
</html>
