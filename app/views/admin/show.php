<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Admin Details</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <td><?= $admin['admin_id']; ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?= $admin['name']; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?= $admin['phone']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $admin['email']; ?></td>
            </tr>
        </table>
        <a href="/admin" class="btn btn-secondary">Back</a>
        <a href="/admin/edit/<?= $admin['admin_id']; ?>" class="btn btn-primary">Edit</a>
        <a href="/admin/delete/<?= $admin['admin_id']; ?>" class="btn btn-danger">Delete</a>
    </div>
</body>

</html>
