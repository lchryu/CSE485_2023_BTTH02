<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>
    <form method="POST" action="/course/edit/<?= $course['course_id'] ?>">
        <label>Course Name:</label>
        <input type="text" name="course_name" value="<?= $course['course_name'] ?>" required>
        <br>
        <label>Time Begin:</label>
        <input type="datetime-local" name="time_begin" value="<?= $course['time_begin'] ?>" required>
        <br>
        <label>Time End:</label>
        <input type="datetime-local" name="time_end" value="<?= $course['time_end'] ?>" required>
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
