<?php
session_start();
?>

<?php
include("config.php");
if (isset($_POST['itemName'])) {
    $input = $_POST['itemName'];
    $query = "DELETE FROM `cart` WHERE `customer_id` = '{$_SESSION['id']}' AND item_name = '{$input}'";
    mysqli_query($conn, $query);
} elseif (isset($_POST['allItem'])) {
    $query = "DELETE FROM `cart`";
    mysqli_query($conn, $query);
}
?>