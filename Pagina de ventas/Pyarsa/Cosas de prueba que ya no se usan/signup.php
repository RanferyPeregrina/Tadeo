
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Formulario_Registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registro de Usuario</title>
</head>
<body>
    
    <div id="ContenedorPrincipal" class="container">

            <div class="row">

                <div id="LadoIzquierdo" class="col-6">
                    
                </div>
                <div id="LadoDerecho" class="col-6">
                    <div id="Encabezado" class="row">
                        <img id="Imagen_Encabezado" src="Banda_Logo.png" alt="ImagenEncabezadoLogotipo">
                    </div>
                    <div id="Formulario" class="row">
                        
                        <form action ="signup.php"method="post">

                           
                                <label class ="Label_Formulario" for="nombre">Ingrese su nombre completo:</label> <br>
                                <input placeholder="Escriba aquí su nombre completo" type="text" id="nombre" name="nombre" required><br><br>

                                <label class ="Label_Formulario" for="correo">Correo electrónico:</label><br>
                                <input placeholder="alguien@ejemplo.com" type="email" id="correo" name="correo" required><br><br>

                                <label class ="Label_Formulario" for="Contraseña">Ingrese Contraseña:</label> <br>
                                <input type="password" id="Contra" name="Contra" required><br> <br>

                                <label class ="Label_Formulario" for="nombre">Comprobar Contraseña:</label><br>
                                <input type="password" name="nombre" required><br><br>

                                <label class ="Label_Formulario" for="nombre">Dirección (Domicilio):</label> <br>
                                <input type="text" id="Domicilio" name="Domicilio" required><br><br>

                                <label class ="Label_Formulario" for="nombre">Número telefónico</label> <br>
                                <input placeholder="12-34-56-7890" type="tel" id="Telefono" name="Telefono" required><br><br>

                                <input id="Registro_Btn" type="submit" name="Registro_Btn" value="Enviar">
                                                
                        </form>

                    </div>
                </div>

            </div>

    </div>

        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>