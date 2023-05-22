<!-- UserModel.php -->
<?php
class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = (new Connection())->connect();
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM USER";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function createUser($username, $password, $role)
    {
        $query = "INSERT INTO USER (user_name, password, role) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$username, $password, $role]);
    }

    public function getUserById($userId)
    {
        $query = "SELECT * FROM USER WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$userId]);
        return $stmt->fetch();
    }

    public function updateUser($userId, $username, $password, $role)
    {
        $query = "UPDATE USER SET user_name = ?, password = ?, role = ? WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$username, $password, $role, $userId]);
    }

    public function deleteUser($userId)
    {
        $query = "DELETE FROM USER WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$userId]);
    }
}
