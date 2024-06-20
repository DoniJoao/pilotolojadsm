<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Produtos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .produto {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 15px;
            border-radius: 5px;
            text-align: center;
        }
        .produto h3 {
            margin-bottom: 10px;
        }
        .produto p {
            font-size: 18px;
            font-weight: bold;
        }
        .produto img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .add-carrinho {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .add-carrinho:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center my-4">Nossos Produtos</h2>
    <div class="row">

        <?php
            $produtos = [
                ["Camisa Polo", 49.90, "img/camisa_polo.jpg"],
                ["Calça Jeans", 79.90, "img/calca_jeans.jpg"],
                ["Tênis Esportivo", 129.90, "img/tenis_esportivo.jpg"],
                ["Jaqueta de Couro", 199.90, "img/jaqueta_couro.jpg"],
                ["Relógio de Pulso", 299.90, "img/relogio_pulso.jpg"],
                ["Óculos de Sol", 99.90, "img/oculos_sol.jpg"],
                ["Boné", 39.90, "img/bone.jpg"],
                ["Mochila", 149.90, "img/mochila.jpg"]
            ];

            foreach ($produtos as $produto) {
                echo "<div class='col-md-4'>";
                echo "<div class='produto'>";
                echo "<img src='{$produto[2]}' alt='{$produto[0]}'>";
                echo "<h3>{$produto[0]}</h3>";
                echo "<p>R$ " . number_format($produto[1], 2, ',', '.') . "</p>";
                echo "<button class='add-carrinho' data-produto='{$produto[0]}'>Adicionar ao Carrinho</button>";
                echo "</div>";
                echo "</div>";
            }
        ?>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
