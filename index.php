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
            <div class="sidebar">
                <form action="index.php" method="POST">
                    <label for="range">Ilość aut</label>
                    <input type="number" name="amount" min="1" max="9" placeholder="1-9">
                    <input type="submit" value="Pokaż" name="submit">
                </form>
            </div>
            <main class="main">
                <?php
                    if(isset($_POST['submit'])) {
                        for($i=0; $i<$_POST['amount']; $i++) {
                            createTab($i,$name,$description,$price,$promo);
                        }
                    }
                ?>
            </main>
            <footer class="footer">footer</footer>
        </div>
    </body>
</html>