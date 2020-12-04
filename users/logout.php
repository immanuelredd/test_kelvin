<?php

require_once('../app/config/config.php');
session_start();

unset($_SESSION['id']);
unset($_SESSION['usernme']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);

session_destroy();


header('location:' . URLROOT . '/blog.php');
