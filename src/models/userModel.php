<?php
    require_once './../config/database.php';

    class UserModel {
        public static function getUserByEmail($email) {
            $conn = Database::Connect();
            $stmt = $conn->prepare("SELECT id_empleado AS id, pass, 'empleado' AS tipo FROM empleado WHERE correo = ?");
                            //    UNION 
                            //    SELECT id_miembro AS id, pass, 'miembro' AS tipo FROM miembro WHERE correo = ?");
            // $stmt->execute(['email' => $email, 'password' => $password]);
            $stmt->execute([$email]);
            return $stmt->fetch();
        }
    }