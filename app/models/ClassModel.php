<?php

require_once 'config/Connection.php';

class ClassModel
{
    public function getAllClasses()
    {
        // Lấy tất cả các lớp từ cơ sở dữ liệu
        $connection = new Connection();
        $pdo = $connection->connect();

        $query = "SELECT * FROM CLASS";
        $statement = $pdo->query($query);
        $classes = $statement->fetchAll();

        return $classes;
    }

    public function createClass($classData)
    {
        // Thêm một lớp mới vào cơ sở dữ liệu
        $connection = new Connection();
        $pdo = $connection->connect();

        $query = "INSERT INTO CLASS (course_id, class_name, member) VALUES (:course_id, :class_name, :member)";
        $statement = $pdo->prepare($query);
        $statement->execute([
            'course_id' => $classData['course_id'],
            'class_name' => $classData['class_name'],
            'member' => $classData['member']
        ]);
    }

    public function updateClass($classId, $classData)
    {
        // Cập nhật thông tin của lớp trong cơ sở dữ liệu
        $connection = new Connection();
        $pdo = $connection->connect();

        $query = "UPDATE CLASS SET course_id = :course_id, class_name = :class_name, member = :member WHERE class_id = :class_id";
        $statement = $pdo->prepare($query);
        $statement->execute([
            'course_id' => $classData['course_id'],
            'class_name' => $classData['class_name'],
            'member' => $classData['member'],
            'class_id' => $classId
        ]);
    }

    public function deleteClass($classId)
    {
        // Xóa lớp khỏi cơ sở dữ liệu
        $connection = new Connection();
        $pdo = $connection->connect();

        $query = "DELETE FROM CLASS WHERE class_id = :class_id";
        $statement = $pdo->prepare($query);
        $statement->execute([
            'class_id' => $classId
        ]);
    }

    public function getClassById($classId)
    {
        // Lấy thông tin lớp dựa trên ID từ cơ sở dữ liệu
        $connection = new Connection();
        $pdo = $connection->connect();

        $query = "SELECT * FROM CLASS WHERE class_id = :class_id";
        $statement = $pdo->prepare($query);
        $statement->execute([
            'class_id' => $classId
        ]);
        $class = $statement->fetch();

        return $class;
    }
}
