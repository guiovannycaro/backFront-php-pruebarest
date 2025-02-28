<?php
class base_datos {
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "pruebatec";
    private $conn;

    function __construct() {
        $this->connect();
    }

    function connect() {
        $this->conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
/*
        if ($this->conn->connect_error) {
            die("<br>❌ Falló la conexión: " . $this->conn->connect_error);
        } else {
            echo "<br>✅ Conexión exitosa";
        }
*/
        // Configurar la codificación de caracteres a UTF-8
        $this->conn->set_charset("utf8");
    }

    function query($sql) {
        $result = $this->conn->query($sql);
        if (!$result) {
            die("<br>❌ Error en la consulta: " . $this->conn->error);
        }
        return $result;
    }

    function fetch_row($result) {
        return $result->fetch_assoc();
    }

    function numrows($result) {
        return $result->num_rows;
    }

    function close() {
        $this->conn->close();
    }

    function startTransaction() {
        $this->conn->begin_transaction();
    }

    function breakTransaction($msg = "") {
        $this->conn->rollback();
        die("<br>❌ Transacción abortada: $msg");
    }

    function commitTransaction() {
        $this->conn->commit();
    }
}
?>