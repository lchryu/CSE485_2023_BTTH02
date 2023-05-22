<!-- StudentController.php -->
<?php
include_once '../config/Connection.php';
include_once '../Controllers/classController.php';
class StudentController
{
    public function getAll()
    {
        $pdo = new  Connection();
        $conn = $pdo->connect();
        $sql = "SELECT * FROM student";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function createStudent($data)
    {
        $pdo = new  Connection();
        $conn = $pdo->connect();
        $sql = "INSERT INTO students ('user_id', 'class_id', 'name', 'phone', 'email') VALUES ('?,?,?,?,?')";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$data['user_id'], $data['class_id'], $data['name'], $data['phone'], $data['email']]);
    }

    public function updateStudent($id)
    {

    }

    public function deleteStudent($id)
    {

    }

    public function getStudent($id)
    {
        $pdo = new  Connection();
        $conn = $pdo->connect();
        $sql = "SELECT * FROM student WHERE id=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$id]);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getStudentIdbyIdUser($id)
    {
        $pdo = new  Connection();
        $conn = $pdo->connect();
        $sql = "SELECT id FROM student WHERE user_id=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$id]);
        $data=$stmt->fetch(PDO::FETCH_ASSOC); // Sử dụng fetch() thay vì fetchAll()
        return $data['id']; // Trả về giá trị id
    }


    public function getName($id)
    {
        $pdo = new  Connection();
        $conn = $pdo->connect();
        $sql = "SELECT name FROM student WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function isStudentInClass($class_id, $user_id)
    {
        $studentId = $this->getStudentIdbyIdUser($user_id);
        $classController = new ClassController();
        $classesStudent = $classController->getClassesByStudentId($studentId);
        foreach ($classesStudent as $class) {
            if ($class['id'] == $class_id) {
                return true;
            }
        }
        return false;

    }
}

?>