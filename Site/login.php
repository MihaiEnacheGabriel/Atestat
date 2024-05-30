<?php
function alert($message)
{
echo "<script>alert('$message');</script>";
}
$username = $_POST['username'];
$password = $_POST['password'];

function redirect($url, $statusCode = 303)
{
    header('Location: '.$url, true, $statusCode);
}


$con = new mysqli("localhost", "root", "", "atestat");
if($con->connect_error)
{
    die("Failed to connect : ".$con->connect_error);
}
else
{
    $stmt = $con->prepare("select * from users where username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0)
    {
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password)
        {
            session_start();
            $_SESSION['username'] = $username;
            /*alert("Login Successful");*/
            /*alert($_SESSION['username']);*/
            echo ("<script LANGUAGE='JavaScript'>
        window.alert('Autentificare reusita!');
        window.location.href='site.php';
        </script>");
        }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>
        window.alert('Nume sau parola incorecta');
        window.location.href='Autentificare.php';
        </script>");
        }
    }
    else
    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Nume sau parola incorecta');
        window.location.href='Autentificare.php';
        </script>");
    }
}
?>