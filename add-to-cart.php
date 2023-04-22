<?php

session_start();

?>

<?php

include("config.php");
if (isset($_POST['itemName'])) {
    $input = $_POST['itemName'];
    if (isset($_SESSION['id'])) {
        $query = "SELECT * FROM `cart` WHERE `customer_id` ='{$_SESSION['id']}' AND `item_name` = '{$input}'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $query = "UPDATE `cart` SET quantity = quantity + 1, total_price = quantity * (SELECT price from `food_items` where `name`	= '{$input}') WHERE `customer_id` ='{$_SESSION['id']}' AND `item_name` = '{$input}';";
            mysqli_query($conn, $query);
            $query = "SELECT SUM(quantity) AS 'total_quantity' FROM cart WHERE customer_id = '{$_SESSION['id']}';";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            echo $row['total_quantity'];
        } else {
            $query = "INSERT INTO `cart` (customer_id, item_name, item_img, quantity, total_price) VALUES ('{$_SESSION['id']}', '{$input}', (SELECT image_name from `food_items` where `name`= '{$input}'), 1, (SELECT price from `food_items` where `name`	= '{$input}'));";
            mysqli_query($conn, $query);
            $query = "SELECT SUM(quantity) AS 'total_quantity' FROM cart WHERE customer_id = '{$_SESSION['id']}';";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            echo $row['total_quantity'];
        }
    } else {
        echo -1;
    }

}

?>