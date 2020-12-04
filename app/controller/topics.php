<?php

include(APPROOT . '/database/db.php');
include(APPROOT . '/helpers/validateTopics.php');

$table = 'topics';

//init error
$errors = [];

//set global vars
$id = '';
$name = '';
$description = '';

$topics = selectAll($table);


if (isset($_POST['add_topic'])) {
    $errors = topicValidate($_POST);

    if (count($errors) == 0) {
        unset($_POST['add_topic']);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = 'Topic Created Successfully!';
        $_SESSION['type'] = 'success';
        header('location:' . URLROOT . '/admin/topics/index.php');
        exit();
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

//get id from url 
//for update topic
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Topic Deleted Successfully!';
    $_SESSION['type'] = 'success';
    header('location:' . URLROOT . '/admin/topics/index.php');
    exit();
}

//post the update
if (isset($_POST['update_topic'])) {

    $errors = topicValidate($_POST);

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update_topic'], $_POST['id']);

        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Topic Updated Successfully!';
        $_SESSION['type'] = 'success';
        header('location:' . URLROOT . '/admin/topics/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}
