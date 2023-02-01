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
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

        if ($check !== false) {

            $target_dir = "images/uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

            $file_path = $target_file;

            echo $file_path;

        } else {
            echo "File is not an image.";
        }
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bio = $_POST['bio'];
    $id = $_SESSION['id'];

    $query = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', bio = '$bio', image_name = '$file_path' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);
}

?>