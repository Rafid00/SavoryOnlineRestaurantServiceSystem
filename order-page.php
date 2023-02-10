<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Savor'y - Order</title>
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
        <div class="flex justify-between items-center py-14 px-64">
            <div class="flex flex-col justify-center items-center">
                <p class="text-2xl font-bold">ORDER</p>
                <p class="text-xs">Food List</p>
            </div>
            <div class="search">
                <input class="text-black w-[500px] rounded-full h-[50px] px-10 py-2" type="search" name="search"
                    id="search" autocomplete="off" placeholder="Search" />

            </div>
            <a href="shopping-cart.php">
                <button class="cart p-3 rounded-full bg-white relative">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                        <defs></defs>
                        <g style="
                        stroke: none;
                        stroke-width: 0;
                        stroke-dasharray: none;
                        stroke-linecap: butt;
                        stroke-linejoin: miter;
                        stroke-miterlimit: 10;
                        fill: none;
                        fill-rule: nonzero;
                        opacity: 1;
                     " transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                            <path
                                d="M 73.713 65.44 H 27.689 c -3.566 0 -6.377 -2.578 -6.686 -6.13 c -0.21 -2.426 0.807 -4.605 2.592 -5.939 L 16.381 21.07 c -0.199 -0.889 0.017 -1.819 0.586 -2.53 s 1.431 -1.124 2.341 -1.124 H 87 c 0.972 0 1.884 0.471 2.446 1.263 c 0.563 0.792 0.706 1.808 0.386 2.725 l -7.798 22.344 c -1.091 3.13 -3.798 5.429 -7.063 5.999 l -47.389 8.281 c -0.011 0.001 -0.021 0.003 -0.032 0.005 c -0.228 0.04 -0.623 0.126 -0.568 0.759 c 0.056 0.648 0.48 0.648 0.708 0.648 h 46.024 c 1.657 0 3 1.343 3 3 S 75.37 65.44 73.713 65.44 z"
                                style="
                           stroke: none;
                           stroke-width: 1;
                           stroke-dasharray: none;
                           stroke-linecap: butt;
                           stroke-linejoin: miter;
                           stroke-miterlimit: 10;
                           fill: rgb(0, 0, 0);
                           fill-rule: nonzero;
                           opacity: 1;
                        " transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <circle cx="28.25" cy="75.8" r="6.5" style="
                           stroke: none;
                           stroke-width: 1;
                           stroke-dasharray: none;
                           stroke-linecap: butt;
                           stroke-linejoin: miter;
                           stroke-miterlimit: 10;
                           fill: rgb(0, 0, 0);
                           fill-rule: nonzero;
                           opacity: 1;
                        " transform="  matrix(1 0 0 1 0 0) " />
                            <circle cx="68.28999999999999" cy="75.8" r="6.5" style="
                           stroke: none;
                           stroke-width: 1;
                           stroke-dasharray: none;
                           stroke-linecap: butt;
                           stroke-linejoin: miter;
                           stroke-miterlimit: 10;
                           fill: rgb(0, 0, 0);
                           fill-rule: nonzero;
                           opacity: 1;
                        " transform="  matrix(1 0 0 1 0 0) " />
                            <path
                                d="M 19.306 23.417 c -1.374 0 -2.613 -0.95 -2.925 -2.347 l -1.375 -6.155 c -0.554 -2.48 -2.716 -4.212 -5.258 -4.212 H 3 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 6.749 c 5.372 0 9.942 3.662 11.113 8.904 l 1.375 6.155 c 0.361 1.617 -0.657 3.221 -2.274 3.582 C 19.742 23.393 19.522 23.417 19.306 23.417 z"
                                style="
                           stroke: none;
                           stroke-width: 1;
                           stroke-dasharray: none;
                           stroke-linecap: butt;
                           stroke-linejoin: miter;
                           stroke-miterlimit: 10;
                           fill: rgb(0, 0, 0);
                           fill-rule: nonzero;
                           opacity: 1;
                        " transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    </svg>
                    <div id="cart-count"
                        class="absolute -bottom-1 -right-1 bg-green-600 text-xs px-2 py-1 rounded-full">
                        <?php
                        if (isset($_SESSION['id'])) {
                            include("config.php");
                            $query = "SELECT SUM(quantity) AS 'total_quantity' FROM cart WHERE customer_id = '{$_SESSION['id']}';";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);
                            if ($row['total_quantity'] != NULL) {
                                echo $row['total_quantity'];
                            } else {
                                echo "0";
                            }
                        } else {
                            echo "0";
                        }
                        ?>
                    </div>
                </button>
            </a>
        </div>

        <div class="px-64 flex justify-between items-center mt-12 mb-12">
            <div class="font-medium">Find Your Desired Food</div>
            <div class="text-black">
                <select class="w-[200px] rounded-full px-5" name="sortby" id="sortby">
                    <option value="recently">Recently added</option>
                    <option value="h2l">Higher to lower</option>
                    <option value="l2h">Lower to higher</option>
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </div>
        </div>

        <div class="itemList px-64 mb-44">
            <ul class="flex items-center gap-16 transition-all absolute h-[108px]">
                <li>
                    <button id="EveryButton"
                        class="flex justify-center items-center flex-col focus:px-2 focus:py-3 focus:pb-5 focus:bg-zinc-700 focus:rounded-full focus:-translate-x-2 focus:-translate-y-3 transition-all">
                        <img class="mb-4 p-1 rounded-full bg-white" src="images/meal.png" alt="" />
                        <p class="font-medium">Every</p>
                    </button>
                </li>
                <li>
                    <button id="PizzaButton"
                        class="flex justify-center items-center flex-col focus:px-2 focus:py-3 focus:pb-5 focus:bg-zinc-700 focus:rounded-full focus:-translate-x-2 focus:-translate-y-3 transition-all">
                        <img class="mb-4 p-1 rounded-full bg-white" src="images/pizza.png" alt="" />
                        <p class="font-medium">Pizza</p>
                    </button>
                </li>
                <li>
                    <button id="WrapsButton"
                        class="flex justify-center items-center flex-col focus:px-2 focus:py-3 focus:pb-5 focus:bg-zinc-700 focus:rounded-full focus:-translate-x-2 focus:-translate-y-3 transition-all">
                        <img class="mb-4 p-1 rounded-full bg-white" src="images/wrap.png" alt="" />
                        <p class="font-medium">Wraps</p>
                    </button>
                </li>
                <li>
                    <button id="BurgerButton"
                        class="flex justify-center items-center flex-col focus:px-2 focus:py-3 focus:pb-5 focus:bg-zinc-700 focus:rounded-full focus:-translate-x-2 focus:-translate-y-3 transition-all">
                        <img class="mb-4 p-1 rounded-full bg-white" src="images/burger.png" alt="" />
                        <p class="font-medium">Burger</p>
                    </button>
                </li>
                <li>
                    <button id="DrinksButton"
                        class="flex justify-center items-center flex-col focus:px-2 focus:py-3 focus:pb-5 focus:bg-zinc-700 focus:rounded-full focus:-translate-x-2 focus:-translate-y-3 transition-all">
                        <img class="mb-4 p-1 rounded-full bg-white" src="images/coffee.png" alt="" />
                        <p class="font-medium">Drinks</p>
                    </button>
                </li>
            </ul>
        </div>

        <div id="search-result-div" style="display: none">
            <p class="text-xl mb-14 font-medium px-64">
                Search Result</p>
            <div class="px-64 mb-12">
                <div class="foodItems grid grid-cols-4 gap-8 transition-all" id="searchresult">
                </div>
            </div>
        </div>

        <div class="bg-[#282421] pt-12 z-50 relative  mx-64">
            <p class="foodItems-title text-xl font-medium mb-14">Food Item List</p>

            <div class="foodItems grid grid-cols-4 whitespace-nowrap pb-44 w-full gap-8" id="everyFoodItems">

                <?php

                include("config.php");

                $sql = "SELECT * FROM `food_items` ORDER BY `added_time` DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

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


                } else {
                    echo "0 results";
                }

                $conn->close();

                ?>


            </div>
        </div>

        <?php require "footer.php" ?>
    </div>
    <script type="text/javascript">

        (() => {
            let data = $("#everyFoodItems").children();


            $("#EveryButton").click(() => {
                $("#everyFoodItems").html("");
                $.each(data, (index, value) => {
                    $("#everyFoodItems").append(value);
                })

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
            })

            $("#PizzaButton").click(() => {
                $("#everyFoodItems").html("");
                $.each(data, (index, value) => {
                    if ($(value).hasClass("Pizza")) {
                        $("#everyFoodItems").append(value);
                    }
                })

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
            })

            $("#WrapsButton").click(() => {
                $("#everyFoodItems").html("");
                $.each(data, (index, value) => {
                    if ($(value).hasClass("Wraps")) {
                        $("#everyFoodItems").append(value);
                    }
                })

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
            })

            $("#BurgerButton").click(() => {
                $("#everyFoodItems").html("");
                $.each(data, (index, value) => {
                    if ($(value).hasClass("Burger")) {
                        $("#everyFoodItems").append(value);
                    }
                })

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
            });

            $("#DrinksButton").click(() => {
                $("#everyFoodItems").html("");
                $.each(data, (index, value) => {
                    if ($(value).hasClass("Drinks")) {
                        $("#everyFoodItems").append(value);
                    }
                });

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
            })


        })();

        $(document).ready(function () {
            $("#search").on("input", function () {
                var input = $(this).val();
                input = input.trim();
                if (input != "") {
                    $.ajax({
                        url: "live-search.php",
                        method: "POST",
                        data: {
                            input: input
                        },
                        success: function (data) {
                            $("#searchresult").html(data);
                            $("#search-result-div").css("display", "block").css("animation",
                                "slide-in 1s ease-in-out");
                        }
                    })
                } else {
                    let search_div = $("#search-result-div");
                    search_div.css("animation",
                        "slide-out 1s ease-in-out").one('animationend', () => {
                            search_div.css("display", "none");
                        });
                }
            })
        })


        let SortData;

        $(window).on("load", () => {
            $.ajax({
                url: "sort-by.php",
                method: "POST",
                dataType: "json",
                success: function (data) {
                    SortData = data;
                }
            })
        })

        $('#sortby').on('change', function () {
            if (this.value == 'recently') {
                $("#everyFoodItems").html(SortData[0]);
            }
            else if (this.value == 'h2l') {
                $("#everyFoodItems").html(SortData[1]);
            }
            else if (this.value == 'l2h') {
                $("#everyFoodItems").html(SortData[2]);
            }
            else if (this.value == 'asc') {
                $("#everyFoodItems").html(SortData[3]);
            }
            else if (this.value == 'desc') {
                $("#everyFoodItems").html(SortData[4]);
            }


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

        });

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
</body>

</html>