<html>

<head>
    <title>Brasov</title>

    <link rel="stylesheet" href="Brasov.css" />
</head>

<body>
    <style>
    body {

     /* background: linear-gradient(rgb(43, 43, 156), rgba(127, 129, 160, 0.911));*/
          /*background-image: url('bg3.jpg');*/
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
          
    <h3>Locație Brașov</h3>
    <div id="map"></div>
    <iframe width="99%" height="350px" frameborder="1" scrolling="no" id="gmap_canvas" src="https://maps.google.com/maps?width=976&amp;height=662&amp;hl=en&amp;q=carpatilor%2013%20Brasov+(Brasov)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
</body>

</html>

