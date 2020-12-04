<?php


function topicValidate($topic)
{
    $errors = [];

    if (empty($topic['name'])) {
        array_push($errors, 'Name is Required!');
    }

    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if (isset($existingTopic)) {
        array_push($errors, 'Topic already exist!');
    }

    return $errors;
}
