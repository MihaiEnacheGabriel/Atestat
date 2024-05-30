<?php

function redirect($url, $statusCode = 303)
{
    header('Location: '.$url, true, $statusCode);
}
function alert($message)
{
echo "<script>alert('$message');</script>";
}
$username = $_POST['username'];
$password = $_POST['password'];
/*$confirm = $_POST['confirm'];*/

$conn = new mysqli('localhost', 'root', '', 'atestat');
$f = 0;
$g = 0;
$a = 0;
$k = 0;
if($conn->connect_error)
{
    die('Connection Failed: '.$conn->connect_error);
}
else
{   
    $query = mysqli_query($conn, "select * from users where username = '$username'");
    if(mysqli_num_rows($query) > 0)
    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Nume de utilizator deja existent!');
        window.location.href='Inregistrare.php';
        </script>");
    }
    else{
        $stmt = $conn->prepare("insert into users (username, password, flotari, genoflexiuni, abdomene, km) values (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiiii", $username, $password, $f, $g, $a, $k);
        $stmt->execute();
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Înregistrare realizată cu succes!');
        window.location.href='Autentificare.php';
        </script>");
    }
        $stmt->close();
        $conn->close();
}

?>