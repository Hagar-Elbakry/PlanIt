<?php

use Core\App;
use Core\Database;
use Models\Assignment;
$db = App::resolve(Database::class);

if($assignmentId) {
    Assignment::delete_assignment($db, $assignmentId);
    header("Location: ?course_id=$courseId");
} else {
    $error  = "Missing or incorrect assignment id";
    view("error.view.php",['error' => $error]);
}