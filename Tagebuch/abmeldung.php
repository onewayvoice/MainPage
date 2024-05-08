<?php

    session_start();

    if (isset($_GET['logout'])) {
        header('location:anmeldung.php');
        exit();
    }