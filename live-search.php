<?php

include("config.php");
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $query = "SELECT * FROM `food_items` WHERE `name` LIKE '{$input}%' OR `name` LIKE '%{$input}%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div
            class="' . $row["type"] . ' rounded overflow-hidden bg-[#322d29] h-[400px] hover:scale-[1.02] transition-all duration-200">
            <a class="" href=""><img class="w-full h-[200px] object-cover" src="images/' . $row["image_name"] . '" alt=""
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
            </a>
        </div>';
        }
    }
}

?>

<script>
    $(".add-to-cart-btn").click(function (event) {
            event.preventDefault();
            const itemName = $(this).parent().parent().children()[0].innerText;
            $.ajax({
                url: "add-to-cart.php",
                method: "POST",
                data: {
                    itemName: itemName
                },
                success: function (data) {
                    if (data == -1) {
                        window.location.href = 'login.php';
                    } else {
                        $("#cart-count").html(data);
                    }

                }
            })
        })
</script>