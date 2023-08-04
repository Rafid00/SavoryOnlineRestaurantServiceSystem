<?php
if (isset($_GET['tran_id'])) {
    $tran_id = $_GET['tran_id'];
} else {
    header("Location: profile-page.php");
    exit;
}

session_start();
if (!isset($_SESSION['id'])) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Savor'y - Transaction</title>
    <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                    },
                },
            },
        };
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
               content-visibility: auto;
            }
         }
      </style>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Montserrat";
        }

        .bg-main {
            background-image: url(images/bg-img.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .title {
            font-family: "Sofia", cursive;
        }

        .scroll-container {
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        .scroll-child {
            scroll-snap-align: start;
            flex: none;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        @keyframes slide-in {
            0% {
                height: 0%;
            }

            100% {
                height: 100%;
            }
        }

        @keyframes slide-out {
            0% {
                height: 100%;
            }

            100% {
                height: 0%;
            }
        }
    </style>
</head>

<body class="bg-[#282421] overflow-x-hidden text-white">
    <?php require "nav-component.php" ?>
    <div class="h-screen w-screen flex flex-col">
        <div class="flex lg:justify-between items-center lg:py-14 lg:px-64 pt-28 pb-14 flex-wrap lg:flex-nowrap justify-center gap-10 lg:gap-0 w-full">
            <div class="flex flex-col justify-center items-center">
                <p class="text-lg lg:text-2xl font-bold">Transaction Details</p>
                <p class="text-xs">
                    <?php echo $tran_id ?>
                </p>
            </div>
        </div>

        <div class="bg-[#282421] pt-12 z-50 relative lg:mx-64 text-center lg:text-start">
            <p class="foodItems-title text-xl font-medium mb-14">Ordered Food Item List</p>

            <div class="foodItems grid grid-cols-1 lg:grid-cols-4 whitespace-nowrap px-10 lg:px-0 pb-44 w-full gap-8" id="everyFoodItems">

                <?php

                include("config.php");

                $sql = "SELECT * FROM `transaction_items` WHERE transaction_id ='{$tran_id}'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $sql2 = "SELECT * FROM `food_items` WHERE name = '{$row["item_name"]}'";
                        $result2 = $conn->query($sql2);
                        $row2 = $result2->fetch_assoc();

                        echo '<div
            class="' . $row2["type"] . ' rounded overflow-hidden bg-[#322d29] h-[360px] hover:scale-[1.02] transition-all duration-200">
            <div class="cursor-pointer"><img class="w-full h-[200px] object-cover" src="images/' . $row2["image_name"] . '" alt=""
                    style="object-position: 20% 20%" />
                <div class="p-5">
                    <p class="food-item-name font-medium text-center truncate">' . $row2["name"] . '</p>
                    <hr class="mt-5" />
                    <div class="flex text-sm justify-between items-center mt-5 font-bold">
                        <p>Price: ' . $row2["price"] . '$</p>
                        <p>Quantity: ' . $row["quantity"] . '</p>
                    </div>
                    
                </div>
            </div>
        </div>';

                    }


                } else {
                    echo "0 results";
                }

                $conn->close();

                ?>


            </div>
        </div>

        <?php require "footer.php" ?>
    </div>
</body>

</html>