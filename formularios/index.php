<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--          caminho.php             metodo http   -->
    <form action="login.php" method="get">
        <input type="text" placeholder="name:" name="name" id="">
        </br>

        <label for="homen">homen</label>
        <input type="radio" name="sexo" id="homen" value="homen">
   

        <label for="mulher">mulher</label>
        <input type="radio" name="sexo" id="mulher" value="mulher">
     

        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>

        <label for="termos">Aceita termos</label>
        <input type="checkbox" name="termos" id="termos" value="ok">

        <input type="submit" value="enviar">
    </form>
</body>
</html>