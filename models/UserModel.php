<?php
require_once('db.php');
class UserModel extends DBConnection
{
    public function __construct()
    {
        parent::connect();
    }
    public function checkEmail($email){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $this->conn->query($sql);
        return $result->fetchAll();
    }
    public function getUser($id){
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = $this->conn->query($sql);
        return $result->fetchAll();
    }
    public function listUser(){
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        return $result->fetchAll();
    }
    public function addUser($name, $email, $phone, $addr, $pass, $role){
        $sql = "INSERT INTO users (name, email, phone, address, password, role) values (?, ?, ?, ?, ?, ?)";
        $result = $this->conn->prepare($sql);
        $result->bindParam(1, $name);
        $result->bindParam(2, $email);
        $result->bindParam(3, $phone);
        $result->bindParam(4, $addr);
        $result->bindParam(5, $pass);
        $result->bindParam(6, $role);
        $result->execute();
        return $result;
    }
    public function editUser($id, $name, $email, $phone, $addr, $pass, $role){
        $sql = "UPDATE users SET name='$name', email='$email', 
        phone='$phone', address='$addr', password='$pass', role='$role' WHERE id='$id'";
        $result = $this->conn->query($sql);
        $result->execute();
        return $result;
    }
    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id= '$id'";
        $result = $this->conn->query($sql);
        $result->execute();
        return $result;
    }
    public function TKUser($keyword){
        $sql = "SELECT * FROM users WHERE name='$keyword' OR email='$keyword' 
        OR phone='$keyword' OR address='$keyword' OR role='$keyword'";
        $result = $this->conn->query($sql);
        return $result->fetchAll();
    }
    public function countUser(){
        $sql = "SELECT * FROM users";
        $result = $this->conn->prepare($sql);
        $result->execute();
        $row = $result->rowCount();
        return $row;
    }
}