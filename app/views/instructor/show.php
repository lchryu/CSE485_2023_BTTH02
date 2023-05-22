<h1>Delete Instructor</h1>

<p>Are you sure you want to delete the instructor: <?= $instructor['name']; ?>?</p>

<form action="delete.php" method="post">
    <input type="hidden" name="id" value="<?= $instructor['instructor_id']; ?>">
    <button type="submit"