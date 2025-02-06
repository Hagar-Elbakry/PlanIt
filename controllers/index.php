<?php

use Core\Validator;
use Core\App;
use Core\Database;
use Models\Course;
use Models\Assignment;
$db = App::resolve(Database::class);

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
    case "list_courses":
        require base_path("controllers/courses/list.php");
        break;
    case "add_course":
        require base_path("controllers/courses/add.php");
        break;
        case "add_assignment":
            require base_path("controllers/assignments/add.php");
           break;
        case "delete_course":
            require base_path("controllers/courses/delete.php");
            break;
        case "delete_assignment":
           require base_path("controllers/assignments/delete.php");
            break;
    default:
        $course_name = Course::get_course_name($db, $courseId);
        $courses = Course::get_courses($db);
        $assignments = Assignment::get_assignments_by_course($db, $courseId);
        view("assignment_list.view.php", [
            'courseId' => $courseId,
            'course_name' => $course_name,
            'courses' => $courses,
            'assignments' => $assignments
        ]);
}