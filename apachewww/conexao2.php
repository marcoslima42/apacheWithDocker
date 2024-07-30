<?php
class Conexion {
    public static function conectarBD() {
        $host = "postgres";
        $dbname = "eu";
        $user = "postgres";
        $password = "eu";

        try {
            $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão bem-sucedida!";
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    }
}
?>
