<?php
$host = 'localhost'; // O la IP del servidor de BD
$dbname = 'pruebatec';
$username = 'root'; // Cambia si tienes otro usuario
$password = ''; // Deja vacío si estás en XAMPP o WAMP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conexión exitosa a la BD";
} catch (PDOException $e) {
    die("❌ Error en la conexión: " . $e->getMessage());
}
?>