<!-- InstructorModel.php -->
<?php
class InstructorModel
{
    public static function getAllInstructors()
    {
        $query = "SELECT * FROM INSTRUCTOR";

        // Thực hiện truy vấn để lấy danh sách instructors từ cơ sở dữ liệu
        // và trả về dưới dạng một mảng các instructors
        // Code thực hiện truy vấn và xử lý kết quả truy vấn ở đây
    }

    public static function getInstructorById($instructorId)
    {
        $query = "SELECT * FROM INSTRUCTOR WHERE instructor_id = :instructorId";

        // Thực hiện truy vấn để lấy thông tin instructor dựa trên instructorId từ cơ sở dữ liệu
        // và trả về dưới dạng một mảng chứa thông tin instructor
        // Code thực hiện truy vấn và xử lý kết quả truy vấn ở đây
    }

    public static function createInstructor($userId, $classId, $name, $phone, $email)
    {
        $query = "INSERT INTO INSTRUCTOR (user_id, class_id, name, phone, email)
                  VALUES (:userId, :classId, :name, :phone, :email)";

        // Thực hiện truy vấn để tạo một bản ghi instructor mới trong cơ sở dữ liệu với các thông tin tương ứng
        // Code thực hiện truy vấn và xử lý kết quả truy vấn ở đây
    }

    public static function updateInstructor($instructorId, $userId, $classId, $name, $phone, $email)
    {
        $query = "UPDATE INSTRUCTOR
                  SET user_id = :userId,
                      class_id = :classId,
                      name = :name,
                      phone = :phone,
                      email = :email
                  WHERE instructor_id = :instructorId";

        // Thực hiện truy vấn để cập nhật thông tin của bản ghi instructor trong cơ sở dữ liệu với các thông tin tương ứng
        // Code thực hiện truy vấn và xử lý kết quả truy vấn ở đây
    }

    public static function deleteInstructor($instructorId)
    {
        $query = "DELETE FROM INSTRUCTOR WHERE instructor_id = :instructorId";

        // Thực hiện truy vấn để xóa bản ghi instructor khỏi cơ sở dữ liệu dựa trên instructorId
        // Code thực hiện truy vấn và xử lý kết quả truy vấn ở đây
    }
}
?>