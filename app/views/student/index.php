<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>
    <form action="/student/store" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="class_id">Class:</label>
        <select name="class_id" required>
            <?php foreach ($classes as $class): ?>
                <option value="<?php echo $class['class_id']; ?>"><?php echo $class['class_name']; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" value="Create">
    </form>
</body>
</html>