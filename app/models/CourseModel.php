<?php

class CourseModel
{
    public function getAllCourses()
    {
        // Lấy danh sách tất cả các khóa học từ cơ sở dữ liệu
        $connection = new Connection();
        $pdo = $connection->connect();

        $query = "SELECT * FROM COURSE";
        $statement = $pdo->query($query);
        $courses = $statement->fetchAll();

        return $courses;
    }

    public function createCourse($courseData)
    {
        // Thêm một khóa học mới vào cơ sở dữ liệu
        $connection = new Connection();
        $pdo = $connection->connect();

        $query = "INSERT INTO COURSE (course_name, time_begin, time_end) VALUES (:course_name, :time_begin, :time_end)";
        $statement = $pdo->prepare($query);
        $statement->execute([
            'course_name' => $courseData['course_name'],
            'time_begin' => $courseData['time_begin'],
            'time_end' => $courseData['time_end']
        ]);
    }

    public function updateCourse($courseId, $courseData)
    {
        // Cập nhật thông tin của khóa học trong cơ sở dữ liệu
        $connection = new Connection();
        $pdo = $connection->connect();

        $query = "UPDATE COURSE SET course_name = :course_name, time_begin = :time_begin, time_end = :time_end WHERE course_id = :course_id";
        $statement = $pdo->prepare($query);
        $statement->execute([
            'course_name' => $courseData['course_name'],
            'time_begin' => $courseData['time_begin'],
            'time_end' => $courseData['time_end'],
            'course_id' => $courseId
        ]);
    }

    public function deleteCourse($courseId)
    {
        // Xóa khóa học khỏi cơ sở dữ liệu
        $connection = new Connection();
        $pdo = $connection->connect();

        $query = "DELETE FROM COURSE WHERE course_id = :course_id";
        $statement = $pdo->prepare($query);
        $statement->execute([
            'course_id' => $courseId
        ]);
    }

    public function getCourseById($courseId)
    {
        // Lấy thông tin khóa học dựa trên ID từ cơ sở dữ liệu
        $connection = new Connection();
        $pdo = $connection->connect();

        $query = "SELECT * FROM COURSE WHERE course_id = :course_id";
        $statement = $pdo->prepare($query);
        $statement->execute([
            'course_id' => $courseId
        ]);
        $course = $statement->fetch();

        return $course;
    }
}
