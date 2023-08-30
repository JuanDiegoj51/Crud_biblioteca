<html>
   <head>
    <title>Ingresar Autor</title>
   </head> 
   <header>
        Ingresar los datos del Autor
   </header>
   <form action="administrar_autor.php" method='post'>
    <table>
        <tr>
            <td>Numero de Id</td>
            <td><input type="text" name='id' required></td>
        </tr>
        <tr>
            <td>Nombre del Autor</td>
            <td><input type="text" name='nombre' required></td>
        </tr>
        <tr>
            <td>Apellido del Autor</td>        
            <td><input type="text" name='apellido' required></td>
        </tr>
        <tr>
            <td>Direccion</td>        
            <td><input type="text" name='direccion' required></td>
        </tr>
        <tr>
            <td>Numero de telefono</td>        
            <td><input type="text" name='telefono' required></td>
        </tr>
        <tr>
            <td>Direccion de Email</td>        
            <td><input type="text" name='email' required></td>
        </tr>
        <tr>
            <td>Ciudad</td>        
            <td><input type="text" name='ciudad' required></td>
        </tr>
        <input type="hidden" name='insertar' value='insertar'>
    </table>
    <input type="submit" value="Guardar">
    <a href="index.php">Volver</a>
   </form>
</html>