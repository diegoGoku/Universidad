<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Usuario</title>
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
    margin: 0 0 0 380px;
    flex-direction: column;
    min-height: 100vh;
  }

  h1 {
    color: #333;
    margin-bottom: 20px;
  }

  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;

    max-width: 800px;

  }

  label {
    font-size: 14px;
    color: #333;
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
  }

  input[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }

  a {
    color: #007bff;
    text-decoration: none;
    margin-top: 10px;
    display: inline-block;
  }

  a:hover {
    color: #0056b3;
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
      <li><a href="index.php?controller=usuario&action=index">
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
    <h1>Crear Usuario</h1>
    <form action="index.php?controller=usuario&action=create" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="contraseña">Contraseña:</label>
      <input type="password" id="contraseña" name="contraseña" required>

      <label for="tipo">Tipo:</label>
      <select id="tipo" name="tipo">
        <option value="alumno">Alumno</option>
        <option value="profesor">Profesor</option>
        <option value="administrador">Administrador</option>
      </select>

      <input type="submit" value="Crear Usuario">
    </form>
    <a href="index.php?controller=usuario&action=index">Volver a la lista</a>
  </div>
</body>

</html>