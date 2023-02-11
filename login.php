<?php

include('server.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Savor'y - Login</title>
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
    </style>
</head>

<body class="bg-[#E8C07D] overflow-x-hidden">
    <?php require "nav-component.php" ?>
    <div class="scroll-container h-screen w-screen flex flex-col">
        <section class="scroll-child h-screen bg-[#282421] w-screen relative">
            <div class="grid grid-cols-2 overflow-hidden h-screen">
                <div class="h-screen relative overflow-hidden">
                    <div class="main-filter h-screen bg-black opacity-30 w-[50vw] absolute top-0 left-0 z-10"></div>
                    <img class="w-[50vw] h-screen object-cover object-top" src="images/login-bg.jpg" alt="" />
                </div>
                <div class="flex justify-center items-center flex-col h-[90%]">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-10">Login</div>

                    <form class="mb-5 w-[35%]" method="POST" action="login.php">
                        <p class="text-green-500 text-sm mb-5">
                            <?php
                            if (isset($_GET["reg"]) && isset($_GET["login"])) {
                                echo "Registration Done! Login to continue.";
                            }
                            ?>
                        </p>
                        <div class="relative mb-5">
                            <input type="email" id="email" name="email"
                                class="block px-3 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " autocomplete="off" required />
                            <label for="email"
                                class="absolute text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#282421] px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email
                                Address</label>
                        </div>
                        <div class="relative mb-5">
                            <input type="password" id="password" name="password"
                                class="block px-3 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="password" name="password"
                                class="absolute text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#282421] px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                        </div>
                        <div class="mb-5 text-white text-sm">
                            <p>Haven't sign up yet? <span><a
                                        href="http://localhost/SavoryOnlineRestaurantServiceSystem/register.php"
                                        class="text-blue-600 hover:underline">Register Here</a></span></p>
                        </div>
                        <div>
                            <button name="login_user" type="submit"
                                class="w-full bg-green-500 hover:bg-green-600 rounded-lg py-2.5 text-white font-medium ">Sign
                                In</button>
                        </div>
                        <?php include('errors.php'); ?>
                    </form>


                </div>
            </div>
        </section>

        <div class="scroll-child">
            <?php require "footer.php" ?>
        </div>
    </div>

</body>

</html>