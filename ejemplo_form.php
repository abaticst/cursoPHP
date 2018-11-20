<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="datosForm.php" method="GET"> <fieldset>
        <div>
            Nombre: <input type="text" name="nombre" value=""
                size="20" maxlength="20"/>
            Contraseña: <input type="password" name="password" value="" size="20" minlength="8" maxlength="20" />
            <br/><br/>
            Email: <input type="email" name="email" value="alguien@example.es" />
            <br/><br/>
            Sexo:
            <input type="radio" name="sexo" value="M" />Hombre
            <input type="radio" name="sexo" value="F" />Mujer
            <input type="radio" name="sexo" value="?" />Prefiero no indicarlo
            <br/><br/>
            Foto:
            <input type="file" name="foto" value="" size="50" />
            <br/><br/>
            Me gusta programar en:
            <input type="checkbox" name="lenguajes[PHP]" checked="checked" />PHP
            <input type="checkbox" name="lenguajes[C]" />C
            <input type="checkbox" name="lenguajes[Shell Script]" />Shell Script
            <input type="checkbox" name="lenguajes[Javascript]" />Javascript
            <br/><br/>
            Idioma:
            <select name="idioma">
                <option value="Es" selected="selected">Español</option>
                <option value="En">Ingles</option>
                <option value="Al">Aleman</option>
            </select>
            <br/><br/>
            Sistemas operativos:<br/><br/>
            <select name="so[]" multiple="multiple" size="4">
                <option value="Windows">Windows</option>
                <option value="Linux" selected="selected">Linux</option>
                <option value="Mac">MacOS</option>
            </select>
            <br/><br/>
            Otros comentarios:
            <textarea name="comentarios" rows="4" cols="50"></textarea>
            <br/><br/>
            <input type="submit" name="enviar" value="Enviar"/>
            <input type="reset" name="borrar" value="Borrar" />
            <input type="button" name="accion" value="No hacer nada" />
        </div>
    </fieldset></form>
</body>
</html>