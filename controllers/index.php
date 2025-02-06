<?php

use Core\App;
use Core\Database;
use Core\Validator;
$db = App::resolve(Database::class);
require base_path("models/assignment_db.php");
require base_path("models/course_db.php");

$assignmentId = Validator::number(INPUT_POST, 'assignment_id');
$description = Validator::string(INPUT_POST, 'description');
$courseName = Validator::string(INPUT_POST, 'course_name');

$courseId = Validator::number(INPUT_POST, 'course_id');

if(!$courseId) {
    $courseId = Validator::number(INPUT_GET, 'course_id');
}

$action = Validator::string(INPUT_POST, 'action');

if(!$action) {
    $action = Validator::string(INPUT_GET, 'action');
    if(!$action) {
        $action = "list_assignments";
    }
}

switch($action) {
    default:
        $course_name = get_course_name($db, $courseId);
        $courses = get_courses($db);
        $assignments = get_assignments_by_course($db, $courseId);
        view("assignment_list.view.php", [
            'courseId' => $courseId,
            'course_name' => $course_name,
            'courses' => $courses,
            'assignments' => $assignments
        ]);
}