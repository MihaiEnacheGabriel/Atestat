<html>
<head>
<title>FAQ</title>
<link rel="stylesheet" href="FAQ.css">
</head>
<body>

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
        $out = strlen($nume) > 6 ? substr($nume,0,6)."..." : $nume;
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
     <main>
        <h1 class="faq-heading">Informații Generale</h1>
        <section class="faq-container">
            <div class="faq-one">
                <!-- faq question -->
                <h1 class="faq-page">Prețuri & Abonamente</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Prețul abonamentului este de 51.99 RON/lună, prima lună (pentru clienți noi) fiind însă 32.55 RON. Plata se poate realiza în oricare dintre sălile din Brașov sau București. Accesul este nelimitat
                        cât timp abonamentul este valid.
                    </p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <!-- faq question -->
                <h1 class="faq-page">Wifi</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Fiecare sală deține internet gratuit pentru membri. Parola este afișată la intrarea în vestiare.</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
<h1 class="faq-page">Vârsta Necesară</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Accesul în sală este permis numai persoanelor cu vârsta de peste 14 ani.</p>
                </div>
            </div>
            <div class="faq-four">
                <!-- faq question -->
<h1 class="faq-page">Facilitati</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Fiecare sala ofera dusuri si vestiare pentru toti clientii.</p>
                </div>
            </div>
            <div class="faq-five">
              <!-- faq question -->
<h1 class="faq-page">Reguli</h1>
              <!-- faq answer -->
              <div class="faq-body">
                  <p>Regulamentul fiecărei săli este prezentat clientului în momentul realizării abonamentului.</p>
              </div>
          </div>
          <h1 class="faq-page">Anularea abonamentului</h1>
              <!-- faq answer -->
              <div class="faq-body">
                  <p>În cazul în care doriți să vă anulați abonamentul lunar, vă oferim 2 zile pentru a semna cererea de restituire a banilor.</p>
              </div>
          </div>
          <h1 class="faq-page">Antrenori personali</h1>
              <!-- faq answer -->
              <div class="faq-body">
                  <p>Sălile noastre dispun de un număr limitat de antrenori personali. Așadar, pentru a verifica disponibilitatea acestora, puteți vorbi în mod personal cu ei în interiorul sălilor.</p>
              </div>
          </div>
        </section>
    </main>
    
    <script src="FAQ.js"></script>
</body>
</html>