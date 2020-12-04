<?php

include(APPROOT . '/database/db.php');
include(APPROOT . '/helpers/validateUsers.php');


$name = $mail = $pass = $rpass = "";
$table = 'users';

$errors = [];

function loginUsers($logInUser)
{
    //put them in a session 
    $_SESSION['id'] = $logInUser['id'];
    $_SESSION['username'] = $logInUser['username'];
    $_SESSION['admin'] = $logInUser['admin'];
    $_SESSION['message'] = 'You are now logged In!';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        //route it to blog.php
        header('location:' . URLROOT . '/admin/dashbord.php');
    } else {
        //route it to blog.php
        header('location:' . URLROOT . '/blog.php');
    }
    exit();
}

if (isset($_POST['register'])) {

    $errors = registerValidate($_POST);

    if (count($errors) === 0) {
        unset($_POST['register'], $_POST['rpassword']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        create($table, $_POST);

        header('location:' . URLROOT . '/users/login.php');
        exit();
    } else {
        $name = $_POST['username'];
        $mail = $_POST['email'];
        $pass = $_POST['password'];
        $rpass = $_POST['rpassword'];
    }
}

if (isset($_POST['login'])) {
    $errors = loginValidate($_POST);

    if (count($errors) === 0) {

        //get the info of the user
        $logInUser = selectOne($table, ['username' => $_POST['username']]);

        if ($logInUser && password_verify($_POST['password'], $logInUser['password'])) {
            loginUsers($logInUser);
        } else {
            array_push($errors, 'Wrong Credentials');
        }
    }
    $name = $_POST['username'];
    $pass = $_POST['password'];
}
