<?php
// Initiallizing variable

$username= "";
$errors= array();

// establishing connection

include_once('connection.php');

// loggin user

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username=mysqli_real_escape_string($conn, $_POST['matNum']);
    $password=mysqli_real_escape_string($conn, $_POST['pws']);

        if(empty($username)) {
            array_push($errors, "username is required");
                     }

            if(empty($password)) {
                 array_push($errors, "password is required");
                        }

        if(count($errors) == 0) {
            $password = $password;

            $query = "SELECT * FROM tbl_login WHERE matNum='$username' AND pws='$password' ";
            $results = mysqli_query($conn, $query);

                if (mysqli_num_rows($results) == 1) {
                    $_SESSION['matNum'] = $username;
                    $_SESSION['success'] ="You are now logged in";
                        header('location:dashboard.php');
                }else {
                    array_push($errors, "wrong username or password");
                    echo '<script type="text/javascript">';
                        echo 'alert("Invalid Username Or Password");';
                        echo 'window.location = "index.php";';
                        echo '</script>';
                }
        }
}

?>