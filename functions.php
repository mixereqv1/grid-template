<?php

    function createTab($i,$photo,$description,$price,$promo) {
        echo('
            <div class="item card">
                <div class="image">
                    <img src="img/'.$photo[$i].'" alt="'.$photo[$i].'" class="image__img">
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

    // function createSelect($select) {
    //     if($select == 'alphabetically') {
    //         $sql = "SELECT * FROM cars ORDER BY description";
    //     } else if($select == 'affordable') {
    //         $sql = "SELECT * FROM cars ORDER BY price";
    //     } else if($select == 'promotionally') {
    //         $sql = "SELECT * FROM cars ORDER BY promo";
    //     }
    //     return $sql;
    // }
?>