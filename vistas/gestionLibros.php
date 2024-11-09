<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Libros</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php
        require_once "header.php";
        require_once "nav.php";
    ?>
    <main>
        <div class="container">
            <h1>Gestión de Libros</h1>
            <form action="panelAdmin.php">
                <input type="text" placeholder="Nombre del libro">
                <input type="text" placeholder="Editorial">
                <input type="text" placeholder="ISBN">
                <input type="text" placeholder="Precio">

            
                <label class="label-checkbox"><input type="checkbox"> 1 SMR</label>
                <label class="label-checkbox"><input type="checkbox"> 2 SMR</label>
                <label class="label-checkbox"><input type="checkbox"> 1 DAW</label>
                <label class="label-checkbox"><input type="checkbox"> 2 DAW</label>

                <input class="boton mbt-2" type="submit" value="Añadir">
            </form>
        </div>
    </main>
    
    <?php
        require_once "footer.php";
    ?>
</body>
</html>
