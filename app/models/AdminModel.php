<?php

class AdminModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllAdmins()
    {
        $sql = "SELECT * FROM ADMIN";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAdminById($adminId)
    {
        $sql = "SELECT * FROM ADMIN WHERE admin_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$adminId]);
        return $stmt->fetch();
    }

    public function createAdmin($userId, $name, $phone, $email)
    {
        $sql = "INSERT INTO ADMIN (user_id, name, phone, email) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$userId, $name, $phone, $email]);
    }

    public function updateAdmin($adminId, $userId, $name, $phone, $email)
    {
        $sql = "UPDATE ADMIN SET user_id = ?, name = ?, phone = ?, email = ? WHERE admin_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$userId, $name, $phone, $email, $adminId]);
    }

    public function deleteAdmin($adminId)
    {
        $sql = "DELETE FROM ADMIN WHERE admin_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$adminId]);
    }
}
