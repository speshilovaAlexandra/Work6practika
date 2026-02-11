<?
    session_start();
	include("../settings/connect_datebase.php");

    $IdUser = $_SESSION['user'];
    $Message = $_POST["Message"];
    $CSRF = $_POST["CSRF"];
    $IdPost = $_POST["IdPost"];

    if($CSRF != $_SESSION["CSRF"])
        exit;
    
    $mysqli->query("INSERT INTO `comments`(`IdUser`, `IdPost`, `Messages`) VALUES ({$IdUser}, {$IdPost}, '{$Message}');");
?>