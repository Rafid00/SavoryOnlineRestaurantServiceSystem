<!DOCTYPE html>
<html lang="en">

<head>
    <title>Savor'y - Contact Us</title>
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
        <section class="scroll-child contact-us h-screen bg-[#282421] w-screen relative">
            <div class="grid grid-cols-2 overflow-hidden">
                <div class="about-us-home-pic h-screen relative">
                    <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 left-0 z-10"></div>
                    <img class="w-[50vw] h-screen object-cover object-bottom" src="images/khanas2.jpg" alt="" />
                </div>
                <div class="flex justify-center items-center flex-col h-[90%]">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">Contact Us</div>
                    <div class="text-gray-200 text-xl mb-2 font-medium uppercase">let us know your thoughts</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div
                        class="w-[400px] text-justify text-white mb-12 flex flex-col justify-center items-center gap-6">
                        <input
                            class="w-full text-center border-t-transparent border-r-transparent border-l-transparent border-b-2 border-b-white bg-inherit active:outline-none outline-0 focus:border-x-transparent focus:border-t-transparent"
                            type="text" placeholder="NAME" style="--tw-ring-shadow: none" />

                        <input
                            class="w-full text-center border-t-transparent border-r-transparent border-l-transparent border-b-2 border-b-white bg-inherit active:outline-none outline-0 focus:border-x-transparent focus:border-t-transparent"
                            type="email" placeholder="EMAIL" style="--tw-ring-shadow: none" />
                        <textarea
                            class="resize-none w-full h-[45px] text-center border-t-transparent border-r-transparent border-l-transparent border-b-2 border-b-white bg-inherit active:outline-none outline-0 focus:border-x-transparent focus:border-t-transparent"
                            name="" id="" cols="30" rows="10" placeholder="MESSAGE"
                            style="--tw-ring-shadow: none"></textarea>
                    </div>
                    <div class="btns flex gap-5">
                        <button
                            class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                            Submit
                        </button>

                        <button
                            class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                            Message Us
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="scroll-child h-screen bg-[#282421] w-screen relative" id="ourMission">
            <div class="grid grid-cols-2 overflow-hidden h-screen">
                <div class="flex justify-center items-center flex-col h-[90%]">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">Outlets</div>
                    <div class="text-gray-200 text-xl mb-2 font-medium uppercase">Location We Have Reached</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div class="text-justify text-white mb-5 translate-x-7">
                        <div class="grid grid-cols-2 gap-5 justify-center items-center">
                            <div class="location-name bashundhara">
                                <button class="flex gap-2 justify-start items-center">
                                    <img class="w-6" src="images/loc.png" alt="" />
                                    <p>Bashundhara</p>
                                </button>
                            </div>
                            <div class="location-name mirpur">
                                <button class="flex gap-2 justify-start items-center">
                                    <img class="w-6" src="images/loc.png" alt="" />
                                    <p>Mirpur</p>
                                </button>
                            </div>
                            <div class="location-name mohammadpur">
                                <button class="flex gap-2 justify-start items-center">
                                    <img class="w-6" src="images/loc.png" alt="" />
                                    <p>Mohammadpur</p>
                                </button>
                            </div>
                            <div class="location-name graam">
                                <button class="flex gap-2 justify-start items-center">
                                    <img class="w-6" src="images/loc.png" alt="" />
                                    <p>Graam</p>
                                </button>
                            </div>
                            <div class="location-name dhanmondi">
                                <button class="flex gap-2 justify-start items-center">
                                    <img class="w-6" src="images/loc.png" alt="" />
                                    <p>Dhanmondi</p>
                                </button>
                            </div>
                            <div class="location-name gulshan">
                                <button class="flex gap-2 justify-start items-center">
                                    <img class="w-6" src="images/loc.png" alt="" />
                                    <p>Gulshan</p>
                                </button>
                            </div>
                            <div class="location-name mohakhali">
                                <button class="flex gap-2 justify-start items-center">
                                    <img class="w-6" src="images/loc.png" alt="" />
                                    <p>Mohakhali</p>
                                </button>
                            </div>
                            <div class="location-name banani">
                                <button class="flex gap-2 justify-start items-center">
                                    <img class="w-6" src="images/loc.png" alt="" />
                                    <p>Banani</p>
                                </button>
                            </div>
                            <div class="location-name">
                                <button class="flex gap-2 justify-start items-center">
                                    <img class="w-6" src="images/loc.png" alt="" />
                                    <p>Mohakhali</p>
                                </button>
                            </div>
                            <div class="location-name">
                                <button class="flex gap-2 justify-start items-center">
                                    <img class="w-6" src="images/loc.png" alt="" />
                                    <p>Banani</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map h-screen relative overflow-hidden transition-all duration-200">
                    <iframe class="h-screen w-[50vw]"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58398.27067050475!2d90.33915681322443!3d23.82244214738285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64d69573381%3A0x1b6904c6ebc86957!2sKhana&#39;s%20-%20Bashundhara%20R%2FA!5e0!3m2!1sen!2sbd!4v1667408054052!5m2!1sen!2sbd"
                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <div class="scroll-child">
            <?php require "footer.php" ?>
        </div>
    </div>
    <script>
    document.getElementsByClassName("mirpur")[0].addEventListener("click", () => {
        document.getElementsByClassName(
                "map"
            )[0].innerHTML =
            `<iframe class="h-screen w-[50vw]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58398.27067050475!2d90.33915681322443!3d23.82244214738285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1c3f9531e0b%3A0xf01a7868c9e0b79d!2sKhana&#39;s%20Mirpur!5e0!3m2!1sen!2sbd!4v1667409330822!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
    });
    document.getElementsByClassName("bashundhara")[0].addEventListener("click", () => {
        document.getElementsByClassName("map")[0].innerHTML = `<iframe
            class="h-screen w-[50vw]"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58398.27067050475!2d90.33915681322443!3d23.82244214738285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64d69573381%3A0x1b6904c6ebc86957!2sKhana&#39;s%20-%20Bashundhara%20R%2FA!5e0!3m2!1sen!2sbd!4v1667408054052!5m2!1sen!2sbd"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
         ></iframe>`;
    });
    document.getElementsByClassName("graam")[0].addEventListener("click", () => {
        document.getElementsByClassName(
                "map"
            )[0].innerHTML =
            `<iframe class="h-screen w-[50vw]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.3064462136704!2d90.38640822936988!3d23.878749740298282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c509e0ac30d3%3A0xecc6f998db0a14f7!2sKhana&#39;s%20Uttara%20Classic!5e0!3m2!1sen!2sbd!4v1667410289171!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
    });
    document.getElementsByClassName("mohammadpur")[0].addEventListener("click", () => {
        document.getElementsByClassName(
                "map"
            )[0].innerHTML =
            `<iframe class="h-screen w-[50vw]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.581524070731!2d90.35901631538488!3d23.76229789423764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bfc41eac59d1%3A0x2136aa891096f5f!2zS2hhbmEncyBNb2hhbW1hZHB1ciAtIOCmluCmvuCmqOCmvuCmuCDgpq7gp4vgprngpr7gpq7gp43gpq7gpqbgpqrgp4HgprA!5e0!3m2!1sen!2sbd!4v1667410334038!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
    });
    </script>
</body>

</html>