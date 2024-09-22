<?php
class Usuario {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM usuario");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function create($nombre, $apellido, $email, $contraseña, $tipo) {
        $stmt = $this->pdo->prepare("INSERT INTO usuario (nombre, apellido, email, contraseña, tipo) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$nombre, $apellido, $email, password_hash($contraseña, PASSWORD_DEFAULT), $tipo]);
    }
    
    public function update($id, $nombre, $apellido, $email, $tipo) {
        $stmt = $this->pdo->prepare("UPDATE usuario SET nombre = ?, apellido = ?, email = ?, tipo = ? WHERE id = ?");
        return $stmt->execute([$nombre, $apellido, $email, $tipo, $id]);
    }
    
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM usuario WHERE id = ?");
        return $stmt->execute([$id]);
    }
}