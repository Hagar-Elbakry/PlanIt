<?php

use Core\App;
use Core\Database;
use Models\Course;
$db = App::resolve(Database::class);

if($courseId) {
    Course::delete_course($db,$courseId);
    header('Location: ?action=list_courses');
}