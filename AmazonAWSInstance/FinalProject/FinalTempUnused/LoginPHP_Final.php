<?php
    // Ryan Christopher

    // HTTPS redirect
    if ($_SERVER['HTTPS'] !== 'on') {
        $redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header("Location: $redirectURL");
        exit;
    }

    if(!session_start()) {
        header("Location: errorPage_Final.php");
        exit;
    }

    $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];

    if ($loggedIn) {
        header("Location: infoPage_Final.php");
        exit;
    }

    $action = empty($_POST['action']) ? '' : $_POST['action'];

    if ($action == 'do_login') {
        handle_login();
    }
    else {
        login_form();
    }

    function handle_login() {
        $username = empty($_POST['username']) ? '' : $_POST['username'];
        $password = empty($_POST['password']) ? '' : $_POST['password'];

        if ($username == "test" && $password == "pass") {
            $_SESSION['loggedin'] = $username;
            header("Location: infoPage_Final.php");
            exit;
        }
        else {
            login_form();
        }
    }

    function login_form() {
        $username = "";
        $error = "";
        require "Login_Final.php";
        exit;
    }

?>