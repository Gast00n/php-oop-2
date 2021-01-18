<?php
    include_once __DIR__ . '/classes/Shoe.php';
    include_once __DIR__ . '/classes/Dress.php';
    include_once __DIR__ . '/classes/Accessory.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Lookalike</title>
</head>
<body>
    <main>
    
        <!-- Scarpe -->
        <section>

            <?php
                //istanza SHOE
                $shoe = new Shoe('Aria', 200, 'Prada', 39, 'Black');
            ?>
            <h2>Shoes</h2>
            <div>
                <strong>Modello:</strong> <?php echo $shoe->name; ?> <br>
                <strong>Prezzo:</strong> <?php echo $shoe->getDiscount(); ?>€ {Sconto di :<?php echo $shoe->price - $shoe->getDiscount(); ?>€}<br>
                <strong>Prodotto da:</strong> <?php echo $shoe->product_by; ?> <br>
                <strong>Misura:</strong> <?php echo $shoe->misurement; ?> <br> 
                <strong>Colore:</strong> <?php echo $shoe->color; ?> <br>
            </div>
        </section>

        <!-- Abiti -->
        <section>

            <?php 
                //istanza DRESS
                $dress = new Dress('Notte', 385, 'Louis Vuitton', 'M');
                $dress->setType('Abito da Cerimonia');

            ?>
            <h2>Dresses</h2>
            <div>
                <strong>Modello:</strong> <?php echo $dress->name; ?> <br>
                <strong>Prezzo:</strong> <?php echo $dress->getDiscount(); ?>€<br>
                <strong>Prodotto da:</strong> <?php echo $dress->product_by; ?> <br>
                <strong>Tipologia:</strong> <?php echo $dress->getType(); ?> <br> 
                <strong>Taglia:</strong> <?php echo $dress->size; ?> <br>
            </div>
        </section>

        <!-- Accessori -->
        <section>

            <?php
                //istanza ACCESSORY
                $accessory = new Accessory('Cinta in pelle', 85, 'Versace', 'Leather');
            ?>
            <h2>Accessories</h2>
            <div>
                <strong>Modello:</strong> <?php echo $accessory->name; ?> <br>
                <strong>Prezzo:</strong> <?php echo $accessory->getDiscount(); ?>€ {Sconto di :<?php echo $accessory->price - $accessory->getDiscount(); ?>€}<br>
                <strong>Prodotto da:</strong> <?php echo $accessory->product_by; ?> <br>
                <strong>Materiali:</strong> <?php echo $accessory->materials; ?> <br>
            </div>
        </section>
    </main>
</body>
</html>