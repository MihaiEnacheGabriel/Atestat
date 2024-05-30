<html>
    <head>
        <title>Autentificare</title>
        <link rel="stylesheet" href="Autentificare.css">
    </head>
    <body>
        <style>
            body {
    /*background: linear-gradient(rgb(43, 43, 156), rgba(127, 129, 160, 0.911));*/
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
            </ul>
          </nav>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <h1> Autentificare </h1>
        <form action="login.php" method="post">
           <!-- <div class="imgcontainer">
              <img src="default-avatar.png" alt="Avatar" class="avatar">
            </div> -->
          
            <div class="container">
              <label for="email"><b>Nume de utilizator</b></label>
              <input type="text" placeholder="Enter Username" name="username" required>
          
              <label for="psw"><b>Parola</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
          
              <span class ='psw' style="margin-right:40%">Nu aveti <a style="color:red;" href="Inregistrare.php">cont?</a></span>
              <button type="submit" class="button">Autentificare</button>
            </div>
          </form>



    </body>
</html>