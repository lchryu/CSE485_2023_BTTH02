<!-- InstructorController.php -->
<?php
class InstructorController
{
    public function index()
    {
        // Lấy danh sách instructors từ InstructorModel
        $instructors = InstructorModel::getAllInstructors();

        // Render view index.php và truyền danh sách instructors vào view
        // Code render view ở đây
    }

    public function create()
    {
        // Xử lý khi người dùng gửi form tạo instructor
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy thông tin từ form
            $userId = $_POST['user_id'];
            $classId = $_POST['class_id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            // Gọi phương thức createInstructor của InstructorModel để tạo instructor mới
            InstructorModel::createInstructor($userId, $classId, $name, $phone, $email);

            // Chuyển hướng về trang danh sách instructors
            header('Location: index.php');
            exit();
        }

        // Render view create.php
        // Code render view ở đây
    }

    public function edit($instructorId)
    {
        // Xử lý khi người dùng gửi form chỉnh sửa instructor
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy thông tin từ form
            $userId = $_POST['user_id'];
            $classId = $_POST['class_id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            // Gọi phương thức updateInstructor của InstructorModel để cập nhật thông tin instructor
            InstructorModel::updateInstructor($instructorId, $userId, $classId, $name, $phone, $email);

            // Chuyển hướng về trang danh sách instructors
            header('Location: index.php');
            exit();
        }

        // Lấy thông tin instructor từ InstructorModel dựa trên instructorId
        $instructor = InstructorModel::getInstructorById($instructorId);

        // Render view edit.php và truyền thông tin instructor vào view
        // Code render view ở đây
    }

    public function delete($instructorId)
    {
        // Xử lý khi người dùng xác nhận xóa instructor
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Gọi phương thức deleteInstructor của InstructorModel để xóa instructor
            InstructorModel::deleteInstructor($instructorId);

            // Chuyển hướng về trang danh sách instructors
            header('Location: index.php');
            exit();
        }

        // Lấy thông tin instructor từ InstructorModel dựa trên instructorId
        $instructor = InstructorModel::getInstructorById($instructorId);

        // Render view delete.php và truyền thông tin instructor vào view
        // Code render view ở đây
    }
}
?>