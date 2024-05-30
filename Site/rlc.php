<?php
function alert($message)
{
echo "<script>alert('$message');</script>";
}
$nume = $_POST['nume'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$subiect = $_POST['subiect'];
$mesaj = $_POST['mesaj'];

$conn = new mysqli('localhost', 'root', '', 'atestat');
if($conn->connect_error)
{
    die('Connection Failed: '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into rlc(nume, email, tel, subiect, mesaj) values (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nume, $email, $tel, $subiect, $mesaj);
    $stmt->execute();
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Mesaj trimis cu succes!');
        window.location.href='Relatii_Clienti.php';
        </script>");
    $stmt->close();
    $conn->close();
}

?>