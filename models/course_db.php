<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

function get_courses($db) {
    $query = "SELECT * FROM courses ORDER BY id";
    $courses = $db->query($query)->fetchAll();

    return $courses;
}

function get_course_name($db, $courseID) {

    if(!$courseID) {
        return "All courses";
    }

    $query = "SELECT name FROM courses WHERE id = :courseID";
    $courseName = $db->query($query, [':courseID' => $courseID])->fetch();
    return $courseName;
}

function delete_course($db, $courseID) {
    $query = "DELETE FROM courses WHERE id = :courseID";
    $db->query($query,[':courseID', $courseID]);
}

function add_course($db, $courseName) {
    $query = "INSERT INTO courses (name) VALUES (:courseName)";
    $db->query($query, [':courseName' => $courseName]);
}