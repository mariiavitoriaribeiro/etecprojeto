<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--name usado para referir o campo que vai coletar os valores descritos pelo usúario-->
        <form method="get" action="lista2.php">
            Impar e par: <input type="number" name="numero" placeholder="numero"/>
            <br>
            <br>
            <button type="submit">Enviar</button>
        </form>
        <br>
        <form method="get" action="positivonegativo.php">
            Positivo ou negativo: <input type="number" name="valor" placeholder="numero"/>
            <br>
            <br>
            <button type="submit">Enviar</button>
            <br>
            <br>
        </form>
        
        <form method="get" action="variaveis.php">
            Variaveis A: <input type="number" name="varA" />
            Variaveis B: <input type="number" name="varB" />
            <br>
            <br>
            <button type="submit">Enviar</button>
        </form>

        <br>
        <br>
        <form method="post" action="jokenpo.php">
       
    </form>
    <form method="post" action="triangulos.php">
            Valor 1: <input type="number" name="valor1" />

            <br>
            <br>
    
            Valor2: <input type="number" name="valor2" />

            <br>
            <br>
            Valor3: <input type="number" name="valor3" />

            <br>

   
            <button type="submit">Enviar</button>
        </form>
        
        <form method="get" action="jokenpo.php">
        Digite Pedra, papel ou tesoura: <input type="text" name="valor">
        <button type="submit">Enviar</button>
    </form>
        
   
</body>
</html>