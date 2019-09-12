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
    if($result = $mysqli -> query($sql)) {
        while($row = $result -> fetch_assoc()) {
            array_push($name,$row['name']);
            array_push($description,$row['description']);
            array_push($price,$row['price']);
            array_push($promo,$row['promo']);
        }
    }

    //CHECKING I FOR EXTENSION OF PHOTO
    function checkI($i) {
        $extension = '';
        if($i == 0) {
            $extension = 'png';
        } else if($i == 4) {
            $extension = 'jpeg';
        } else {
            $extension = 'jpg';
        }
        return $extension;
    }

    function createTab($i,$name,$description,$price,$promo) {
        echo('
            <div class="item card">
                <div class="image">
                    <img src="'.$name[$i].'.'.checkI($i).'" alt="'.$name[$i].'" class="image__img">
                </div>
                <div class="description">
                    <span class="description__content">'.$description[$i].'</span>
                    <div class="colors">
                        <ul class="colors__list">
                            Dostępne kolory:
                            <li>Biały</li>
                            <li>Niebieski</li>
                            <li>Czerwony</li>
                        </ul>
                    </div>
                    <div class="price">
                        <span class="price__value">Cena: <span>'.$price[$i].'zł</span></span>
                        <span class="price__promo">Promocja <span>-'.$promo[$i].'%</span></span>
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
    }
?>