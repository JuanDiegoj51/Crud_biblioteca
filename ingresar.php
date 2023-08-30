<html>
   <head>
    <title>Ingresar Libro</title>
   </head> 
   <header>
        Ingresar los datos del libro
   </header>
   <form action="administrar_libro.php" method='post'>
    <table>
        <tr>
            <td>Nombre libro</td>
            <td><input type="text" name='nombre' required></td>
        </tr>
        <input type="hidden" name='insertar' value='insertar' required>
    </table>
    <input type="submit" value="Guardar">
    <a href="index.php">Volver</a>
   </form>
</html>