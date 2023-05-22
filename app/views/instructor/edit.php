<h1>Edit Instructor</h1>

<form action="edit.php?id=<?= $instructor['instructor_id']; ?>" method="post">
    <label for="user_id">User ID:</label>
    <input type="text" name="user_id" value="<?= $instructor['user_id']; ?>" required>

    <label for="class_id">Class ID:</label>
    <input type="text" name="class_id" value="<?= $instructor['class_id']; ?>" required>

    <label for="name">Name:</label>
    <input type="text" name="name" value="<?= $instructor['name']; ?>" required>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="<?= $instructor['phone']; ?>" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= $instructor['email']; ?>" required>

    <button type="submit">Update</button>
</form>