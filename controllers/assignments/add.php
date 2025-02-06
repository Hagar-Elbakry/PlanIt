<?php


use Core\App;
use Core\Database;
use Models\Assignment;
$db = App::resolve(Database::class);

if($courseId && $description) {
    Assignment::add_assignment($db,$description, $courseId);
    header("Location: ?course_id=$courseId");
} else {
    $error  = "Please fill in all fields";
    view("error.view.php", ['error' => $error]);
}