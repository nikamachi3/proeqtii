<?php
    include_once "header.php";
?>
<div class="contact-form">
    <form action="" method="post" id="contact-form">
        <input type="text" name="name" class="form-control" placeholder="Your Name" required> 
        <br>
        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        <br>
        <textarea name="message" class="form-control" placeholder="Message" cols="30" rows="10" required></textarea>
        <br>
        <input type="submit" name="sbm" class="form-control submit" value="SEND MESSAGE" required>
    </form>

</div>
<?php
    if(isset($_POST["sbm"])){
        include "contactinput.php";
    }
?>