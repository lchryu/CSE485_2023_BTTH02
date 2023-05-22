<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Admin List</h1>
        <a href="/admin/create" class="btn btn-primary">Create Admin</a>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($admins as $admin) : ?>
                <tr>
                    <td><?= $admin['admin_id']; ?></td>
                    <td><?= $admin['name']; ?></td>
                    <td><?= $admin['phone']; ?></td>
                    <td><?= $admin['email']; ?></td>
                    <td>
                        <a href="/admin/show/<?= $admin['admin_id']; ?>" class="btn btn-info">View</a>
                        <a href="/admin/edit/<?= $admin['admin_id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="/admin/delete/<?= $admin['admin_id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>
