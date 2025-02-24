<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    require_once realpath(__DIR__ . '/../config/database.php');

    class UserModel {
        public static function getUserByEmail($email) {
            $conn = Database::Connect();
            if ($conn === null) {
                die("Error de conexión a la base de datos.");
            }

            // $stmt = $conn->prepare("SELECT id_empleado AS id, pass, tipo_empleado AS tipo FROM empleado WHERE correo = ?");
            //                 //    UNION 
            //                 //    SELECT id_miembro AS id, pass, 'miembro' AS tipo FROM miembro WHERE correo = ?");
            $stmt = $conn->prepare("SELECT id_empleado AS id, pass, tipo_empleado AS tipo FROM empleado WHERE correo = ?");
            // $stmt->execute(['email' => $email, 'password' => $password]);
            $stmt->execute([$email]);
            return $stmt->fetch();
        }
    }