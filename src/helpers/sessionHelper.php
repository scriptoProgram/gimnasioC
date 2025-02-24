<?php
    class SessionHelper {
        public static  function startSession ($id, $type, $token) {
            session_start();
            $_SESSION['us_id'] = $id;
            $_SESSION['us_type'] = $type;
            $_SESSION['us_token'] = $token;

            setcookie("us_id", $id, time() + 3600, "/", "", true, true);
            setcookie("us_type", $type, time() + 3600, "/", "", true, true);
            setcookie("us_token", $token, time() + 3600, "/", "", true, true);
        }

        public static function isAuthenticated() {
            return isset($_SESSION['us_id']) && isset($_SESSION['us_type']);
        }

        public static function destroySession() {
            session_start();
            session_unset();
            session_destroy();
            setcookie("us_id", "", time() - 3600, "/");
            setcookie("us_type", "", time() - 3600, "/");
            setcookie("us_token", "", time() - 3600, "/");
        }
    }