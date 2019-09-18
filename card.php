<?php
    include_once('connect.php');
    include_once('index.php');

    if(isset($_POST['select'])) {
        $select = $_POST['select'];
        if($select == 'alphabetically') {
            $sql = "SELECT * FROM cars ORDER BY description";
        } else if($select == 'affordable_up') {
            $sql = "SELECT * FROM cars ORDER BY price";
        } else if($select == 'affordable_down') {
            $sql = "SELECT * FROM cars ORDER BY price DESC";
        } else if($select == 'promotionally_up') {
            $sql = "SELECT * FROM cars ORDER BY promo";
        } else if($select == 'promotionally_down') {
            $sql = "SELECT * FROM cars ORDER BY promo DESC";
        }

        //DEFINING ARRAYS
        $photo = array();
        $description = array();
        $price = array();
        $promo = array();

        $submit_btn = $_POST['submit_sort'];
        $amount_to_show = $_POST['amount'];

        //FETCHING DATA FROM DB TO ARRAYS
        if($result = $mysqli -> query($sql)) {
            while($row = $result -> fetch_assoc()) {
                array_push($photo,$row['photo']);
                array_push($description,$row['description']);
                array_push($price,$row['price']);
                array_push($promo,$row['promo']);
            }
        }
    }
?>