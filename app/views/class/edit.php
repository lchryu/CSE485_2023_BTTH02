<!DOCTYPE html>
<html>
<head>
    <title>Edit Class</title>
</head>
<body>
    <h1>Edit Class</h1>
    <form method="POST" action="/class/edit/<?= $class['class_id'] ?>">
        <label>Course:</label>
        <select name="course_id" required>
            <?php foreach ($courses as $course): ?>
                <option value="<?= $course['course_id'] ?>" <?= $course['course_id'] == $class['course_id'] ? 'selected' : '' ?>>
                    <?= $course['course_name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label>Class Name:</label>
        <input type="text" name="class_name" value="<?= $class['class_name'] ?>" required>
        <br>
        <label>Member:</label>
        <input type="number" name="member" value="<?= $class['member'] ?>" required>
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
