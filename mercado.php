<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="mercado.css">
</head>
<body>
    <h1>Mercadinho do dia&dia</h1>
    
    <div class="lista">
    <?php
    $nome = ["Caixa de Chocolate Lacta Variedades 250,6g", "Leite Condensado Moça Integral 395g", "Enxaguante Bucal Listerine Cool Mint Leve 500ml Pague 350ml", "Achocolatado Pó Nescau Lata 670g", "Sabão Líquido Omo Peças Íntimas e Biquínis 300ml", "Desinfetante Pinho Sol Lavanda 1,75l", "Protetor Solar Sundown FPS 30 Praia e Piscina 200ml", "Suco Em Pó Trink Uva 15g", "Biscoito Trakinas Recheado Chocolate 129g" ];
    $produto = ["bombom.jpg", "leitemoca.jpg" , "listerine.jpg", "nescau.jpg", "omointimas.jpg", "pinho.jpg" ,"protetorsolar.jpg", "sucouva.jpg", "traquinas.jpg" ];
    $valores = ["R$ 14,59", "R$ 8,79", "R$ 21,99", "21,42", "R$ 18,99", "R$ 16,90", "R$ 51,99", "R$ 0,95", "R$ 2,79"];
    $numero_nome = count($nome);
    $contador = 0;
    while($contador < $numero_nome){
        echo "<div class='card'>";
        echo "<img src='$produto[$contador]'>";
        echo "<br> $nome[$contador]";
        echo "<br> $valores[$contador]";
        echo "</div>";
        $contador++;
 
    }
 
    ?>
    </div>
</body>
</html>