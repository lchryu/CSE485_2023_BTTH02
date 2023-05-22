<!DOCTYPE html>
<html>
<head>
    <title>Delete Course</title>
</head>
<body>
    <h1>Delete Course</h1>
    <p>Are you sure you want to delete this course?</p>
    <p>Course ID: <?= $course['course_id'] ?></p>
    <p>Course Name: <?= $course['course_name'] ?></p>
    <p>Time Begin: <?= $course['time_begin'] ?></p>
    <p>Time End: <?= $course['time_end'] ?></p>
    <form method="POST" action="/course/delete/<?= $course['course_id'] ?>">
        <input type="submit" value="Delete">
    </form>
</body>
</html>
