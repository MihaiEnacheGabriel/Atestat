<html>
  <head>
    <title> Echipamente </title>
    <link rel="stylesheet" href="Echipamente.css">
  </head>

  <body>
    
  <style>
    body {

   background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('bg3.jpg');
   /*background: linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url('g2.jpg');*/
      /*background: linear-gradient(rgb(0, 0, 0), rgb(0, 0, 0));*/
      /*background-image: url('bg3.jpg');*/
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
<br>

  <h1>Echipamente Disponibile</h1>

<!--
  <h2>Biciclete</h2>
  <p>Miscarea cu impact redus implicata in operarea unei biciclete de exercitii nu pune prea mult stres asupra articulatiilor si nu implica miscari sporadice pe care le pot necesita alte echipamente de fitness.</p>
  <img src='bicicleta.jpg'>
  <h2>Benzi de alergat</h2>
  <p>Daca va place sa mergeti pe jos, sa alergati sau sa alergati, banda de alergare va poate ajuta sa va atingeti rapid si eficient obiectivele de fitness</p>
  <img src='bandadealergat.jpeg'>
  <h2>Gantere reglabile</h2>
  <p>Ele activeaza o serie de muschi diferiti si stimuleaza cresterea musculara. Pot ajuta la imbunatatirea atat a fortei musculare, cat si a flexibilitatii si pot promova coordonarea si stabilitatea muschilor si articulatiilor.</p>
  <img src='gantere.jpg'>
  <h2>Aparate multifunctionale</h2>
  <p>Pentru cei care au nevoie de timp, aparatul de gimnastica multifunctional poate fi folosit pentru a obtine un antrenament pentru intregul corp intr-un timp scurt.</p>
  <img src='aparatmultifunctional2.jpg'>
-->

<div id="slider">
  <input type="radio" name="slider" id="slide1" checked>
  <input type="radio" name="slider" id="slide2">
  <input type="radio" name="slider" id="slide3">
  <input type="radio" name="slider" id="slide4">
  <input type="radio" name="slider" id="slide5">
  <div id="slides">
     <div id="overflow">
        <div class="inner">
           <div class="slide slide_1">
              <div class="slide-content">
                 <h2>Bicicletă staționară
</h2>
              </div>
           </div>
           <div class="slide slide_2">
              <div class="slide-content">
                 <h2>Bandă de alergat
</h2>
                 <p></p>
              </div>
           </div>
           <div class="slide slide_3">
              <div class="slide-content">
                 <h2>Gantere</h2>
                 <p></p>
              </div>
           </div>
           <div class="slide slide_4">
              <div class="slide-content">
                 <h2>Kettlebell</h2>
                 <p></p>
              </div>
           </div>
           <div class="slide slide_5">
            <div class="slide-content">
               <h2>Aparat multifuncțional
</h2>
               <p></p>
            </div>
         </div>
        </div>
     </div>
  </div>
  <div id="controls">
     <label for="slide1"></label>
     <label for="slide2"></label>
     <label for="slide3"></label>
     <label for="slide4"></label>
     <label for="slide5"></label>
  </div>
  <div id="bullets">
     <label for="slide1"></label>
     <label for="slide2"></label>
     <label for="slide3"></label>
     <label for="slide4"></label>
     <label for="slide5"></label>
  </div>
</div>

  </body>
  </html>