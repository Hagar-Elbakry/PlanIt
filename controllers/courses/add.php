<?php

use Core\App;
use Core\Database;
use Models\Course;
$db = App::resolve(Database::class);

Course::add_course($db,$courseName);
header('Location: ?action=list_courses');