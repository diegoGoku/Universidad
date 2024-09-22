<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Usuarios</title>
  <link rel="stylesheet" href="sidebar.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 100vh;
  }

  .content-new-user {

    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    text-decoration: none;

  }

  ;

  h1 {
    color: #333;
  }

  a {
    color: #fffff;
    background-color: #007bff;
    padding: 8px 15px;
    background-color: #f1f5f9;
    border-radius: 5px;

    display: inline-block;
  }

  a:hover {
    background-color: #0056b3;
  }

  table {
    width: 100%;
    max-width: 900px;
    border-collapse: collapse;
    background-color: #fff;
    margin-top: 45px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
  }

  th,
  td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #007bff;
    color: white;
    text-transform: uppercase;
    font-size: 14px;
  }

  tr:hover {
    background-color: #f1f1f1;
  }

  td {
    font-size: 14px;
  }

  td a {
    color: #007bff;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 3px;
    transition: background-color 0.3s ease;
  }

  td a:hover {
    background-color: #f0f0f5;
    color: #0056b3;
  }

  td a:nth-child(2) {
    color: #dc3545;
  }

  td a:nth-child(2):hover {
    background-color: #f8d7da;
  }
  </style>
</head>

<body>
  <div class="sidebar">
    <h2>Menú</h2>
    <ul>
      <li><a href="#">
          <ion-icon name="home-outline"></ion-icon> Inicio
        </a></li>
      <li><a href="/index.php?controller=usuario">
          <ion-icon name="people-outline"></ion-icon> Usuarios
        </a></li>
      <li><a href="#">
          <ion-icon name="school-outline"></ion-icon> Alumnos
        </a></li>
      <li><a href="#">
          <ion-icon name="person-outline"></ion-icon> Profesores
        </a></li>
      <li><a href="#">
          <ion-icon name="business-outline"></ion-icon> Aulas
        </a></li>
      <li><a href="#">
          <ion-icon name="calendar-outline"></ion-icon> Gestionar Horarios
        </a></li>
      <li><a href="#">
          <ion-icon name="library-outline"></ion-icon> Facultades
        </a></li>
      <li><a href="#">
          <ion-icon name="calendar-outline"></ion-icon> Gestionar Horarios
        </a></li>
      <li><a href="#">
          <ion-icon name="ribbon-outline"></ion-icon> Calificaciones
        </a></li>
    </ul>

  </div>
  <div class='content'>
    <h1>Lista de Usuarios</h1>
    <a class='content-new-user' href="index.php?controller=usuario&action=create">Crear nuevo usuario</a>
    <table>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Tipo</th>
        <th>Acciones</th>
      </tr>
      <?php foreach ($usuarios as $usuario): ?>
      <tr>
        <td><?php echo $usuario['id']; ?></td>
        <td><?php echo $usuario['nombre']; ?></td>
        <td><?php echo $usuario['apellido']; ?></td>
        <td><?php echo $usuario['email']; ?></td>
        <td><?php echo $usuario['tipo']; ?></td>
        <td>
          <a href="index.php?controller=usuario&action=edit&id=<?php echo $usuario['id']; ?>">Editar</a>
          <a href="index.php?controller=usuario&action=delete&id=<?php echo $usuario['id']; ?>"
            onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?')">Eliminar</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>