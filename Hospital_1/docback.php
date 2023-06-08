<?php
if (isset($_POST['submit'])) {
    $pwd = $_POST['pwd'];

    if ($pwd === '123456') {
        header('Location: ./viewAppointments.php');
    } else {
        echo "<script> alert('Incorrect Password..!!'); </script>";
    }
}

?>