<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navigation Icon</title>
</head>

<body>
    <div class="">
        <div class="absolute lg:fixed top-16 left-16 z-40">
            <div class="w-[35px] md:w-[40px] lg:w-[45px]"><button class="nav-icon"><img
                        class="hover:scale-110 transition-all" src="images/nav.svg" alt="" /></button></div>
            <div class="hidden lg:flex px-5 py-2 rounded-full bg-[#FFFFFF] gap-3 shadow-md fixed top-14 right-16 z-40">
                <?php
                $previous = $_SERVER['HTTP_REFERER'] ?? 'index.php';
                ?>

                <button>
                    <a href="<?php echo $previous; ?>">
                        <img class="w-[27.5px] hover:scale-110 transition-all" src="images/back.png" alt=""></a>
                </button>
                <button>
                    <a href="index.php">
                        <img class="w-[27.5px] hover:scale-110 transition-all" src="images/home.png" alt=""></a>
                </button>
                <button>
                    <a href="login.php">
                        <img class="w-[27.5px] hover:scale-110 transition-all" src="images/login.png" alt=""></a>
                </button>
            </div>
        </div>
        <div
            class="nav-side -translate-x-[1000px] bg-[#322d29] h-screen w-[70vw] md:w-[40vw] lg:w-[25vw] fixed z-[999] text-white border-r-[1px] border-r-neutral-500 transition-all duration-700">
            <div class="close-btn absolute right-10 top-10 w-[25px] lg:w-[30px]">
                <button><img class="hover:scale-110 transition-all" src="images/close.svg" alt="" /></button>
            </div>
            <ul class="flex flex-col gap-5 lg:gap-7 justify-center items-center h-full">
                <li class=""><a class="hover:text-yellow-500 transition-all duration-75 text-xs  md:text-base"
                        href="index.php">HOME</a></li>
                <li>
                    <div class="h-[1px] w-[140px] md:w-[200px] lg:w-[280px] bg-white rounded"></div>
                </li>
                <li class=""><a class="hover:text-yellow-500 transition-all duration-75 text-xs  md:text-base"
                        href="about-page.php">ABOUT</a>
                </li>
                <li>
                    <div class="h-[1px] w-[140px] md:w-[200px] lg:w-[280px] bg-white rounded"></div>
                </li>
                <li class=""><a class="hover:text-yellow-500 transition-all duration-75 text-xs  md:text-base"
                        href="contact-us.php">CONTACT</a>
                </li>
                <li>
                    <div class="h-[1px] w-[140px] md:w-[200px] lg:w-[280px] bg-white rounded"></div>
                </li>
                <li class=""><a class="hover:text-yellow-500 transition-all duration-75 text-xs  md:text-base"
                        href="shopping-cart.php">CART</a>
                </li>

                </li>
                <li>
                    <div class="h-[1px] w-[140px] md:w-[200px] lg:w-[280px] bg-white rounded"></div>
                </li>
                <li class="">
                    <?php
                    if (isset($_SESSION['name'])) {
                        echo '<a class="hover:text-yellow-500 transition-all duration-75 text-xs  md:text-base"
                    href="order-page.php">ORDER</a>';
                    } else {
                        echo '<a class="hover:text-yellow-500 transition-all duration-75 text-xs  md:text-base"
                    href="login.php">LOGIN</a>';
                    }
                    ?>
                </li>
                <li>
                    <div class="h-[1px] w-[140px] md:w-[200px] lg:w-[280px] bg-white rounded"></div>
                </li>
                <li class="">
                    <?php if (isset($_SESSION['name'])): ?>
                        <a class="hover:text-yellow-500 transition-all duration-75 text-xs  md:text-base"
                            href="profile-page.php">PROFILE</a>
                    <?php else: ?>
                        <a class="hover:text-yellow-500 transition-all duration-75 text-xs  md:text-base"
                            href="register.php">REGISTER</a>
                    <?php endif ?>

                <li>
                    <div class="h-[1px] w-[140px] md:w-[200px] lg:w-[280px] bg-white rounded"></div>
                </li>

                <li class=""><a class="hover:text-yellow-500 transition-all duration-75 text-xs  md:text-base"
                        href="feedback.php">FEEDBACK</a></li>
                <?php if (isset($_SESSION['name'])): ?>
                    <li>
                        <div class="h-[1px] w-[140px] lg:w-[280px] bg-white rounded"></div>
                    </li>
                    <li class="">
                        <a class="hover:text-yellow-500 transition-all duration-75 text-xs  md:text-base"
                            href="index.php?logout='1'">LOGOUT</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>

    <script>
        document.getElementsByClassName("nav-icon")[0].addEventListener("click", () => {
            document.getElementsByClassName("nav-side")[0].classList.add("translate-x-0");
        });
        document.getElementsByClassName("close-btn")[0].addEventListener("click", () => {
            document.getElementsByClassName("nav-side")[0].classList.remove("translate-x-0");
        });
    </script>
</body>

</html>
