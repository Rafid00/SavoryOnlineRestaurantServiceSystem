<?php

include("config.php");

$SortByTitle = ['`added_time` DESC', '`price` DESC', '`price` ASC', '`name` ASC', '`name` DESC'];
$SortedItems = array("", "", "", "", "");

for ($i = 0; $i < 5; $i++) {
    $sql = "SELECT * FROM `food_items` ORDER BY " . $SortByTitle[$i];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $SortedItems[$i] = $SortedItems[$i] . '<div
            class="' . $row["type"] . ' rounded overflow-hidden bg-[#322d29] h-[400px] hover:scale-[1.02] transition-all duration-200">
            <div class="cursor-pointer" href=""><img class="w-full h-[200px] object-cover" src="images/' . $row["image_name"] . '" alt=""
                    style="object-position: 20% 20%" />
                <div class="p-5">
                    <p class="food-item-name font-medium text-center truncate">' . $row["name"] . '</p>
                    <hr class="mt-5" />
                    <div class="flex text-sm justify-between items-center mt-5 font-bold">
                        <p>Price: ' . $row["price"] . '$</p>
                        <p>Ordered: ' . $row["ordered"] . '</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <button class="add-to-cart-btn px-4 py-2 mt-7 bg-green-500 hover:bg-green-600 w-full rounded">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>';
        }
    }
}


echo json_encode($SortedItems);

?>
