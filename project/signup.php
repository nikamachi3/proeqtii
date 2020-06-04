<?php
    include_once "header.php";
?>
<div class="contact-form">
    <form action="" method="post" id="contact-form">
        <input type="text" name="name" class="form-control" placeholder="Username" required> 
        <br>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <br> 
        <input type="password" name="password2" class="form-control" placeholder="Repeat Password" required> 
        <br>
        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        <br>
        <input type="submit" name="subm" class="form-control submit" value="SIGN UP" required>
    </form>

</div>
<?php
    $message = "Passwords Don't Match";
    $message1 = "Username needs to be more then 2 characters";
    if(isset($_POST["subm"])){
        if(strlen($_POST["name"]) > 2){
            if($_POST["password2"] == $_POST["password"]){
                include "signupinput.php";
            }
            else{
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
        else{
            echo "<script type='text/javascript'>alert('$message1');</script>";
        }
    }
?>