<?php
require_once 'models/Usuario.php';

class UsuarioController {
    private $usuarioModel;
    
    public function __construct($pdo) {
        $this->usuarioModel = new Usuario($pdo);
    }
    
    public function index() {
        $usuarios = $this->usuarioModel->getAll();
        include 'views/usuario/list.php';
    }
    
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];
            $tipo = $_POST['tipo'];
            
            if ($this->usuarioModel->create($nombre, $apellido, $email, $contraseña, $tipo)) {
                header('Location: index.php?controller=usuario&action=index');
                exit;
            }
        }
        include 'views/usuario/create.php';
    }
    
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $tipo = $_POST['tipo'];
            
            if ($this->usuarioModel->update($id, $nombre, $apellido, $email, $tipo)) {
                header('Location: index.php?controller=usuario&action=index');
                exit;
            }
        }
        $usuario = $this->usuarioModel->getById($id);
        include 'views/usuario/edit.php';
    }
    
    public function delete($id) {
        if ($this->usuarioModel->delete($id)) {
            header('Location: index.php?controller=usuario&action=index');
            exit;
        }
    }
}