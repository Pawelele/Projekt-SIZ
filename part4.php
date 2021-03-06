<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Strona główna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Urząd Miasta Katowice">
        <meta name="keywords" content="Urząd Miasta, Katowice, Urząd Katowice, Urząd Miasta Katowice">
        <link rel="stylesheet" href="style.css" type="text/css">

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

      <!-- Importing bootstrap -->
      <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css"/>
      <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
      <script src="Bootstrap/js/bootstrap.min.js"></script>
      <!-- End Importing bootstrap -->

      <script src="js/accessibility4.js" defer></script>
    </head>
    <!-- Przypisanie zmiennej z poprzedniego etapu -->
    <?php
      session_start();
      $_SESSION['name'] = $_POST['personal_name'];
      $_SESSION['surname'] = $_POST['personal_surname'];
      $_SESSION['pesel'] = $_POST['personal_pesel'];
      $_SESSION['email'] = $_POST['personal_email'];
    ?>

    <body>
    <div class="bigCursor">
      <div class="accessibility">
        <div class="change-cursor"><img src="img/cursor.png"></div>
        <div class="change-colors"><img src="img/change.png"></div>
        <div class="icon"><img src="img/disabled.png"></div>
      </div>

      <div class="all_body">
        <header>
          <div class="container-fluid">
            <div class="row">
              <a href=index.php><img id="logo" class="logo2" src="logo@2x.png"></a>
              <p id="main_title">Urząd Miejski w Katowicach, Wydział XYZ</p>
            </div>
          </div>
        </header>



        <div class="sekcja_glowna">

        <center>
          <div class="sekcja1_all" id="mobile-centered">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="round">1</div>
                  <p class="p_another">Dział</p>
                </div>
                <div class="col-md-3">
                  <div class="round">2</div>
                  <p class="p_another">Termin</p>
                </div>
                <div class="col-md-3">
                  <div class="round">3</div>
                  <p class="p_another">Dane</p>
                </div>
                <div class="col-md-3">
                  <div class="actual_round">4</div>
                  <p class="p_actual">Potwierdzenie</p>
                </div>
              </div>
            </div>
          </div>
        </center>

          <div class="container">
            <div class="row">
              <p id="wybierz_opcje">Dane rezerwacji</p>
                <div class="flex-parent jc-center">
                  <div class="option" id="no_color_change" id="part4_option">Twoje imie: <a><?php echo $_SESSION['name']?></a></div>
                </div>
                <div class="flex-parent jc-center">
                  <div class="option" id="no_color_change">Twoje nazwisko: <a><?php echo $_SESSION['surname']?></a></div>
                </div>
                <div class="flex-parent jc-center">
                  <div class="option" id="no_color_change">Twój email: <a><?php echo $_SESSION['email']?></a></div>
                </div>
                <div class="flex-parent jc-center">
                  <div class="option" id="no_color_change">Twój termin: <a><?php echo $_SESSION['picked_date']?></a></div>
                </div>
            </div>
          </div>
        </div>

        <div class="sekcja_regulamin">
          <div class="container">
            <div class="row">
              <p id="reg_p">Regulamin</p>
              <div class="flex-parent jc-center">
                <div class="regulamin">
                  1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit ullamcorper dignissim cras tincidunt lobortis. Suspendisse ultrices gravida dictum fusce ut placerat orci.<br>
                  2. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit ullamcorper dignissim cras tincidunt lobortis. Suspendisse ultrices gravida dictum fusce ut placerat orci.<br>
                  3. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit ullamcorper dignissim cras tincidunt lobortis. Suspendisse ultrices gravida dictum fusce ut placerat orci.<br>
                </div>
              </div>

              <form name="form" action="part5.php">
              <div class="rules_checbox_div"><input id="accept_rules_checkbox" type="checkbox" name="accept_rules" required>Akceptuję regulamin</div><br>
              <input id="submit_part4" type="submit" name="next" value="Rezerwuję">
              </form>

              <div class="flex-parent jc-center">
                <div id="blue_hr"></div>
              </div>
              <p id="footer_part4">Lorem ipsum, Lorem ipsum, Lorem ipsum</p>
            </div>
          </div>
        </div>

      </div>
      </div>
    </body>
</html>
