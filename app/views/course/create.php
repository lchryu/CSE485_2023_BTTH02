<!DOCTYPE html>
<html>
<head>
    <title>Add New Course</title>
</head>
<body>
    <h1>Add New Course</h1>
    <form method="POST" action="/course/create">
        <label>Course Name:</label>
        <input type="text" name="course_name" required>
        <br>
        <label>Time Begin:</label>
        <input type="datetime-local" name="time_begin" required>
        <br>
        <label>Time End:</label>
        <input type="datetime-local" name="time_end" required>
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
