<?php

class AdminController
{
    private $adminModel;

    public function __construct(AdminModel $adminModel)
    {
        $this->adminModel = $adminModel;
    }

    public function index()
    {
        // Get all admins from the model
        $admins = $this->adminModel->getAllAdmins();

        // Render the view with admin data
        include '../views/admin/index.php';
    }

    public function create()
    {
        // Handle form submission for creating an admin
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve admin data from the form
            $userId = $_POST['user_id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            // Create a new admin using the model
            $this->adminModel->createAdmin($userId, $name, $phone, $email);

            // Redirect to the admin list page
            header('Location: /admin');
            exit();
        }

        // Render the create admin form
        include '../views/admin/create.php';
    }

    public function edit($adminId)
    {
        // Handle form submission for updating an admin
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve updated admin data from the form
            $userId = $_POST['user_id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            // Update the admin using the model
            $this->adminModel->updateAdmin($adminId, $userId, $name, $phone, $email);

            // Redirect to the admin list page
            header('Location: /admin');
            exit();
        }

        // Get the admin details from the model
        $admin = $this->adminModel->getAdminById($adminId);

        // Render the edit admin form with admin data
        include '../views/admin/edit.php';
    }

    public function show($adminId)
    {
        // Get the admin details from the model
        $admin = $this->adminModel->getAdminById($adminId);

        // Render the admin details view
        include '../views/admin/show.php';
    }

    public function delete($adminId)
    {
        // Delete the admin using the model
        $this->adminModel->deleteAdmin($adminId);

        // Redirect to the admin list page
        header('Location: /admin');
        exit();
    }
}
