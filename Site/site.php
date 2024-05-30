<html>
  <head>
    
    <title> Fitness </title>
    <link rel="stylesheet" href="pagestyle.css">
    <script src="site.js"></script>
  </head>

  <body>
  <style>
    body {

     background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('bg3.jpg');
     /* background: linear-gradient(rgb(0, 0, 0), rgb(0, 0, 0));*/
     /* background-image: url('g2.jpg');*/
    /*background: linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url('g2.jpg');*/
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        </style>
 
  
<nav id='menu'> 
  <input type='checkbox' id='responsive-menu' onclick='updatemenu()'>
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
  <br>
  <br>
  <br>
  <br>
  <br>


    <div class="row">
      <div class="col">
        <h1>Golden Hour Gym</h1>
        <p>Un loc ideal pentru a-ți atinge potențialul maxim</p>
      </div>
    </div>
<button class="button" onclick="location.href='FAQ.php'">Să începem</button>
<br>
<br>
</body>
</html>