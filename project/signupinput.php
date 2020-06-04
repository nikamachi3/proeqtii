<?php

    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $sql = "INSERT INTO register (Username, Password, Email) VALUES ('$name', '$password', '$email')";
    mysqli_query($connection, $sql);

?>