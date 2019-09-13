<?php
    include_once('card.php');
    include_once('connect.php');
    include('functions.php');
    $sql = "SELECT id FROM cars ORDER BY id DESC LIMIT 1";
    $result = $mysqli -> query($sql);
    $amount_of_cars = $result -> fetch_assoc()['id'];
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
                <form class="amount_of_cars" action="index.php" method="POST">
                    <label for="range">Ilość samochodów</label>
                    <input id="range" type="number" name="amount" required min="1" max="<?php echo $amount_of_cars ?>" placeholder="1-<?php echo $amount_of_cars ?>">
                    <h4>Sortowanie samochodów</h4>
                    <select name="select">
                        <option value="alphabetically">Alfabetycznie</option>
                        <option value="affordable_up">Cena (rosnąco)</option>
                        <option value="affordable_down">Cena (malejąco)</option>
                        <option value="promotionally_up">Promocja (rosnąco)</option>
                        <option value="promotionally_down">Promocja (malejąco)</option>
                    </select>
                    <input type="submit" name="submit_sort" value="Pokaż">
                </form>

                <form class="add__car" action="add__car.php" method="POST">
                    <input type="text" name="car__description" placeholder="Opis" required>
                    <input type="number" name="car__price" placeholder="Cena" required>
                    <input type="number" name="car__promo" placeholder="Promocja w %" required>
                    <input type="submit" value="Dodaj">
                </form>
            </div>
            <main class="main">
                <?php
                    if(isset($submit_btn)) {
                        for($i=0; $i<$amount_to_show; $i++) {
                            createTab($i,$photo,$description,$price,$promo);
                        }
                    }
                ?>
            </main>
            <footer class="footer">footer</footer>
        </div>
    </body>
</html>