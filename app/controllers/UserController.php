<!-- UserController.php -->
<?php

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // Get all users from the model
        $users = $this->userModel->getAllUsers();

        // Render the view with user data
        // include 'views/user/index.php';
        include '../views/user/index.php';
    }

    public function create()
    {
        // Handle form submission for creating a user
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve user data from the form
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            // Create a new user using the model
            $this->userModel->createUser($username, $password, $role);

            // Redirect to the user list page
            header('Location: /user');
            exit();
        }

        // Render the create user form
        include '../views/user/create.php';
    }

    public function edit($userId)
    {
        // Handle form submission for updating a user
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve updated user data from the form
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            // Update the user using the model
            $this->userModel->updateUser($userId, $username, $password, $role);

            // Redirect to the user list page
            header('Location: /user');
            exit();
        }

        // Get the user details from the model
        $user = $this->userModel->getUserById($userId);

        // Render the edit user form with user data
        include '../views/user/edit.php';
    }

    public function show($userId)
    {
        // Get the user details from the model
        $user = $this->userModel->getUserById($userId);

        // Render the user details view
        include '../views/user/show.php';
    }
}
