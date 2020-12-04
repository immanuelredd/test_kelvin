<?php

session_start();
require(APPROOT . '/database/connect.php');


function display($val)
{
    echo '<pre>' . print_r($val, true) . '</pre>';
    die();
}

function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}


function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $results;
    } else {
        $index = 0;
        foreach ($conditions as $key => $value) {
            if ($index === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $index++;
        }
        //display($sql);
        $stmt = executeQuery($sql, $conditions);
        $results = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $results;
    }
}

function selectOne($table, $conditions)
{
    //global $conn;
    $sql = "SELECT * FROM $table";

    $index = 0;
    foreach ($conditions as $key => $value) {
        if ($index === 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $index++;
    }
    //display($sql);
    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $results = $stmt->get_result()->fetch_assoc();
    return $results;
}

function create($table, $data)
{
    //global $conn;
    $sql = "INSERT INTO $table SET";

    $index = 0;

    foreach ($data as $key => $value) {
        if ($index === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $index++;
    }

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}

function update($table, $id, $data)
{
    //global $conn;
    $sql = "UPDATE $table SET";

    $index = 0;

    foreach ($data as $key => $value) {
        if ($index === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $index++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
}

function delete($table, $id)
{
    //global $conn;
    $sql = "DELETE FROM $table WHERE id=?";
    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt;
}

/*
$conditions = [
    'admin' => 0,
    'username' => 'immanuelredd'
];
$data = [
    'username' => 'rightMan2',
    'admin' => 0,
    'email' => 'rightMan94@gmail.com',
    'password' => 'rightMan1234'
];
$users = delete('users', 2);
display($users);
*/
