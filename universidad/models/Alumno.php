<?php
class Alumno {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function getAll() {
        $stmt = $this->pdo->query("SELECT a.*, u.nombre, u.apellido FROM alumno a JOIN usuario u ON a.id = u.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT a.*, u.nombre, u.apellido FROM alumno a JOIN usuario u ON a.id = u.id WHERE a.id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function create($userId) {
        $stmt = $this->pdo->prepare("INSERT INTO alumno (id) VALUES (?)");
        return $stmt->execute([$userId]);
    }
    
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM alumno WHERE id = ?");
        return $stmt->execute([$id]);
    }
    
    public function getCarreras($alumnoId) {
        $stmt = $this->pdo->prepare("SELECT c.* FROM carrera c JOIN alumno_carrera ac ON c.id = ac.id_carrera WHERE ac.id_alumno = ?");
        $stmt->execute([$alumnoId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function asignarCarrera($alumnoId, $carreraId) {
        $stmt = $this->pdo->prepare("INSERT INTO alumno_carrera (id_alumno, id_carrera) VALUES (?, ?)");
        return $stmt->execute([$alumnoId, $carreraId]);
    }
    
    public function removerCarrera($alumnoId, $carreraId) {
        $stmt = $this->pdo->prepare("DELETE FROM alumno_carrera WHERE id_alumno = ? AND id_carrera = ?");
        return $stmt->execute([$alumnoId, $carreraId]);
    }
}