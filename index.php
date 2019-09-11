<?php
    $mysqli = new mysqli('localhost','root','','cars');

    //CHECKING FOR ERROR WITH CONNECT
    if($mysqli -> connect_errno) {
        printf('Connect failed: %s\n', $mysqli -> connect_error);
        exit();
    }

    $sql = 'SELECT * FROM cars';

    //DEFINING ARRAYS
    $name = array();
    $description = array();
    $price = array();
    $promo = array();

    //FETCHING DATA FROM DB TO ARRAYS
    if($result = $mysqli ->query($sql)) {
        while($row = $result -> fetch_assoc()) {
            array_push($name,$row['nazwa']);
            array_push($description,$row['opis']);
            array_push($price,$row['cena']);
            array_push($promo,$row['promocja']);
        }
    }
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
                    echo('
                        <div class="item1 card">
                            <div class="image">
                                <img src="'.$name[0].'.png" alt="'.$name[0].'" class="image__img">
                            </div>
                            <div class="description">
                                <span class="description__content">'.$description[0].'</span>
                                <div class="colors">
                                    <ul class="colors__list">
                                        Dostępne kolory:
                                        <li>Biały</li>
                                        <li>Niebieski</li>
                                        <li>Czerwony</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="price__value">Cena: <span>'.$price[0].'zł</span></span>
                                    <span class="price__promo">Promocja <span>-'.$promo[0].'%</span></span>
                                </div>
                                <div class="buy">
                                    <a class="buy__link" href="#">Kup teraz!</a>
                                </div>
                                <div class="more">
                                    <a class="more__link" href="#">Zobacz więcej!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item2 card">
                            <div class="image">
                                <img src="'.$name[1].'.jpg" alt="'.$name[1].'" class="image__img">
                            </div>
                            <div class="description">
                                <span class="description__content">'.$description[1].'</span>
                                <div class="colors">
                                    <ul class="colors__list">
                                        Dostępne kolory:
                                        <li>Biały</li>
                                        <li>Niebieski</li>
                                        <li>Czerwony</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="price__value">Cena: <span>'.$price[1].' zł</span></span>
                                    <span class="price__promo">Promocja <span>-'.$promo[1].'%</span></span>
                                </div>
                                <div class="buy">
                                    <a class="buy__link" href="#">Kup teraz!</a>
                                </div>
                                <div class="more">
                                    <a class="more__link" href="#">Zobacz więcej!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item3 card">
                            <div class="image">
                                <img src="'.$name[2].'.jpg" alt="'.$name[2].'" class="image__img">
                            </div>
                            <div class="description">
                                <span class="description__content">'.$description[2].'</span>
                                <div class="colors">
                                    <ul class="colors__list">
                                        Dostępne kolory:
                                        <li>Biały</li>
                                        <li>Niebieski</li>
                                        <li>Czerwony</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="price__value">Cena: <span>'.$price[2].' zł</span></span>
                                    <span class="price__promo">Promocja <span>-'.$promo[2].'%</span></span>
                                </div>
                                <div class="buy">
                                    <a class="buy__link" href="#">Kup teraz!</a>
                                </div>
                                <div class="more">
                                    <a class="more__link" href="#">Zobacz więcej!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item4 card">
                            <div class="image">
                                <img src="'.$name[3].'.jpg" alt="'.$name[3].'" class="image__img">
                            </div>
                            <div class="description">
                                <span class="description__content">'.$description[3].'</span>
                                <div class="colors">
                                    <ul class="colors__list">
                                        Dostępne kolory:
                                        <li>Biały</li>
                                        <li>Niebieski</li>
                                        <li>Czerwony</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="price__value">Cena: <span>'.$price[3].' zł</span></span>
                                    <span class="price__promo">Promocja <span>-'.$promo[3].'%</span></span>
                                </div>
                                <div class="buy">
                                    <a class="buy__link" href="#">Kup teraz!</a>
                                </div>
                                <div class="more">
                                    <a class="more__link" href="#">Zobacz więcej!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item5 card">
                            <div class="image">
                                <img src="'.$name[4].'.jpeg" alt="'.$name[4].'" class="image__img">
                            </div>
                            <div class="description">
                                <span class="description__content">'.$description[4].'</span>
                                <div class="colors">
                                    <ul class="colors__list">
                                        Dostępne kolory:
                                        <li>Biały</li>
                                        <li>Niebieski</li>
                                        <li>Czerwony</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="price__value">Cena: <span>'.$price[4].' zł</span></span>
                                    <span class="price__promo">Promocja <span>-'.$promo[4].'%</span></span>
                                </div>
                                <div class="buy">
                                    <a class="buy__link" href="#">Kup teraz!</a>
                                </div>
                                <div class="more">
                                    <a class="more__link" href="#">Zobacz więcej!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item6 card">
                            <div class="image">
                                <img src="'.$name[5].'.jpg" alt="'.$name[5].'" class="image__img">
                            </div>
                            <div class="description">
                                <span class="description__content">'.$description[5].'</span>
                                <div class="colors">
                                    <ul class="colors__list">
                                        Dostępne kolory:
                                        <li>Biały</li>
                                        <li>Niebieski</li>
                                        <li>Czerwony</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="price__value">Cena: <span>'.$price[5].' zł</span></span>
                                    <span class="price__promo">Promocja <span>-'.$promo[5].'%</span></span>
                                </div>
                                <div class="buy">
                                    <a class="buy__link" href="#">Kup teraz!</a>
                                </div>
                                <div class="more">
                                    <a class="more__link" href="#">Zobacz więcej!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item7 card">
                            <div class="image">
                                <img src="'.$name[6].'.jpg" alt="'.$name[6].'" class="image__img">
                            </div>
                            <div class="description">
                                <span class="description__content">'.$description[6].'</span>
                                <div class="colors">
                                    <ul class="colors__list">
                                        Dostępne kolory:
                                        <li>Biały</li>
                                        <li>Niebieski</li>
                                        <li>Czerwony</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="price__value">Cena: <span>'.$price[6].' zł</span></span>
                                    <span class="price__promo">Promocja <span>-'.$promo[6].'%</span></span>
                                </div>
                                <div class="buy">
                                    <a class="buy__link" href="#">Kup teraz!</a>
                                </div>
                                <div class="more">
                                    <a class="more__link" href="#">Zobacz więcej!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item8 card">
                            <div class="image">
                                <img src="'.$name[7].'.jpg" alt="'.$name[7].'" class="image__img">
                            </div>
                            <div class="description">
                                <span class="description__content">'.$description[7].'</span>
                                <div class="colors">
                                    <ul class="colors__list">
                                        Dostępne kolory:
                                        <li>Biały</li>
                                        <li>Niebieski</li>
                                        <li>Czerwony</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="price__value">Cena: <span>'.$price[7].' zł</span></span>
                                    <span class="price__promo">Promocja <span>-'.$promo[7].'%</span></span>
                                </div>
                                <div class="buy">
                                    <a class="buy__link" href="#">Kup teraz!</a>
                                </div>
                                <div class="more">
                                    <a class="more__link" href="#">Zobacz więcej!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item9 card">
                            <div class="image">
                                <img src="'.$name[8].'.jpg" alt="'.$name[8].'" class="image__img">
                            </div>
                            <div class="description">
                                <span class="description__content">'.$description[8].'</span>
                                <div class="colors">
                                    <ul class="colors__list">
                                        Dostępne kolory:
                                        <li>Biały</li>
                                        <li>Niebieski</li>
                                        <li>Czerwony</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="price__value">Cena: <span>'.$price[8].' zł</span></span>
                                    <span class="price__promo">Promocja <span>-'.$promo[8].'%</span></span>
                                </div>
                                <div class="buy">
                                    <a class="buy__link" href="#">Kup teraz!</a>
                                </div>
                                <div class="more">
                                    <a class="more__link" href="#">Zobacz więcej!</a>
                                </div>
                            </div>
                        </div>
                    ');
                ?>
            </main>
            <footer class="footer">footer</footer>
        </div>

    </body>
</html>
<?php
    $mysqli -> close();
?>