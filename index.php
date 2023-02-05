<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Savor'y</title>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

<body class="bg-[#E8C07D] overflow-x-hidden scroll-smooth">
    <div class="scroll-container h-screen w-screen flex flex-col scroll-smooth">
        <section class="scroll-child w-screen h-screen">
            <nav class="text-white h-[84.5px] font-medium absolute w-screen z-10 mt-10">
                <div class="logo-nav absolute left-[50%] translate-x-[-50%]"></div>
                <div
                    class="menu flex gap-[250px] justify-center items-center h-full absolute left-[50%] translate-x-[-50%]">
                    <div class="left-menu">
                        <ul class="flex gap-10 text-sm">
                            <li class="hover:text-yellow-500 transition-all duration-75"><a href="#aboutUs">ABOUT</a>
                            </li>
                            <li class="hover:text-yellow-500 transition-all duration-75"><a href="#contact">CONTACT</a>
                            </li>
                            <li class="hover:text-yellow-500 transition-all duration-75"><a
                                    href="order-page.php">ORDER</a></li>
                        </ul>
                    </div>

                    <div class="right-menu">
                        <ul class="flex gap-10 text-sm">
                            <?php if (!isset($_SESSION['name'])): ?>
                                <li class="hover:text-yellow-500 transition-all duration-75"><a href="login.php">SIGN IN</a>
                                <?php endif ?>
                            </li>
                            <?php if (isset($_SESSION['name'])): ?>
                                <li class="hover:text-yellow-500 transition-all duration-75 uppercase"><a
                                        href="profile-page.php">
                                        <?php echo $_SESSION['name']; ?>
                                    </a>
                                </li>
                            <?php endif ?>
                            <li class="hover:text-yellow-500 transition-all duration-75"><a href="">FEEDBACK</a></li>

                            <?php if (isset($_SESSION['name'])): ?>
                                <li class="hover:text-yellow-500 transition-all duration-75"><a
                                        href="index.php?logout='1'">LOGOUT</a>
                                </li>
                            <?php endif ?>

                            <?php if (!isset($_SESSION['name'])): ?>
                                <li class="hover:text-yellow-500 transition-all duration-75"><a href="register.php">JOIN
                                        US</a>
                                </li>
                            <?php endif ?>

                        </ul>
                    </div>
                </div>
            </nav>
            <div class="bg-main h-screen w-screen absolute -z-50">
                <div class="main-filter h-screen bg-black opacity-40 w-screen absolute top-0"></div>
            </div>
            <main
                class="absolute z-10 top-[50%] left-[50%] translate-x-[-50%] translate-y-[-45%] flex flex-col justify-center items-center">
                <div class="title title-main text-white text-9xl z-50 my-2 text-center border-2 w-fit">Savor'y</div>
                <div class="text-gray-200 text-center text-lg border-t-white uppercase font-medium">Where taste meets
                    quality
                </div>
                <div class="text-justify border-t-white w-[435px] mt-5 text-neutral-100"
                    style="text-align-last: center">
                    Savor'y, where taste, quality and ambiance meet for an unforgettable dining experience.
                </div>
                <div class="btns flex gap-12 my-16">
                    <div class="btn">
                        <a href="order-page.php"><button
                                class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                                Delivery
                            </button></a>

                    </div>
                    <div class="btn">
                        <a href="order-page.php">
                            <button
                                class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                                Pre-order
                            </button>
                        </a>
                    </div>
                </div>
            </main>

            <div
                class="social-main absolute left-7 top-[50%] translate-y-[-50%] flex flex-col justify-center items-center">
                <div class="cursor-vertical-text text-gray-200 rotate-180 text-xs uppercase"
                    style="writing-mode: vertical-rl">
                    Stay Connected
                </div>
                <div class="h-20 w-[1px] bg-gray-300 my-6 rounded"></div>
                <a href="https://www.facebook.com/khanaseat/" target="_blank"><img
                        class="w-[30px] mb-2 hover:scale-110 transition-all duration-75"
                        src="images/icons8-facebook.svg" alt="" /></a>
                <a href="https://www.instagram.com/khanas_eat/" target="_blank"><img
                        class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                        src="images/icons8-instagram.svg" alt="" /></a>
                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                        src="images/icons8-twitter.svg" alt="" /></a>
                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                        src="images/icons8-github.svg" alt="" /></a>
                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                        src="images/icons8-youtube.svg" alt="" /></a>
            </div>

            <a href="#aboutUs"
                class="scroll-down-btn absolute right-7 top-[50%] translate-y-[-50%] flex flex-col justify-center items-center animate-pulse">
                <div class="cursor-pointer text-gray-200 rotate-180 text-xs uppercase"
                    style="writing-mode: vertical-rl">
                    Scroll Down</div>
                <div class="h-20 w-[1px] bg-gray-300 my-6 rounded"></div>
                <img class="w-[40px] animate-bounce mt-2" src="images/scrolling.png" alt="" />
            </a>
        </section>
        <section class="scroll-child h-screen bg-[#282421] w-screen relative z-50" id="aboutUs">
            <div class="grid grid-cols-2 overflow-hidden">
                <div class="flex justify-center items-center flex-col h-[83%]">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">About Us</div>
                    <div class="text-gray-200 text-xl mb-2 font-medium uppercase">The Story Behind Our Success</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div class="w-[450px] text-justify text-white mb-10" style="text-align-last: center">
                        Welcome to Savory, where every dish is a masterpiece of taste and presentation. Our menu is
                        crafted with the freshest ingredients to delight your taste buds. Join us for a memorable dining
                        experience.
                    </div>
                    <a href="about-page.php"><button
                            class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                            Read More
                        </button></a>

                </div>
                <div class="about-us-home-pic h-screen">
                    <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 right-0 z-50"></div>

                    <img class="w-[50vw] h-screen object-cover" src="images/aboutus-home.jpg" alt="" />
                </div>
            </div>
        </section>
        <section class="scroll-child contact-us h-screen bg-[#282421] w-screen relative z-50" id="contact">
            <div class="grid grid-cols-2 overflow-hidden">
                <div class="about-us-home-pic h-screen relative">
                    <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 left-0 z-50"></div>
                    <img class="w-[50vw] h-screen object-cover" src="images/contact-us-img.jpg" alt="" />
                </div>
                <form action="index.php" method="post" class="flex justify-center items-center flex-col h-[90%]">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">Contact Us</div>
                    <div class="text-gray-200 text-xl mb-2 font-medium uppercase">let us know your thoughts</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div
                        class="w-[400px] text-justify text-white mb-12 flex flex-col justify-center items-center gap-6">
                        <input
                            class="w-full text-center border-t-transparent border-r-transparent border-l-transparent border-b-2 border-b-white bg-inherit active:outline-none outline-0 focus:border-x-transparent focus:border-t-transparent"
                            type="text" name="name" placeholder="NAME" style="--tw-ring-shadow: none" required />

                        <input
                            class="w-full text-center border-t-transparent border-r-transparent border-l-transparent border-b-2 border-b-white bg-inherit active:outline-none outline-0 focus:border-x-transparent focus:border-t-transparent"
                            type="email" name="email" placeholder="EMAIL" style="--tw-ring-shadow: none" required />


                        <textarea
                            class="resize-none w-full h-[45px] text-center border-t-transparent border-r-transparent border-l-transparent border-b-2 border-b-white bg-inherit active:outline-none outline-0 focus:border-x-transparent focus:border-t-transparent"
                            name="message" id="" cols="30" rows="10" placeholder="MESSAGE" required
                            style="--tw-ring-shadow: none"></textarea>
                    </div>
                    <div class="btns flex gap-5">
                        <button type="submit" name="send_message"
                            class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                            Submit
                        </button>

                        <a href="contact-us.php">
                            <button type="button"
                                class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                                Learn More
                            </button>
                        </a>

                    </div>
                </form>
            </div>
        </section>
        <section class="scroll-child h-screen bg-[#282421] w-screen relative z-50" id="popular">
            <div class="grid grid-cols-2 overflow-hidden">
                <div class="flex justify-center items-center flex-col h-[83%]">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">Popular</div>
                    <div class="text-gray-200 text-xl mb-2 font-medium uppercase text-center">
                        Favorite Items Of Our<br />Beloved Customers
                    </div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div class="w-[450px] text-justify text-white mb-2 uppercase font-semibold"
                        style="text-align-last: center">
                        <p>DualShock Burger</p>
                    </div>
                    <div class="w-[450px] text-justify text-white mb-5">
                        <p>Introducing the Dualshock Burger, a savory combination of beef patty, crispy bacon, and
                            melted cheese, all topped with a tangy special sauce. A taste sensation that will shock your
                            taste buds!</p>
                    </div>
                    <div class="text-white mb-10 w-[450px]">
                        <p class="uppercase font-medium text-center mb-2">Ingredients</p>
                        <ol class="text-center grid grid-cols-5 gap-3">
                            <li class="py-2 bg-green-600 rounded">Beef</li>
                            <li class="py-2 bg-green-600 rounded">Lettuce</li>
                            <li class="py-2 bg-green-600 rounded">Tomato</li>
                            <li class="py-2 bg-green-600 rounded">Cheese</li>
                            <li class="py-2 bg-green-600 rounded">Ketchup</li>
                        </ol>
                    </div>
                    <a href="order-page.php"><button
                            class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                            Order now
                        </button></a>

                </div>
                <div class="about-us-home-pic h-screen">
                    <div class="main-filter h-screen bg-black opacity-30 w-[50vw] absolute top-0 right-0 z-50"></div>

                    <img class="w-[50vw] h-screen object-cover" src="images/bg-img-alt.jpg" alt="" />
                </div>
            </div>
        </section>

        <div class="scroll-child">
            <?php require "footer.php" ?>
        </div>
    </div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>

<?php

include("config.php");

if (isset($_POST['send_message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = trim($_POST['message']);
    $user_id = $_SESSION['id'];

    $sql = "INSERT INTO messages (user_id, name, email,  message) VALUES ('$user_id', '$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Message sent successfully!",
                text: "We will get back to you if required. Thank You!",
                showConfirmButton: false,
                timer: 1500
            })
            </script>';

    } else {
        echo '<script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Message not sent!",
                showConfirmButton: false,
                timer: 1500
            })
            </script>';
    }
}

?>