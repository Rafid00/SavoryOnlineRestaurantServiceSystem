<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navigation Icon</title>
</head>

<body>
    <div class="nav-icon fixed top-16 left-16 z-40 w-[45px]">
        <button><img class="hover:scale-110 transition-all" src="images/nav.svg" alt="" /></button>
    </div>
    <div
        class="nav-side -translate-x-[1000px] bg-[#322d29] h-screen w-[25vw] fixed z-[999] text-white border-r-[1px] border-r-neutral-500 transition-all duration-700">
        <div class="close-btn absolute right-10 top-10 w-[30px]">
            <button><img class="hover:scale-110 transition-all" src="images/close.svg" alt="" /></button>
        </div>
        <ul class="flex flex-col gap-7 justify-center items-center h-full">
            <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="index.php">HOME</a></li>
            <li>
                <div class="h-[1px] w-[280px] bg-white rounded"></div>
            </li>
            <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="about-page.php">ABOUT</a>
            </li>
            <li>
                <div class="h-[1px] w-[280px] bg-white rounded"></div>
            </li>
            <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="contact-us.php">CONTACT</a>
            </li>
            <li>
                <div class="h-[1px] w-[280px] bg-white rounded"></div>
            </li>
            <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="shopping-cart.php">CART</a></li>

            </li>
            <li>
                <div class="h-[1px] w-[280px] bg-white rounded"></div>
            </li>
            <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="order-page.php">ORDER</a></li>
            <li>
                <div class="h-[1px] w-[280px] bg-white rounded"></div>
            </li>
            <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="profile-page.php">PROFILE</a>
            <li>
                <div class="h-[1px] w-[280px] bg-white rounded"></div>
            </li>
            <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="">FEEDBACK</a></li>
        </ul>
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