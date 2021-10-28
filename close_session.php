<?php
 session_start();
 unset($_SESSION);
 {
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
}
 session_destroy();
 header("Location: ./index.php?logout=true");

// "close_session.php": This is the last file which will be responsible for destroying the session and redirecting to the login page.