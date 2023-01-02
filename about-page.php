<!DOCTYPE html>
<html lang="en">

<head>
    <title>Khanas - About</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon" />
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
        <section class="scroll-child h-screen bg-[#282421] w-screen relative" id="aboutUs">
            <div class="grid grid-cols-2 overflow-hidden h-screen">
                <div class="flex justify-center items-center flex-col h-[83%]">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">About Us</div>
                    <div class="text-gray-200 text-xl mb-2 font-medium uppercase">What Defines Us The Best</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div class="w-[450px] text-justify text-white mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam saepe, voluptates omnis ad
                        nostrum
                        ipsam pariatur
                        numquam quibusdam commodi cum quasi soluta quas magni tenetur, assumenda similique, ea quae a!
                        Rerum
                        dolorum sed
                        pariatur totam itaque est iste velit laboriosam eveniet sint voluptas vel odit ullam, omnis
                        alias
                        magni. Incidunt
                        temporibus provident in, quia iste harum repellendus quam, aliquid quasi odio quod velit magni
                        non
                        officia recusandae.
                        Eius qui.
                    </div>
                </div>
                <div class="about-us-home-pic h-screen relative overflow-hidden">
                    <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 right-0 z-10"></div>
                    <img class="w-[50vw] h-screen object-cover object-top" src="images/restaurant-image.jpg" alt="" />
                </div>
            </div>
        </section>
        <section class="scroll-child h-screen bg-[#282421] w-screen relative" id="ourMission">
            <div class="grid grid-cols-2 overflow-hidden h-screen">
                <div class="about-us-home-pic h-screen relative overflow-hidden">
                    <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 left-0 z-10"></div>
                    <img class="w-[50vw] h-screen object-cover object-top" src="images/chef.jpg" alt="" />
                </div>
                <div class="flex justify-center items-center flex-col h-[90%]">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">Our Mission</div>
                    <div class="text-gray-200 text-xl mb-2 font-medium uppercase">What's Our Main Goal</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div class="w-[450px] text-justify text-white mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam saepe, voluptates omnis ad
                        nostrum
                        ipsam pariatur
                        numquam quibusdam commodi cum quasi soluta quas magni tenetur, assumenda similique, ea quae a!
                        Rerum
                        dolorum sed
                        pariatur totam itaque est iste velit laboriosam eveniet sint voluptas vel odit ullam, omnis
                        alias
                        magni. Incidunt
                        temporibus provident in, quia iste harum repellendus quam, aliquid quasi odio quod velit magni
                        non
                        officia recusandae.
                        Eius qui, neque veritatis suscipit veniam, ipsum accusamus nulla doloremque, voluptas quibusdam
                        sequi
                        natus excepturi
                        laborum fuga magni quam odio asperiores consequuntur.
                    </div>
                </div>
            </div>
        </section>
        <section class="scroll-child h-screen bg-[#282421] w-screen relative" id="story">
            <div class="grid grid-cols-2 overflow-hidden h-screen">
                <div class="flex justify-center items-center flex-col h-[94%]">
                    <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">Story Behind</div>
                    <div class="text-gray-200 text-xl mb-2 font-medium uppercase">The Story Behind Our Success</div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                    <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                    <div class="w-[450px] text-justify text-white mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam saepe, voluptates omnis ad
                        nostrum
                        ipsam pariatur
                        numquam quibusdam commodi cum quasi soluta quas magni tenetur, assumenda similique, ea quae a!
                        Rerum
                        dolorum sed
                        pariatur totam itaque est iste velit laboriosam eveniet sint voluptas vel odit ullam, omnis
                        alias
                        magni. Incidunt
                        temporibus provident in, quia iste harum repellendus quam, aliquid quasi odio quod velit magni
                        non
                        officia recusandae.
                        Eius qui, neque veritatis suscipit veniam, ipsum accusamus nulla doloremque, voluptas quibusdam
                        sequi
                        natus excepturi
                        laborum fuga magni quam odio asperiores consequuntur. Illo quaerat, ut ullam doloribus sunt eius
                        quidem reiciendis
                        ipsum quod consequuntur assumenda inventore nihil culpa explicabo commodi quasi voluptatibus eum
                        cum
                        fugit voluptas rem
                        similique repellat asperiores?<br />
                    </div>
                    <div class="text-left w-[450px] text-white mb-10">
                        Learn More :
                        <a class="text-blue-500" href="https://businessinspection.com.bd/khanas-success-story/">Article
                            by
                            Business Inspection Bangladesh</a>
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