<?php

require_once 'models/ClassModel.php';

class ClassController
{
    public function index()
    {
        // Hiển thị danh sách các lớp học
        $classModel = new ClassModel();
        $classes = $classModel->getAllClasses();

        // Gọi view để hiển thị danh sách lớp học
        include 'views/class/index.php';
    }

    public function create()
    {
        // Kiểm tra nếu có dữ liệu POST gửi lên
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $classData = [
                'course_id' => $_POST['course_id'],
                'class_name' => $_POST['class_name'],
                'member' => $_POST['member']
            ];

            // Gọi phương thức tạo lớp học mới trong Model
            $classModel = new ClassModel();
            $classModel->createClass($classData);

            // Chuyển hướng về trang danh sách lớp học
            header('Location: index.php?action=index');
        } else {
            // Gọi view để hiển thị form tạo lớp học
            include 'views/class/create.php';
        }
    }

    public function edit($classId)
    {
        // Kiểm tra nếu có dữ liệu POST gửi lên
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $classData = [
                'course_id' => $_POST['course_id'],
                'class_name' => $_POST['class_name'],
                'member' => $_POST['member']
            ];

            // Gọi phương thức cập nhật thông tin lớp học trong Model
            $classModel = new ClassModel();
            $classModel->updateClass($classId, $classData);

            // Chuyển hướng về trang danh sách lớp học
            header('Location: index.php?action=index');
        } else {
            // Lấy thông tin lớp học dựa trên ID từ Model
            $classModel = new ClassModel();
            $class = $classModel->getClassById($classId);

            // Kiểm tra nếu không tìm thấy lớp học, chuyển hướng về trang danh sách lớp học
            if (!$class) {
                header('Location: index.php?action=index');
            }

            // Gọi view để hiển thị form chỉnh sửa lớp học
            include 'views/class/edit.php';
        }
    }

    public function delete($classId)
    {
        // Gọi phương thức xóa lớp học trong Model
        $classModel = new ClassModel();
        $classModel->deleteClass($classId);

        // Chuyển hướng về trang danh sách lớp học
        header('Location: index.php?action=index');
    }
}
