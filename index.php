<?php
    require('card.php');
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Grid template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Livvic|Rubik:700&display=swap" rel="stylesheet">
    </head>

    <body>

        <div class="container">
            <header class="header">
                <h1>Salon samochodowy</h1>
            </header>
            <div class="sidebar">sidebar</div>
            <main class="main">
                <?php
                    for($i=0; $i<9; $i++) {
                        createTab($i,$name,$description,$price,$promo);
                    }
                ?>
            </main>
            <footer class="footer">footer</footer>
        </div>

    </body>
</html>