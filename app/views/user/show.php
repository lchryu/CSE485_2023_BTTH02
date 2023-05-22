<!-- Display detailed information of a specific user -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>User Details</h1>
        <p><strong>ID:</strong> <?= $user['id']; ?></p>
        <p><strong>Name:</strong> <?= $user['name']; ?></p>
        <p><strong>Email:</strong> <?= $user['email']; ?></p>
        <p><strong>Contact:</strong> <?= $user['phone']; ?></p>
    </div>
</body>

</html>