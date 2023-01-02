<?php

session_start();

?>

<?php

include("config.php");
if (isset($_POST['item']) && isset($_POST['quantity'])) {
    $input = $_POST['item'];
    $quantity = $_POST['quantity'];
    if (isset($_SESSION['id'])) {
        $query = "UPDATE `cart` SET quantity = {$quantity}, total_price = quantity * (SELECT price from `food_items` where `name`= '{$input}') WHERE `customer_id` ='{$_SESSION['id']}' AND `item_name` = '{$input}'";
        $result = mysqli_query($conn, $query);
    } else{
        echo -1;
    }

}

?>