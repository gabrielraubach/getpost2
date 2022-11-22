<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <style> 
       body{
        background-color: gray;
       }
       .container{
         background-color:gray; 
         width: 400px;
         height: auto;
         margin: 150px auto;
         padding: 30px;
       }
       </style>
</head>
<body>
    <div class="container">
        <form action="exer2.php" method="post">
            <h1>Exercicio nº 2</h1>
            <p>Informe um Valor</p>
            <input type="number" name="n" id="n">
            <input type="submit" value="Gerar" name="btgerar.">
        </form>
    </div>
</body>
</html>