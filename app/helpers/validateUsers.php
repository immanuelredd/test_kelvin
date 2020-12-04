<?php


function registerValidate($user)
{
    $errors = [];
    $passwordValidation = "#.*^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#";

    if (empty($user['username'])) {
        array_push($errors, 'Username Required!');
    }
    if (empty($user['email'])) {
        array_push($errors, 'Email Required!');
    } elseif (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
        array_push($errors, 'Please enter a correct Email Format');
    } else {
        $existigUser = selectOne('users', ['email' => $user['email']]);
        if (isset($existigUser)) {
            array_push($errors, 'Email Already Exist!');
        }
    }
    if (empty($user['password'])) {
        array_push($errors, 'Password Required!');
    } elseif (strlen($user['password']) < 13) {
        array_push($errors, 'Password should be minimum of 13 characters');
    } elseif (!preg_match($passwordValidation, $user['password'])) {
        array_push($errors, 'Password must have at least one numeber,two letters and two special characters');
    } else {
        if ($user['password'] !== $user['rpassword']) {
            array_push($errors, 'Password do not match!');
        }
    }


    return $errors;
}

function loginValidate($user)
{
    $errors = [];

    if (empty($user['username'])) {
        array_push($errors, 'Username Required!');
    }
    if (empty($user['password'])) {
        array_push($errors, 'Password Required!');
    }

    return $errors;
}
