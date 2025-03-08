<?php
$servername = "localhost";
$username = "root"; // Cambia esto según tu configuración
$password_db = "admin"; // Cambia esto según tu configuración
$dbname = "ejemplo";

// Crear conexión
$conn = new mysqli($servername, $username, $password_db, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = htmlspecialchars($_POST["password"]);
    $nif = htmlspecialchars($_POST["nif"]);
    $rol = htmlspecialchars($_POST["rol"]);
    
    // Validación básica
    if (empty($password) || empty($nif) || empty($rol)) {
        echo "<p style='color: red; text-align: center;'>Todos los campos son obligatorios.</p>";
    } else {
        // Hash de la contraseña
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        
        // Preparar la consulta SQL
        $stmt = $conn->prepare("INSERT INTO usuarios (password, nif, rol) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $password_hashed, $nif, $rol);
        
        if ($stmt->execute()) {
            echo "<p style='color: green; text-align: center;'>Formulario enviado y datos guardados con éxito.</p>";
        } else {
            echo "<p style='color: red; text-align: center;'>Error: " . $stmt->error . "</p>";
        }
        
        $stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registro</h2>
        <form method="POST" action="">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>

            <label for="nif">NIF:</label>
            <input type="text" name="nif" required>

            <label for="rol">Rol:</label>
            <select name="rol" required>
                <option value="1">Admin</option>
                <option value="2">Usuario</option>
            </select>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
