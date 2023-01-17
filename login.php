<?php
session_start();

//   if (!isset($_SESSION['name'])) {
//   	$_SESSION['msg'] = "You must log in first";
//   	header('location: login.php');
//   }
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: index.php");
}
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

<body class="bg-[#282421] overflow-x-hidden">

    <?php require "nav-component.php" ?>

    <div class="scroll-container h-screen w-screen flex flex-col">
        <section class="scroll-child w-screen h-screen">
            <div class="login">
                <div class="left-side-login">
                    
                </div>

                <div class="right-side-login">
                    
                </div>
            </div>
        </section>

        <footer
            class="footer scroll-child w-screen h-[50vh] text-white z-50 border-t-[1px] border-t-neutral-500 bg-[#282421] relative">
            <div class="footer-containter absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                <div class="flex justify-between items-start w-[80vw]">
                    <div class="footer-left">
                        <div class="title text-white text-6xl z-50 mb-5 text-center border-2 w-fit">Khanas</div>
                        <div class="nav-links-footer">
                            <p class="w-[250px] mb-7">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero soluta illum voluptas
                                fugit
                                repudiandae dicta
                                architecto temporibus est delectus aperiam.
                            </p>
                            <div class="social-footer flex justify-between items-center w-[220px]">
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-facebook.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-instagram.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-twitter.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-github.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-youtube.svg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-center">
                        <div class="nav-links-footer">
                            <div class="text-white text-2xl z-50 w-fit font-medium">Navigations</div>
                            <div class="h-[2px] w-[100px] bg-white my-4 rounded"></div>

                            <ul class="flex flex-col gap-2 justify-center">
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="about-page.php">ABOUT</a></li>
                                <li><a href="contact-us.php">CONTACT</a></li>
                                <li><a href="profile-page.php">PROFILE</a></li>
                                <li><a href="">ORDER</a></li>
                                <li><a href="">FEEDBACK</a></li>
                                <li><a href="">RESERVATION</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-right">
                        <div class="text-white text-2xl z-50 w-fit font-medium">Location</div>
                        <div class="h-[2px] w-[100px] bg-white my-4 rounded"></div>

                        <div class="nav-links-footer">
                            <p class="w-[250px] mb-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Quisquam, rem?
                            </p>
                            <p class="my-2"><span class="underline">Phone:</span> +8801423542132</p>
                            <p class="my-2"><span class="underline">Email:</span> <a
                                    href="">rafid.ahmmad.3@gmail.com</a></p>
                            <p class="my-2"><span class="underline">Website:</span> <a href="">www.randomwebsite.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>