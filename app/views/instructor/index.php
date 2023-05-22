<h1>List of Instructors</h1>

<a href="create.php">Create New Instructor</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($instructors as $instructor) : ?>
            <tr>
                <td><?= $instructor['instructor_id']; ?></td>
                <td><?= $instructor['name']; ?></td>
                <td><?= $instructor['phone']; ?></td>
                <td><?= $instructor['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $instructor['instructor_id']; ?>">Edit</a>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?= $instructor['instructor_id']; ?>">
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this instructor?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>