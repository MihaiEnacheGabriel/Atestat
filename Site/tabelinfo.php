<?php
session_start();
$flotari = $_POST['flotari'];
$genoflexiuni = $_POST['genoflexiuni'];
$abdomene = $_POST['abdomene'];
$km = $_POST['km'];
$nume = $_SESSION['username'];
$conn = new mysqli('localhost', 'root', '', 'atestat');
if($conn->connect_error)
{
    die('Connection Failed: '.$conn->connect_error);
}
else
{   
    $query = mysqli_query($conn, "select * from users where username = '$nume'");
            $sql = "update users set flotari = ?, genoflexiuni = ?, abdomene = ?, km = ? where username='$nume'";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iiii", $flotari, $genoflexiuni, $abdomene, $km);
            $stmt->execute();
}
echo ("<script LANGUAGE='JavaScript'>

        window.location.href='Tabel.php';
        </script>");
       /* echo ("<script LANGUAGE='JavaScript'>
        window.alert('Mesaj trimis cu succes!');
        window.location.href='Relatii_Clienti.php';
        </script>");*/
?>
