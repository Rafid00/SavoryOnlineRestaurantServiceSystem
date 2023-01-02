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

  if(isset($_SESSION['name'])) {

  }

  include('server.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Khanas - Edit Profile</title>
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
        scroll-snap-type: y proximity;
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
        <section class="scroll-child contact-us h-fit bg-[#282421] w-screen relative">
            <div class="profile flex flex-col justify-center items-center mt-[100px] mb-[150px]">
                <div class="pic-name-profile flex justify-center items-center gap-14">
                    <div class="profile-pic">
                        <div class="btn relative">
                            <button
                                class="absolute ml-[50%] mt-[50%] translate-x-[-50%] translate-y-[-50%] text-sm w-[170px] text-white border-2 py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                                <input type="file" id="myfile" name="myfile"
                                    class="absolute top-0 left-0 w-full h-full opacity-0" />
                                Change Profile Picture
                            </button>
                        </div>
                        <div class="image-pro">
                            <img class="rounded-full w-[250px] h-[250px] object-cover object-top"
                                src="" alt="" />
                        </div>
                    </div>
                    <div class="profile-name text-white">
                        <div class="mb-4 flex items-center gap-6">
                            <?php if(isset($_SESSION['name'])): ?>
                            <input class="text-black" type="text" name="name" value="
                            <?php echo $_SESSION['name'] ?>" />
                            <div class="btn">
                                <a href="profile-page.php"><button
                                        class="text-white border-2 w-[224px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900" name="edit-profile">
                                        Save Profile
                                    </button></a>

                            </div>
                        </div>

                        <p class="mb-4 text-black">
                            <input class="mr-5" value="<?php echo $_SESSION['phone'] ?>" name="phone" type="text" />

                            <input value="<?php echo $_SESSION['email'] ?>" name="email" type="text" />
                        </p>
                        <p class="text-blue-500"></p>
                        <div class="profile-bio text-white">
                            <p class="text-2xl mb-3">Biography</p>
                            <textarea placeholder="Biography" class="w-[470px] text-black" cols="40" rows="3">
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam nam non quia nihil explicabo numquam.</textarea>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </section>

        <div class="scroll-child">
            <?php require "footer.php" ?>
        </div>
    </div>

</body>

</html>