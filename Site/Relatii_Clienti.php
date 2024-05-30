<html>
<head>
    <title>Relatii_Clienti</title>
    <link rel="stylesheet" href="pagestyleRLC.css">
    <script src="scriptRLC.js"></script>
</head>

<body>
        <style>
            body {
    /*background: linear-gradient(rgba(127, 129, 160, 0.911),rgb(43, 43, 156));*/
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('bg3.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
                }
        </style>

<nav id='menu'> 
  <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
  <ul>
  <li><a href='Site.php'>Acasă</a></li>
                  <li><a href='FAQ.php'>Informații generale</a></li>
                  <li><a class='dropdown-arrow' href='Brasov.php'>Locație</a>
                    <ul class='sub-menus'>
                      <li><a href='Brasov.php'>Brașov</a></li>
                      <li><a href='Bucuresti.php'>București</a></li>
                    </ul>
                  </li>
                  <li><a href='Echipamente.php'>Echipamente</a></li>
                  <li><a href='Maini.php'>Exerciții pentru acasă</a>
                  </li>
                  <li><a href='Relatii_Clienti.php'>Relații clienți</a></li>
                  <li><a href='Tabel.php'>Progres personal</a></li>
    <?php
session_start();
function redirect($url, $statusCode = 303)
{
    header('Location: '.$url, true, $statusCode);
}
function alert($message)
{
echo "<script>alert('$message');</script>";
redirect("Autentificare.php");
}
    if(isset($_SESSION['username']))
    {
        $nume=$_SESSION['username'];
        $out = strlen($nume) > 8 ? substr($nume,0,8)."..." : $nume;
        echo ("<li><a class='dropdown-arrow'>Cont: $out</a>
                    <ul class='sub-menus'>
                      <li><a href='logout.php'>Deconectare</a></li>
                    </ul>
                  </li>");
    }
    else 
    {
        echo ("<li><a class='dropdown-arrow' href='Autentificare.php'>Contul meu</a>
                    <ul class='sub-menus'>
                      <li><a href='Autentificare.php'>Autentificare</a></li>
                      <li><a href='Inregistrare.php'>Înregistrare</a></li>
                    </ul>
                  </li>");
    }
?>
</ul>
</nav>



    <div class="wrapper">
        <div class="content">
            <h1 style = "text-align:center; font-size: 200%; color: rgb(255, 255, 255);"> FORMULAR DE CONTACT </h1>
            <p style = "text-align:center; font-size: 120%; color: rgb(255, 253, 253);"> Contactați-ne cu opiniile și problemele dumneavoastră completând acest formular.
 </p>
        </div>
        
        <form action="rlc.php" method="post">
        <div class = "form">
            <div class = "top-form">
                <div class="inner-form">
                    <div class="label">Nume</div>
                    <input type="text" placeholder="Ion" id="name" name="nume" required>
                </div>
            
                <div class="inner-form">
                    <div class="label">Email</div>
                        <input type="text" placeholder="vasileion@gmail.com" id="email" name="email" required>
                </div>
                <div class="inner-form">
                    <div class="label">Număr de telefon</div>
                        <input type="text" placeholder="+40123456789" id="phone" name="tel" required>
                </div>
            </div>
            
            <div class="middle-form">
                <div class="inner-form">
                    <div class="label">Subiect</div>
                        <input type="text" placeholder="Titlu" id="title" name="subiect" required>
                </div>
            </div>
            
            <div class="bottom-form">
                <div class="inner-form">
                    <div class="label">Mesajul dumneavoastră</div>
                    <textarea placeholder="Mesaj" id="subject" name="mesaj" required></textarea>
                </div>
                
                
            </div>
            <button class="btn" type="submit">Trimiteti</div>
        </div>


    </div>
</form>
</body>
</html>