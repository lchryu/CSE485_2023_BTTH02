<?php

require_once 'models/CourseModel.php';

class CourseController
{
    public function index()
    {
        // Hiển thị danh sách các khóa học
        $courseModel = new CourseModel();
        $courses = $courseModel->getAllCourses();

        // Gọi view để hiển thị danh sách khóa học
        include 'views/course/index.php';
    }

    public function create()
    {
        // Kiểm tra nếu có dữ liệu POST gửi lên
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $courseData = [
                'admin_id' => $_POST['admin_id'],
                'course_name' => $_POST['course_name'],
                'time_begin' => $_POST['time_begin'],
                'time_end' => $_POST['time_end']
            ];

            // Gọi phương thức tạo khóa học mới trong Model
            $courseModel = new CourseModel();
            $courseModel->createCourse($courseData);

            // Chuyển hướng về trang danh sách khóa học
            header('Location: index.php?action=index');
        } else {
            // Gọi view để hiển thị form tạo khóa học
            include 'views/course/create.php';
        }
    }

    public function edit($courseId)
    {
        // Kiểm tra nếu có dữ liệu POST gửi lên
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $courseData = [
                'admin_id' => $_POST['admin_id'],
                'course_name' => $_POST['course_name'],
                'time_begin' => $_POST['time_begin'],
                'time_end' => $_POST['time_end']
            ];

            // Gọi phương thức cập nhật thông tin khóa học trong Model
            $courseModel = new CourseModel();
            $courseModel->updateCourse($courseId, $courseData);

            // Chuyển hướng về trang danh sách khóa học
            header('Location: index.php?action=index');
        } else {
            // Lấy thông tin khóa học dựa trên ID từ Model
            $courseModel = new CourseModel();
            $course = $courseModel->getCourseById($courseId);

            // Kiểm tra nếu không tìm thấy khóa học, chuyển hướng về trang danh sách khóa học
            if (!$course) {
                header('Location: index.php?action=index');
            }

            // Gọi view để hiển thị form chỉnh sửa khóa học
            include 'views/course/edit.php';
        }
    }

    public function delete($courseId)
    {
        // Gọi phương thức xóa khóa học trong Model
        $courseModel = new CourseModel();
        $courseModel->deleteCourse($courseId);

        // Chuyển hướng về trang danh sách khóa học
        header('Location: index.php?action=index');
    }
}
