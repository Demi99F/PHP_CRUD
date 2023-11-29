<?php include 'connection.php'; ?>
<?php
session_start();
if (isset($_SESSION["username"])) {

    //delete
    if (isset($_GET["id"])) {
    $stmt = $conn->prepare("DELETE FROM tabel WHERE id = :id");
    $stmt -> bindParam(':id', $_GET["id"]);
    $stmt -> execute();
    }
    header ("Location: index.php");

}



?>