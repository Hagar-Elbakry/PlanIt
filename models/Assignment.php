<?php

namespace Models;

class Assignment {
    public static function get_assignments_by_course($db, $courseID) {
        if($courseID) {
            $query = "SELECT A.id, A.description, C.name FROM assignments A LEFT JOIN courses C ON A.courseID = C.id
                  WHERE courseID = :courseId ORDER BY A.id";
            $assignments = $db->query($query, [':courseId' => $courseID])->fetchAll();
        } else {
            $query = "SELECT A.id, A.description, C.name FROM assignments A LEFT JOIN courses C ON A.courseID = C.id ORDER BY C.id";
            $assignments = $db->query($query)->fetchAll();
        }

        return $assignments;
    }

  public static function add_assignment($db, $description, $courseID) {
        $query = "INSERT INTO assignments (description, courseID) VALUES (:description, :courseId)";
        $db->query($query, [':description' => $description, ':courseId' => $courseID]);
    }

    public static function delete_assignment($db, $assignmentId) {
        $query = "DELETE FROM assignments WHERE id = :assignmentId";
        $db->query($query, [':assignmentId' => $assignmentId]);
    }
}


