<h1>Create New Instructor</h1>

<form action="create.php" method="post">
    <label for="user_id">User ID:</label>
    <input type="text" name="user_id" required>

    <label for="class_id">Class ID:</label>
    <input type="text" name="class_id" required>

    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <button type="submit">Create</button>
</form>