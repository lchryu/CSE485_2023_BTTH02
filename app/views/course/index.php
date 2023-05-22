<!DOCTYPE html>
<html>
<head>
    <title>Course List</title>
</head>
<body>
    <h1>Course List</h1>
    <a href="/course/create">Add New Course</a>
    <table>
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Time Begin</th>
            <th>Time End</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($courses as $course): ?>
            <tr>
                <td><?= $course['course_id'] ?></td>
                <td><?= $course['course_name'] ?></td>
                <td><?= $course['time_begin'] ?></td>
                <td><?= $course['time_end'] ?></td>
                <td>
                    <a href="/course/edit/<?= $course['course_id'] ?>">Edit</a>
                    <a href="/course/delete/<?= $course['course_id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
