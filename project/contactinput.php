<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $sql = "INSERT INTO contact (Name, Email, Description) VALUES ('$name', '$email', '$message')";
    mysqli_query($connection, $sql);

?>