<?php
if ($_POST['user'].lenght > 0 || $_POST['pass'].lenght > 0) {
    // echo 'Yes';
    include "info.php";
} else {
    // echo 'No';
    include "index.php";}
?>