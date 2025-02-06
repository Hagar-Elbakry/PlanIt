<?php

namespace Models;

class Course {
    public static function get_courses($db) {
        $query = "SELECT * FROM courses ORDER BY id";
        return $db->query($query)->fetchAll();
    }

   public static function get_course_name($db, $courseID) {

        if(!$courseID) {
            return "All courses";
        }

        $query = "SELECT name FROM courses WHERE id = :courseID";
        return $db->query($query, [':courseID' => $courseID])->fetch();
    }

    public static function delete_course($db, $courseID) {
        $query = "DELETE FROM courses WHERE id = :courseID";
        $db->query($query,[':courseID'=> $courseID]);
    }

    public static function add_course($db, $courseName) {
        $query = "INSERT INTO courses (name) VALUES (:courseName)";
        $db->query($query, [':courseName' => $courseName]);
    }
}

