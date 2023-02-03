<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: index.php");
}
?>

<?php
if (!isset($_SESSION['id'])) {
    header('location: login.php');
}
?>

<?php

include("config.php");

if (isset($_POST['edit-profile'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bio = $_POST['bio'];
    $id = $_SESSION['id'];

    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {

            $target_dir = "images/uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            $file_path = $target_file;

            $query = "UPDATE users SET image_name = '$file_path' WHERE id = '$id'";
            $result = mysqli_query($conn, $query);

        } else {
            header("Location: edit-profile.php?error=not_an_image");
            die();
        }
    }


    if (empty($name) || empty($email) || empty($phone) || empty($bio)) {
        header("Location: edit-profile.php?error=empty_fields");
        die();
    } else {
        $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if ($user['id'] !== $id && $user['email'] === $email) {
                header("Location: edit-profile.php?error=email_taken");
                die();
            }
        }

        $query = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', bio = '$bio' WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        header("Location: profile-page.php?success=profile_updated");
        die();
    }

}

header("Location: edit-profile.php?error=unknown_error");
die();

?>