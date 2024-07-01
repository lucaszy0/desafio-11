<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <h1>Reajustador de Preço</h1>
    <form action="" method="get">
    <label for="preco1">Preço do produto</label>
    <input type="number" name="preco1" id="preco1" min = "0.10"value="0" step="0.01">
    <label for="reajuste">Qual sera o percentual de reajuste?(<span id="porcentagem">?</span>%)</label>
    <input type="range" name="reajuste" id="reajuste" min="0" max="100" oninput="mudaValor()">
    <input type="submit" value="Calcular" step="1">
    </form>
    <h1>Resultado do Reajuste</h1>
    <?php
    $preco=$_GET['preco1'] ?? 0;
    $reajuste =$_GET['reajuste'] ?? 0;
    $porcento = (($preco / 100) * $reajuste) + $preco;
    echo"O produto que custava R$$preco , com 0% de aumento vai passar a custar R$$porcento";
     ?>
     
     <script>
        //declaracoes automaticas
        mudaValor()
        function mudaValor(){
          porcentagem.innerText = reajuste.value;
        }
     </script>
</body>
</html>