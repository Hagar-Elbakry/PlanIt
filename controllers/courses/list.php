<?php

use Core\App;
use Core\Database;
use Models\Course;

$db = App::resolve(Database::class);

$courses = Course::get_courses($db);
view("course_list.view.php",[
    "courses" => $courses
]);