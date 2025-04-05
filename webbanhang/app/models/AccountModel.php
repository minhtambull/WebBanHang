<?php
class AccountModel
{
    private $conn;
    private $table_name = "user";  // Đảm bảo tên bảng đúng

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAccountByUsername($username)
    {
        $query = "SELECT * FROM user WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    function save($username, $name, $password)
    {
        $query = "INSERT INTO " . $this->table_name . "(username, password) VALUES (:username, :password)";
        $stmt = $this->conn->prepare($query);

        // Làm sạch dữ liệu
        $name = htmlspecialchars(strip_tags($name));
        $username = htmlspecialchars(strip_tags($username));

        // Gán dữ liệu vào câu lệnh
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        // Thực thi câu lệnh
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
