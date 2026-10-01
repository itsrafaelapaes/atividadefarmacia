<?php

// OBTER OS DADOS 
$nome = $_POST['nome']; 
$total = (float) $_POST['total']; 
$idade = (int) $_POST['idade']; 
 
if (isset($_POST['cartao'])) 
{ 
    $cartao = "sim"; 
} 
else 
{ 
    $cartao = "não"; 
} 
 
// PROCESSAMENTO 
$descontoCartao = 0; 
 
if ($idade == 0) { 
    $descontoIdade = 0;   
} 
else if ($idade == 1) 
{ 
    $descontoIdade = 5; 
} 
else 
{ 
    $descontoIdade = 7; 
} 
 
// desconto cartão 
if ($cartao == "sim")  
{ 
    $descontoCartao = 5; 
} 
 
$valorDescontoIdade = $total * ($descontoIdade / 100); 
$valorDescontoCartao = $total * ($descontoCartao / 100); 
$valorfinal = $total - $valorDescontoIdade - $valorDescontoCartao; 

?>

<!DOCTYPE html> 
<html lang="pt-br"> 

<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Farmácia Paracetaloka</title>

    <link rel="stylesheet" href="style.css">

</head> 

<body> 

    <div class="resultado">

        <h1>Farmácia Paracetaloka</h1>

        <div class="resumo">

            <?php echo "<p><strong>Cliente:</strong> $nome</p>"; ?>

            <?php echo "<p><strong>Total do pedido:</strong> R$ " . number_format($total, 2, ',', '.'); ?></p>

            <?php echo "<p><strong>Desconto pela faixa etária:</strong> R$ " . number_format($valorDescontoIdade, 2, ',', '.'); ?></p>

            <?php echo "<p><strong>Desconto Fidelidade:</strong> R$ " . number_format($valorDescontoCartao, 2, ',', '.'); ?></p>

            <?php echo "<p class='total'><strong>Total a pagar:</strong> R$ " . number_format($valorfinal, 2, ',', '.'); ?></p>

        </div>


        <div class="parcelamentos">

            <div class="parcelamento">

                <h2>Parcelamento com for</h2>

                <?php

                for ($parcelas = 1; $parcelas <= 6; $parcelas++) { 

                    $valorParcela = $valorfinal / $parcelas; 

                    echo "<div class='parcela'>";
                    echo "<span>" . $parcelas . "x</span>";
                    echo "<strong>R$ " . number_format($valorParcela, 2, ',', '.') . "</strong>";
                    echo "</div>";

                }

                ?>

            </div>


            <div class="parcelamento">

                <h2>Parcelamento com while</h2>

                <?php

                $parcelas = 1; 
 
                while ($parcelas <= 6) { 

                    $valorParcela = $valorfinal / $parcelas; 

                    echo "<div class='parcela'>";
                    echo "<span>" . $parcelas . "x</span>";
                    echo "<strong>R$ " . number_format($valorParcela, 2, ',', '.') . "</strong>";
                    echo "</div>";

                    $parcelas++; 
                }

                ?>

            </div>

        </div>
        <a href="index.php" class="btn-voltar">← Voltar</a>
    </div>

</body> 
</html>