<!DOCTYPE html>
<html>
    <head>
        <title>REGISTRATE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="usuario">
        <header>
            <h1>CREAR USUARIO</h1>
            <h2>BACMEN</h2>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="Mochilas.php">Mochilas<a/></li>
                <li><a href="Cinturones.php">Cinturones<a/></li>
                <li><a href="Ropa.php">Ropa<a/></li>
                <li><a href="Bananos.php">Bananos<a/></li>
                <li><a href="Crear_Usuario.php">Crear Usuario<a/></li>
            </ul>    
        </nav>
        
        <main>
            <form action="">
                <div id="enLineaBloque">
                    <label  class="labelCrearUsuario" for="Nombre">Nombre Usuario:</label>
                    <input  type="Text" name="Nombre" id="nombre" required=/>
                    
                    <label class="labelCrearUsuario" for="Password">Password:</label>
                    <input type="Password" name="Password" id="password" required=/>
                    
                    <label class="labelCrearUsuario" for="RepitaPassword">Repita Password:</label>
                    <input type="Password" name="RepitaPassword" id="repitapassword" required=/>
                    
                    <label class="labelCrearUsuario" for="Email">Email:</label>
                    <input type="Email" name="Email" id="email" required=/>
                </div>
                
                <fieldset>
                    <legend>Genero</legend>
                    <input type="Radio" name="Genero" id="Masculino" Value="Masculino" checked/>
                    <label for="Masculino">Masculino:</label> <br/>
                    <input type="Radio" name="Genero" id="Femenino" Value="Femenino"/>
                    <label for="Femenino">Femenino:</label>
                </fieldset>    
                    
                
                <fieldset>
                    <legend>Region</legend>
                    <select Name="Region">
                        <option value="Arica y Parinacota">Arica y Parinacota</option>
                        <option value="Tarapaca">Tarapaca</option>
                        <option value="Antofagasta">Antofagasta</option>
                        <option value="Atacama">Atacama</option>
                        <option value="Coquimbo">Coquimbo</option>
                        <option value="Valparaiso">Valparaiso</option>
                        <option value="Metropolitana">Metropolitana</option>
                        <option value="Libertador General Bernardo O’Higgins">Libertador General Bernardo O’Higgins</option>
                        <option value="Maule">Maule</option>
                        <option value="Ñuble">Ñuble</option>
                        <option value="Biobío">Biobío</option>
                        <option value="La Araucanía">La Araucanía</option>
                        <option value="Los Ríos">Los Ríos</option>
                        <option value="Los Lagos">Los Lagos</option>
                        <option value="Aysén del General Carlos Ibáñez del Campo">Aysén del General Carlos Ibáñez del Campo</option>
                        <option value="Magallanes y la Antártica Chilena">Magallanes y la Antártica Chilena</option>
                    </select>    
                </fieldset>
                 
                <div id="Botones">
                    <input type="Submit" value="Enviar" name="Enviar" id="enviar"/>
                    <input type="Reset" value="Limpiar Campo" name="Enviar" id="enviar"/>
                </div>        
            </form>
        </main>
     
        <aside>
            <ul>
                <li><a href="https://www.instagram.com/bacmen.cl/?hl=es-la">Instagram</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=56991048539&text=Hola,%20que%20tal?%20:)">Whatsapp<a/></li>  
            </ul>           
        </aside>
        <footer>
            <small>Derechos Reservado</small>
            <address>bacmen.bacgirl@gmail.com</address>
        </footer>

    </body>
</html>
