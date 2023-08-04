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
    <title>Savor'y - About</title>
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
            scroll-snap-type: none;
            scroll-behavior: smooth;
        }

        .scroll-child {
            scroll-snap-align: start;
            flex: none;
        }

        @media (min-width: 1024px) {
            .scroll-container {
                scroll-snap-type: y mandatory;
                overflow-y: scroll;
                overflow-x: hidden;
                scroll-behavior: smooth;
            }
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
        <section class="scroll-child h-screen bg-[#282421] w-screen relative" id="aboutUs">
            <div class="grid grid-cols-1 lg:grid-cols-2 overflow-hidden h-screen">
                <div class="flex justify-center items-center flex-col h-full lg:h-[83%] z-20">
                    <div
                        class="title text-white text-3xl md:text-5xl lg:text-7xl z-50 text-center border-2 w-fit lg:mt-20 mb-6">
                        About Us</div>
                    <div class="text-gray-200 text-xs md:text-base lg:text-xl mb-2 font-medium uppercase">What Defines
                        Us The Best</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div
                        class="w-[230px] md:w-[300px] lg:w-[450px] text-xs md:text-sm lg:text-base text-justify text-white lg:mb-5">
                        Savory is a culinary experience that will tantalize your taste buds. We believe that food is not
                        just sustenance, but an art form. Our menu is a harmonious blend of classic dishes and
                        contemporary flavors, all crafted with the freshest ingredients. Our chefs are passionate about
                        food and are constantly creating new and exciting dishes to keep our menu diverse and
                        interesting. Our goal is to provide our customers with an unforgettable dining experience, from
                        the first bite to the last. We believe that every meal should be an experience, and we strive to
                        make every visit to Savory a special one. Join us for a memorable dining experience and discover
                        the delicious at Savory.
                    </div>
                </div>
                <div class="about-us-home-pic h-screen fixed lg:relative overflow-hidden">
                    <div
                        class="main-filter h-screen lg:h-screen bg-black opacity-50 lg:opacity-20 w-screen lg:w-[50vw] absolute top-0 right-0 z-10">
                    </div>
                    <img class="w-screen lg:static lg:w-[50vw] h-screen object-cover object-top z-0"
                        src="images/restaurant-image.jpg" alt="" />
                </div>
            </div>
        </section>
        <section class="scroll-child h-screen bg-[#282421] w-screen relative" id="ourMission">
            <div class="grid grid-cols-2 overflow-hidden h-screen">
                <div class="about-us-home-pic h-screen relative overflow-hidden">
                    <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 left-0 z-10"></div>
                    <img class="w-[50vw] h-screen object-cover object-top" src="images/chef.jpg" alt="" />
                </div>
                <div class="flex justify-center items-center flex-col h-fit w-fit lg:w-full lg:h-[90%] rounded lg:rounded-none absolute lg:static top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] lg:translate-x-0 lg:translate-y-0 z-20 lg:bg-inherit bg-[#646464b7] p-9 lg:p-0">
                    <div class="title text-white text-3xl md:text-5xl lg:text-7xl z-50 text-center border-2 w-fit lg:mt-20 mb-6">Our Mission</div>
                    <div class="text-gray-200 text-xs md:text-base lg:text-xl mb-2 font-medium uppercase">What's Our Main Goal</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div class="w-[230px] md:w-[300px] lg:w-[450px] text-xs md:text-sm lg:text-base text-justify text-white lg:mb-5">
                        At Savory, our mission is to provide our customers with the highest quality dining experience by
                        constantly striving for culinary excellence. We source the best ingredients to create delicious
                        and memorable meals that will leave you wanting more. Our chefs are dedicated to creating
                        innovative and satisfying dishes that showcase the natural flavors and textures of the
                        ingredients. We believe that food should not only be delicious, but also visually stunning. Our
                        goal is to provide an ambiance that is both inviting and elegant. We want our customers to feel
                        at home and enjoy their time with us. We are committed to providing exceptional service and an
                        unforgettable dining experience every time you visit us at Savory.
                    </div>
                </div>
            </div>
        </section>
        <section class="scroll-child h-screen bg-[#282421] w-screen relative" id="story">
            <div class="grid grid-cols-2 overflow-hidden h-screen">
            <div class="lg:hidden"></div>
                <div class="flex justify-center items-center flex-col  h-fit w-fit lg:w-full lg:h-[90%] text-center lg:text-start rounded lg:rounded-none absolute lg:static top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] lg:translate-x-0 lg:translate-y-0 z-20 lg:bg-inherit bg-[#646464b7] p-9 lg:p-0">
                    <div class="title text-white text-3xl md:text-5xl lg:text-7xl z-50 text-center border-2 w-fit lg:mt-20 mb-6 ">Story Behind</div>
                    <div class="text-gray-200 text-xs md:text-base lg:text-xl mb-2 font-medium uppercase">The Story Behind Our Success</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div class="w-[230px] md:w-[300px] lg:w-[450px] text-xs md:text-sm lg:text-base text-justify text-white mb-5">
                        Savory has been a family-owned and operated restaurant for over 20 years. The story of Savory
                        began with our founder, who had a passion for cooking and a dream of opening a restaurant that
                        would serve delicious and memorable meals using only the freshest and highest quality
                        ingredients.

                        With hard work, dedication, and a lot of love, the dream became a reality. Our founder's passion
                        for food and commitment to excellence was the driving force behind the success of Savory. The
                        restaurant quickly gained a reputation for its delicious food and warm, inviting atmosphere.

                        Through the years, Savory has continued to evolve and grow, but our commitment to quality and
                        excellence remains the same. We are proud to be a part of our community and we are dedicated to
                        providing our customers with an unforgettable dining experience every time they visit us. We
                        invite you to come and join us at Savory and discover the delicious. Let us be a part of your
                        next memorable dining experience.<br />
                    </div>
                    <div class="text-left w-[230px] md:w-[300px] lg:w-[450px] text-xs md:text-sm lg:text-base text-white lg:mb-10">
                        Learn More :
                        <a class="text-blue-500" href="https://businessinspection.com.bd/khanas-success-story/">Article
                            Not Available.</a>
                    </div>
                </div>
                <div class="about-us-home-pic h-screen relative overflow-hidden">
                    <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 right-0 z-10"></div>

                    <img class="w-[50vw] h-screen object-cover object-top" src="images/storytelling.jpg" alt="" />
                </div>
            </div>
        </section>
        <div class="scroll-child">
            <?php require "footer.php" ?>
        </div>
    </div>

</body>

</html>