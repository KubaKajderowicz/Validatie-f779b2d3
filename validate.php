<?php
if (isset($_POST['submit'])) {

    $emailadress = $_POST['email'];

    if (filter_var($emailadress, FILTER_VALIDATE_EMAIL)) {
        echo "<h1>Email is geldig!</h1>";
    } else {
        echo "<h1>Email is NIET geldig!</h1>";
    }
}
