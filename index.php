<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia Paracetaloka</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Farmácia Paracetaloka</h1>

    <div class="formulario">

        <form action="calcular.php" method="post">

            <label>Nome do Cliente:</label>
            <input type="text" name="nome" required>

            <label>Total do pedido:</label>
            <input type="number" name="total" step="0.01" required>

            <label>Faixa etária:</label>

            <div class="idade">
                <label>
                    <input type="radio" name="idade" value="0" required>
                    Menor que 50 anos
                </label>

                <label>
                    <input type="radio" name="idade" value="1">
                    Entre 51 e 70
                </label>

                <label>
                    <input type="radio" name="idade" value="2">
                    Maior que 70 anos
                </label>
            </div>

            <label class="cartao">
                <input type="checkbox" name="cartao">
                Cartão fidelidade
            </label>

            <div class="botoes">

                <button type="submit">Calcular</button>

                <button type="reset">Limpar</button>

            </div>

        </form>

    </div>

</body>

</html>