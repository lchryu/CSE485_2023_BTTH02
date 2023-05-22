<!DOCTYPE html>
<html>
<head>
    <title>Class List</title>
</head>
<body>
    <h1>Class List</h1>
    <a href="/class/create">Add New Class</a>
    <table>
        <tr>
            <th>Class ID</th>
            <th>Course Name</th>
            <th>Class Name</th>
            <th>Member</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($classes as $class): ?>
            <tr>
                <td><?= $class['class_id'] ?></td>
                <td><?= $class['course_name'] ?></td>
                <td><?= $class['class_name'] ?></td>
                <td><?= $class['member'] ?></td>
                <td>
                    <a href="/class/edit/<?= $class['class_id'] ?>">Edit</a>
                    <a href="/class/delete/<?= $class['class_id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
