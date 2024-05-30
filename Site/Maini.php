<html>
  <head>
    <title> Exercitii </title>
    <link rel="stylesheet" href="Maini.css">
  </head>

  <body>
    
  <style>
    body {

     /* background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('bg3.jpg');*/
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
        $out = strlen($nume) > 6 ? substr($nume,0,6)."..." :$nume;
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

  <h1>Exerciții pentru acasă</h1>

  <h2></h2>
  <h3>Pentru a forma o rutină simplă acasă recomandăm:</h3>
  <br>
  <br>

  <h2>15 flotari</h2>

  <p>  <img src='flotari.jpg'>Flotările se numără printre cele mai populare și eficiente exerciții, atunci când sunt executate corect. Contrar opiniei celor mai mulți practicanți de fitness și culturism și ușurinței aparente a executării lor, flotările nu sunt un exercițiu pe care începătorii să-l poată efectua cu prea mare ușurință. Foarte puține sunt exercițiile care solicită în același timp mușchii pieptului, brațelor, umerilor, spatelui, abdomenului și trunchiului și care ard un număr cosiderabil de calorii așa cum o pot face flotările.
</h2>

  <p><img src='fandari.jpg'>Este unul dintre cele mai eficiente exerciții pentru antrenamentul coapselor și gluteilor. Fandările sunt exerciții unilaterale pentru trenul inferior, ceea ce înseamnă că lucrează câte un picior pe rând. Sunt deosebit de utile pentru:
îmbunătățirea echilibrului,
prevenirea accidentărilor,
corectarea dezechilibrelor musculare și
recuperare.
</p>
  <h2>2 minute scandură
</h2>

  <p>  <img src='planking.jpg'>Făcând exercițiul de scandură, vă întăriți mușchii abdominali și, prin extensie, oferiți mai mult sprijin coloanei vertebrale.
</p>
  <h2>30 de genuflexiuni</h2>

  <p>  <img src='squats.jpg'>Musculatura membrelor inferioare este foarte importantă. Dacă iți dorești să iți îmbunătățești postura corpului, genuflexiunile iți sunt de mare ajutor. Practicandu-le, musculatura spatelui și a picioarelor este fortificată, iar astfel întregul corp se va alinia perfect.
</p>
  <h2>20 ridicări de greutăți cu fiecare mână</h2>
  <p><img src='greutati.jpg'>Beneficiile ridicării de greutăți includ construirea mușchilor, arderea grăsimilor corporale, întărirea oaselor și articulațiilor, reducerea riscului de accidentare și îmbunătățirea sănătății inimii. Pentru a ridica greutăți în siguranță, este important să începeți încet, să vă luați zile de odihnă și să folosiți întotdeauna forma adecvată.</p>
  <h2>10 tracțiuni</h2>
  <p>  <img src='tractiuni.jpg'>Principalul beneficiu al utilizării unei bare de tracțiuni este faptul că pune în mișcare și întărește un număr foarte mare de grupe musculare, mai exact mușchii spatelui, brațelor, umerilor și pieptului. De asemenea, utilizarea repetată a unei bare de tracțiuni te ajută să nu te mai accidentezi atât de ușor în timp ce faci activități casnice sau de zi cu zi, te menține în formă, iți sprijină metabolismul și iți ridică moralul.
</p>
  </body>
  </html>