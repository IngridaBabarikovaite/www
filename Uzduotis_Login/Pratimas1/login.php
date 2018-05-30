<?php
    if ($_GET['user'].lenght > 0 || $_GET ['pass'].lenght > 0) {
        echo '<b>' . 'Sveiki!' . '</b>';
    } else {
        include "index.php";
    }
?>