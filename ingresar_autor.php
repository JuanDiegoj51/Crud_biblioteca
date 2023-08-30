<html>
   <head>
    <title>Ingresar Autor</title>
    <link rel="stylesheet" href="src/style-i.css">
   </head> 
   <header>
        Ingresar los datos del Autor
   </header>
   <body>
        <div class="content clearfix">
            <form action="administrar_autor.php" method='post'>
                <table>
                    <tr>
                        <td colspan="2"><h2>Rellene los campos</h2></td>
                    </tr>
                    <tr>
                        <td>Numero de Id</td>
                        <td><input type="text" name='id' required placeholder="Escriba su ID"></td>
                    </tr>
                    <tr>
                        <td>Nombre del Autor</td>
                        <td><input type="text" name='nombre' required placeholder="Escriba el nombre"></td>
                    </tr>
                    <tr>
                        <td>Apellido del Autor</td>        
                        <td><input type="text" name='apellido' required placeholder="Escriba el apellido"></td>
                    </tr>
                    <tr>
                        <td>Direccion</td>        
                        <td><input type="text" name='direccion' required placeholder="Escriba la direccion"></td>
                    </tr>
                    <tr>
                        <td>Numero de telefono</td>        
                        <td><input type="text" name='telefono' required placeholder="Escriba el numero de telefono"></td>
                    </tr>
                    <tr>
                        <td>Direccion de Email</td>        
                        <td><input type="text" name='email' required placeholder="Escriba el Email"></td>
                    </tr>
                    <tr>
                        <td>Ciudad</td>        
                        <td><input type="text" name='ciudad' required placeholder="Escriba la ciudad"></td>
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
   </body>
</html>