<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Clientes</title>

</head>

<body>

    <h1>Clientes</h1>

    <h2>Suscritos</h2>

    <ul> 

        <?php foreach ($nuevaLista as $cliente) : ?>

            <li>
                <?php echo $cliente['nombre']; ?>
            </li>

        <?php endforeach; ?>

    </ul>

    <h2>No suscritos</h2>

    <ul> 

        <?php foreach ($nuevaLista2 as $cliente) : ?>

            <li>
                <?php echo $cliente['nombre']; ?>
            </li>

        <?php endforeach; ?>

    </ul>

    <h2>Clientes que ya han realizado un pedido</h2>

    <ul> 

        <?php foreach ($nuevaLista3 as $cliente) : ?>

            <li>
            <?php echo $cliente['nombre']; ?> - <?php echo $cliente['lista de pedidos'][0]['total'] . "€"; ?>
            </li>

        <?php endforeach; ?>

    </ul>

</body>

</html>