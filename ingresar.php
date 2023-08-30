<html>
   <head>
   <link href="src/style-i.css" rel="stylesheet" type="text/css" />
    <title>Ingresar Libro</title>
   </head> 
   <header>
        Crear nuevo libro
   </header>
   <div class="content clearfix">
        <form action="administrar_libro.php" method='post'>
            <table>
                <tr>
                    <td colspan="2"><h2>Rellene los campos</h2></td>
                </tr>
                <tr>
                    <td>Nombre del libro:</td>
                    <td><input type="text" name='nombre' required placeholder="Escribe el nombre del libro"></td>
                </tr>
                <input type="hidden" name='insertar' value='insertar'>
            </table>
            <div class="boton-container">
                <input type="submit" class="btn-guardar" value="Guardar">
                <a type="submit" class="btn-volver" href="index.php">Volver</a>
            </div>
        </form>
   </div>
   <footer>
        Administrador libro 2023
    </footer>
</html>