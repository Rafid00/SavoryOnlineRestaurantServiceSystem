<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: index.php");
}
if (!isset($_SESSION['id'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Savor'y - Feedback</title>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <div class="flex lg:justify-between items-center text-white lg:py-14 lg:px-64 pt-28 pb-14 flex-wrap lg:flex-nowrap justify-center gap-10 lg:gap-0 w-full">
        <div class="flex flex-col justify-center items-center">
            <p class="text-lg lg:text-2xl font-bold">FEEDBACK</p>
            <p class="text-xs">Top Five Reviews</p>
        </div>
    </div>
    <div class="h-[1350px] w-screen flex flex-col">
        <?php
        include("config.php");

        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $query = "SELECT * FROM users WHERE id = '$id'";
            $result = mysqli_query($conn, $query);

            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $phone = $row['phone'];
            $email = $row['email'];
            $bio = $row['bio'];
            $image = $row['image_name'];

        }
        ?>

        <?php
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $query = "DELETE FROM feedback WHERE feedback_id = '$id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo '<script>
        Swal.fire({
            icon: "success",
            title: "Feedback deleted successfully!",
            showConfirmButton: false,
            timer: 1500
        })
        setTimeout(()=>{
            window.location.href = "feedback.php";
        }, 1500);
        </script>';
            } else {
                echo '<script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Feedback not deleted!",
            showConfirmButton: false,
            timer: 1500
        })
        </script>';
            }
        }
        ?>

        <section class="h-[150vh] lg:h-screen gap-4 lg:gap-8 bg-[#282421] relative flex flex-wrap justify-center pt-[50px] w-[90%] mx-auto"
            id="feedback">
            <form class="reviews lg:h-screen flex-grow text-white  flex flex-col gap-4" action="feedback.php" method="GET">

                <?php
                if (isset($_POST['feedback'])) {
                    $id = $_SESSION['id'];
                    $rating = $_POST['rating'];
                    $message = $_POST['message'];
                    $query = "INSERT INTO feedback (feedback_id, user_id, rating, message) VALUES (uuid(), '$id', '$rating', '$message')";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Feedback sent successfully!",
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
            text: "Feedback not sent!",
            showConfirmButton: false,
            timer: 1500
        })
        </script>';
                    }
                }
                ?>

                <?php
                $query = "SELECT * FROM feedback ORDER BY date DESC LIMIT 0, 5";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $user_id = $row['user_id'];
                        $query2 = "SELECT * FROM users WHERE id = '$user_id'";
                        $result2 = $conn->query($query2);
                        $row2 = $result2->fetch_assoc();
                        $rating_stars = "";

                        if ($id == $row["user_id"]) {
                            $dlt_btn_show = "flex";
                        } else {
                            $dlt_btn_show = "hidden";
                        }

                        for ($i = 0; $i < 5; $i++) {
                            if ($i < $row['rating']) {
                                $rating_stars .= '<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>';
                            } else {
                                $rating_stars .= '<svg aria-hidden="true" class="w-5 h-5 text-gray-300" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Second star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>';
                            }

                        }

                        echo '<div class="review p-4 lg:p-10 rounded-md flex justify-center items-start w-full h-fit flex-col gap-4"
                        style="box-shadow: -1px 2px 18px 3px rgba(0,0,0,0.35); -webkit-box-shadow: -1px 2px 18px 3px rgba(0,0,0,0.35); -moz-box-shadow: -1px 2px 18px 3px rgba(0,0,0,0.35);">
    
                        <div class="flex gap-4 w-full items-start">
                            <div class="profile-pic flex justify-center items-center">
                                <img class="rounded-full object-cover object-top min-h-[56px] min-w-[56px] max-w-[56px] max-h-[56px]" src=" ' . $row2["image_name"] . '"
                                    alt="" />
                            </div>
                            <div class="flex flex-col gap-1 w-full">
                                <div class="reviewer-name flex gap-2">
                                    ' . ucwords($row2["name"]) . '
                                    <p class="">[' . $row["date"] . ']</p>
                                </div>
    
                                <div class="review-rating flex items-center px-5 py-2 rounded-lg bg-zinc-700 w-fit">
                                    ' . $rating_stars . '
                                </div>
                            </div>
                            <div class="delete-btn w-fit lg:w-full flex justify-end ' . $dlt_btn_show . '">
                                <button type="submit" name="delete" value="' . $row["feedback_id"] . '"
                                    class="rounded-full bg-red-500 p-2 w-fit h-fit hover:scale-[1.05] transition-all"><img
                                        class="lg:w-5 w-[40px]" src="images/bin.png" alt=""></button>
                            </div>
                        </div>
    
    
                        <div class="review-msg text-center lg:text-start w-full lg:w-fit">
                            ' . $row["message"] . '</div>
                    </div>';
                    }
                } else {
                    echo "No feedbacks found.";
                }

                ?>

            </form>
            <form class="review-form p-7 lg:p-10 rounded-md flex flex-col justify-center items-start w-fit h-fit" method="POST"
                action="feedback.php"
                style="box-shadow: -1px 2px 18px 3px rgba(0,0,0,0.35); -webkit-box-shadow: -1px 2px 18px 3px rgba(0,0,0,0.35); -moz-box-shadow: -1px 2px 18px 3px rgba(0,0,0,0.35);">
                <h2 class="text-white uppercase text-lg lg:text-2xl font-semibold mb-6 lg:mb-10">Write A Review</h2>
                <div class="flex flex-wrap lg:flex-nowrap justify-between items-center w-full mb-5 gap-2 lg:gap-0">
                    <div class="pic-name-profile flex justify-start items-center gap-4">
                        <div class="profile-pic w-[65px]">
                            <img class="rounded-full object-cover object-top w-14 h-14" src="<?php echo $image; ?>"
                                alt="" />
                        </div>
                        <div class="profile-name text-white">
                            <div class="flex items-center">
                                <p class="text-lg border-white w-fit">
                                    <?php echo ucwords($name); ?>
                                </p>
                            </div>
                            <p class="">
                                <span class="text-blue-500">
                                    <a href="">
                                        <?php echo $email; ?>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center px-5 py-2 rounded-lg bg-zinc-700">
                        <svg aria-hidden="true" id="star1" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" id="star2" class="w-5 h-5 text-gray-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Second star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" id="star3" class="w-5 h-5 text-gray-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Third star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" id="star4" class="w-5 h-5 text-gray-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fourth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" id="star5" class="w-5 h-5 text-gray-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fifth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>

                    <input class="hidden" type="number" name="rating" id="rating" value="1" max="5" min="1">
                </div>

                <div class="relative mb-5 lg:mb-10">
                    <textarea id="message" name="message" rows="3" cols="50"
                        class="block px-3 w-full pb-2.5 pt-4 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " autocomplete="off" required /></textarea>
                    <label for="message"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-[#282421] px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Message</label>
                </div>

                <button name="feedback" id="feedback-btn"
                    class="text-white py-2 px-7 bg-green-600 rounded-lg ml-auto">Submit</button>
            </form>
        </section>
    </div>

    <div class="scroll-child">
        <?php require "footer.php" ?>
    </div>
    <script>
        let stars = [document.getElementById('star1'), document.getElementById('star2'), document.getElementById('star3'), document.getElementById('star4'), document.getElementById('star5')];
        let rating = 1;
        for (let k = 1; k <= 5; k++) {
            document.getElementById('star' + k).addEventListener('click', () => {
                rating = k;
                for (let j = k - 1; j >= 0; j--) {
                    stars[j].classList.remove('text-gray-300');
                    stars[j].classList.add('text-yellow-400');
                }
                for (let i = k; i <= 4; i++) {
                    stars[i].classList.remove('text-yellow-400');
                    stars[i].classList.add('text-gray-300');
                }
                document.getElementById('rating').value = rating;
            });
        }

        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>