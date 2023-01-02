<?php

session_start();

?>

<?php

include("config.php");

$sql = "SELECT * FROM `cart` WHERE customer_id='{$_SESSION['id']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    if (isset($_POST['orderType']) && isset($_POST['paymentMethod']) && isset($_POST['delName']) && isset($_POST['delThana']) && isset($_POST['delStreetAd']) && isset($_POST['delPhone']) && isset($_POST['delDistrict']) && isset($_POST['delPostal'])) {
        $orderType = $_POST['orderType'];
        $paymentMethod = $_POST['paymentMethod'];
        $name = $_POST['delName'];
        $thana = $_POST['delThana'];
        $street = $_POST['delStreetAd'];
        $phone = $_POST['delPhone'];
        $district = $_POST['delDistrict'];
        $postal = $_POST['delPostal'];
        $delivery_address = $street . ", " . $thana . ", " . $district . " - " . $postal;
        $delivery_address = strtolower($delivery_address);

        if ($name != "" && $street != "" && $phone != "" && $postal != "") {

            $sql = "SELECT SUM(total_price) AS `sum_price` FROM `cart` WHERE `customer_id` = '{$_SESSION['id']}'";
            $result = $conn->query($sql);

            $row = $result->fetch_assoc();
            $total_price = $row["sum_price"];
            $tax = sprintf('%0.2f', $total_price * 0.07);
            $grand_total = sprintf('%0.2f', $total_price + $tax + 2);

            $query = "INSERT INTO `transaction_info` (transaction_id, customer_id, order_type, payment_method, amount, delivery_address) VALUES (uuid(), '{$_SESSION['id']}', '{$orderType}', '{$paymentMethod}', '{$grand_total}', '{$delivery_address}');";
            mysqli_query($conn, $query);
            $query = "SELECT `transaction_id` FROM `transaction_info` ORDER BY `date` DESC LIMIT 1;";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $transaction_id = $row['transaction_id'];

            $query = "INSERT INTO transaction_items(transaction_id,item_name,quantity) SELECT '{$transaction_id}', item_name, quantity FROM `cart` WHERE customer_id = '{$_SESSION['id']}'";
            mysqli_query($conn, $query);

            $query = "DELETE FROM `cart` WHERE customer_id = '{$_SESSION['id']}'";
            mysqli_query($conn, $query);

            echo $transaction_id;
        } else {
            echo -3;
        }

    } else {
        echo -2;
    }
} else {
    echo -1;
}

?>