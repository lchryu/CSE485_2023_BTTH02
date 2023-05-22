<!-- AttendanceModel.php -->
<?php
class AttendanceModel
{
    public static function getAllAttendances()
    {
        $query = "SELECT * FROM ATTENDANCE";

        // Thực hiện truy vấn để lấy danh sách attendance từ cơ sở dữ liệu
        // và trả về dưới dạng một mảng các attendance
        // Code thực hiện truy vấn và xử lý kết quả truy vấn ở đây
    }

    public static function getAttendanceById($attendanceId)
    {
        $query = "SELECT * FROM ATTENDANCE WHERE attendance_id = :attendanceId";

        // Thực hiện truy vấn để lấy thông tin attendance dựa trên attendanceId từ cơ sở dữ liệu
        // và trả về dưới dạng một mảng chứa thông tin attendance
        // Code thực hiện truy vấn và xử lý kết quả truy vấn ở đây
    }

    public static function createAttendance($studentId, $date, $time, $status, $classId)
    {
        $query = "INSERT INTO ATTENDANCE (student_id, date_attendance, time_attendance, status, class_id)
                  VALUES (:studentId, :date, :time, :status, :classId)";

        // Thực hiện truy vấn để tạo một bản ghi attendance mới trong cơ sở dữ liệu với các thông tin tương ứng
        // Code thực hiện truy vấn và xử lý kết quả truy vấn ở đây
    }

    public static function updateAttendance($attendanceId, $studentId, $date, $time, $status, $classId)
    {
        $query = "UPDATE ATTENDANCE
                  SET student_id = :studentId,
                      date_attendance = :date,
                      time_attendance = :time,
                      status = :status,
                      class_id = :classId
                  WHERE attendance_id = :attendanceId";

        // Thực hiện truy vấn để cập nhật thông tin của bản ghi attendance trong cơ sở dữ liệu với các thông tin tương ứng
        // Code thực hiện truy vấn và xử lý kết quả truy vấn ở đây
    }

    public static function deleteAttendance($attendanceId)
    {
        $query = "DELETE FROM ATTENDANCE WHERE attendance_id = :attendanceId";

        // Thực hiện truy vấn để xóa bản ghi attendance khỏi cơ sở dữ liệu dựa trên attendanceId
        // Code thực hiện truy vấn và xử lý kết quả truy vấn ở đây
    }
}
?>