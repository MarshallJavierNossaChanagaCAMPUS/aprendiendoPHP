<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="calculadora.php">
        Numero 1 <input type="text" name="num1"> <br>
        Numero 2 <input type="text" name="num2"> <br>
        <select name="operacion">
            <option disabled selected>Operacion</option>
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicación</option>
            <option value="division">división</option>
        </select>
        <input type="submit" value="Resultado">
    </form>
</body>
</html>