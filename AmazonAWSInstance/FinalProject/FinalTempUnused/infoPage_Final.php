<?php
    // Ryan Christopher

    if ($_SERVER['HTTPS'] !== 'on') {
        $redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header("Location: $redirectURL");
        exit;
    }

    if (!session_start()) {
        header("Location: errorPage_Final.php");
        exit;
    }

    $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
    
    if (!$loggedIn) {
        header("Location: Login_Final.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Info Page</title>
    <link href="CSS_Final.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Info</h1>
</body>
</html>