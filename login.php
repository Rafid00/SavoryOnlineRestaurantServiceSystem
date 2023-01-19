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
        <section class="scroll-child h-screen bg-[#282421] w-screen relative overflow-hidden">
            <div class="bg-img">
                <div class="main-filter h-screen bg-black opacity-60 w-screen absolute top-0 left-0 z-10"></div>
                <img class="absolute bottom-0 object-cover" src="images/login-bg.jpg">
            </div>
            <div class="flex shadow-md login-form z-20 w-[1100px] h-[650px] bg-white absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] rounded">
                <div class="left-part-login bg-[#282421] w-[35%] text-white">
                    <h1>NEW HERE?</h1>
                    <p>Register now to discover our food items and unlock our services.</p>
                </div>
                <div class="right-part-login">
                    
                </div>
            </div>
        </section>

        <div class="scroll-child">
            <?php require "footer.php" ?>
        </div>
    </div>

</body>

</html>