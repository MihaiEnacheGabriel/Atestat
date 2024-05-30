<html>

<head>
    <title>Progres</title>
    <link rel="stylesheet" href="Tabel.css">

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
    else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Aveți nevoie de cont pentru a continua pe această pagină');
        window.location.href='Autentificare.php';
        </script>");
    }
?>
          
      </ul>
      </nav>
      <br>

<h1>Introduceți numerul dumneavoastră de exerciții realizate astăzi</h1>
<h2>(Dacă nu ați realizat un anumit tip de exercițiu, introduceți 0) </h2>
<form action="tabelinfo.php" method="post">
<div class = "form">
    <div class = "top-form">
        <div class="inner-form">
            <div class="label">Flotari</div>
            <input type="text" name = "flotari" required>
        </div>
    
        <div class="inner-form">
            <div class="label">Abdomene</div>
                <input type="text" name="abdomene" required>
        </div>
        <div class="inner-form">
            <div class="label">Genuflexiuni</div>
                <input type="text" name="genoflexiuni" required>
        </div>
    <div class="inner-form">
            <div class="label">Km Alergati</div>
                <input type="text" name="km" required>
    </div>
    </div>
    <button class="btn" type="submit" onclick="location.href='Tabel.php'">Salvați</div>
</div>
</form>
<br>

<?php

$nume = $_SESSION['username'];

$conn = new mysqli('localhost', 'root', '', 'atestat');
if($conn->connect_error)
{
    die('Connection Failed: '.$conn->connect_error);
}
///ia valorile din tabel
$sql = "select flotari, abdomene, genoflexiuni, km from users where username = '$nume'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
  if($row = $result->fetch_assoc())
  {
    $flotari = $row["flotari"];
    $abdomene = $row["abdomene"];
    $genoflexiuni = $row["genoflexiuni"];
    $km = $row["km"];
  }
}
///face sumele valorilor tuturor utilzatorilor
$sql = "select sum(flotari) from users";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result))
{
  $sumf = $row['sum(flotari)'];
}
$sql = "select sum(abdomene) from users";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result))
{
  $suma = $row['sum(abdomene)'];
}
$sql = "select sum(genoflexiuni) from users";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result))
{
  $sumg = $row['sum(genoflexiuni)'];
}
$sql = "select sum(km) from users";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result))
{
  $sumk = $row['sum(km)'];
}

///Numara cate valori sunt nenule in tabel pentru a putea face media aritmetica
$sql = "select count(*) from users where flotari IS NOT NULL";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result))
{
  $nrf = $row['count(*)'];
}

$sql = "select count(*) from users where abdomene IS NOT NULL";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result))
{
  $nra = $row['count(*)'];
}

$sql = "select count(*) from users where genoflexiuni IS NOT NULL";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result))
{
  $nrg = $row['count(*)'];
}

$sql = "select count(*) from users where km IS NOT NULL";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result))
{
  $nrk = $row['count(*)'];
}

///Media aritmetica
$pf1 = $sumf/$nrf;
$pa1 = $suma/$nra;
$pg1 = $sumg/$nrg;
$pk1 = $sumk/$nrk;
$pf = round($pf1, 1);
$pa = round($pa1, 1);
$pg = round($pg1, 1);
$pk = round($pk1, 1);

///Progresul pentru bara (le rotunjeste in ultimele 4)
$prf1 = $flotari/$pf*100;
$pra1 = $abdomene/$pa*100;
$prg1 = $genoflexiuni/$pg*100;
$prk1 = $km/$pk*100;
$prf = round($prf1, 1);
$pra = round($pra1, 1);
$prg = round($prg1, 1);
$prk = round($prk1, 1);
if($prf > 100)
$prf = 100;
if($pra > 100)
$pra = 100;
if($prg > 100)
$prg = 100;
if($prk > 100)
$prk = 100;

echo ("<table style='width:95%'>
<tr>
  <td>Exercițiu
  </td>
  <td>Numărul tău
  </td>
  <td>Media userilor</td>
  <td>Procentaj</td>
</tr>
<tr>
  <td>Flotări</td>
  <td>$flotari</td>
  <td>$pf</td>
  <td> <div class='bg' style='width:$prf%'></div> </td>
  <tr>
  <td>Abdomene</td>
  <td>$abdomene</td>
  <td>$pa</td>
  <td> <div class='bg' style='width:$pra%'></div></td>
  </tr>
</tr>
  <tr>
  <td>Genuflexiuni</td>
  <td>$genoflexiuni</td>
  <td>$pg</td>
  <td> <div class='bg' style='width:$prg%'></div></td>
</tr>
  <tr>
  <td>Km</td>
  <td>$km</td>
  <td>$pk</td>
  <td> <div class='bg' style='width:$prk%'></div> </td>
</tr>
</table>")
?>
<!--
<table style="width:95%">
  <tr>
    <td>Exercitiu</td>
    <td>Numarul tau</td>
    <td>Media userilor</td>
    <td>Procentaj</td>
  </tr>
  <tr>
    <td>Flotari</td>
    <td>5</td>
    <td>25</td>
    <td> <div class="bg" style="width: 20%"></div> </td>
  </tr>
    <tr>
    <td>Genoflexiuni</td>
    <td>10</td>
    <td>20</td>
    <td> <div class="bg" style="width: 50%"></div> </td>
  </tr>
    <tr>
    <td>Abdomene</td>
    <td>16</td>
    <td>64</td>
    <td> <div class="bg" style="width: 25%"></div> </td>
  </tr>
    <tr>
    <td>Km alergati</td>
    <td>10</td>
    <td>10</td>
    <td> <div class="bg" style="width:100%"></div> </td>
  </tr>
</table>-->

</body>
</html>