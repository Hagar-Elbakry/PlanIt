<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

function get_assignments_by_course($db, $courseID) {
    if($courseID) {
        $query = "SELECT A.id, A.descreption, C.name FROM assignments A LEFT JOIN courses C ON A.courseID = C.id
                  WHERE courseID = :courseId ORDER BY A.id";
        $assignments = $db->query($query, [':courseId' => $courseID])->fetchAll();
    } else {
        $query = "SELECT A.id, A.descreption, C.name FROM assignments A LEFT JOIN courses C ON A.courseID = C.id ORDER BY C.id";
        $assignments = $db->query($query)->fetchAll();
    }

    return $assignments;
}

function add_assignment($db, $descreption, $courseID) {
    $query = "INSERT INTO assignments (descreption, couresID) VALUES (:descreption, :couresId)";
    $db->query($query, [':descreption' => $descreption, ':couresId' => $courseID]);
}

function delete_assignment($db, $assignmentId) {
    $query = "DELETE FROM assignments WHERE id = :assignmentId";
    $db->query($query, [':assignmentId' => $assignmentId]);
}

