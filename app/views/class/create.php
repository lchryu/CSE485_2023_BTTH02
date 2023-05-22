<!DOCTYPE html>
<html>
<head>
    <title>Add New Class</title>
</head>
<body>
    <h1>Add New Class</h1>
    <form method="POST" action="/class/create">
        <label>Course:</label>
        <select name="course_id" required>
            <?php foreach ($courses as $course): ?>
                <option value="<?= $course['course_id'] ?>"><?= $course['course_name'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label>Class Name:</label>
        <input type="text" name="class_name" required>
        <br>
        <label>Member:</label>
        <input type="number" name="member" required>
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
