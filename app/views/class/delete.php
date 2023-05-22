<!DOCTYPE html>
<html>
<head>
    <title>Delete Class</title>
</head>
<body>
    <h1>Delete Class</h1>
    <p>Are you sure you want to delete this class?</p>
    <p>Class ID: <?= $class['class_id'] ?></p>
    <p>Course: <?= $class['course_name'] ?></p>
    <p>Class Name: <?= $class['class_name'] ?></p>
    <p>Member: <?= $class['member'] ?></p>
    <form method="POST" action="/class/delete/<?= $class['class_id'] ?>">
        <input type="submit" value="Delete">
    </form>
</body>
</html>
