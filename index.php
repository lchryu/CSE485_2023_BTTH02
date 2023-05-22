<!-- test Connection với db-->
<?php
require_once('./config/Connection.php');

// create a new Connection object
$conn = new Connection();

try {
    // connect to the database
    $pdo = $conn->connect();
    
    // prepare and execute a query
    $stmt = $pdo->query('SELECT * FROM user');
    
    // fetch all the results
    $users = $stmt->fetchAll();
    
    // print out the results
    foreach ($users as $user) {
        echo $user['user_name'] . '<br>';
    }
    
    echo "Connected successfully!";
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}