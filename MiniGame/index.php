<?php 
session_start();
require "connexion_bdd.php";
$name = @$_SESSION['username'];
$message = @$_SESSION['message'];
if ($name == "") {
  $record = 0;
} else {
$requete = "SELECT record,username FROM data WHERE username = '$name'";   
$result = $db->query($requete);
$row = $result->fetch(PDO::FETCH_OBJ);
$record = $row->record;
}

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      id="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="assets/css/css.css" />
    <title>Mini-game</title>
  </head>
  <body>
    <div id="principal">
      <div id="title">
        <h2 class="title-name">by Richard.A</h2>
        <h1 class="title" id="title-name">Mini-game</h1>
        <div class="title-name" id="connect">
          <?php if (@$_SESSION['username']=="")
          {
            echo <<<INSCRIPTION
          <form
            action="connexion.php"
            method="POST"
            id="form1"
          >
            <div id="confirm-up">
              <label for="user">
                username
                <input type="text" maxlength="10" size="7" required id="user" name="user" />
              </label>
              <label for="pass">
                |   password
                <input type="password" maxlength="10" size="7" required id="pass" name="pass" />
              </label>
            </div>
            <div id="confirm-down">
              <label for="inscrit">
                register
                <input type="checkbox" id="inscrit" name="inscrit" value="YES" />
                |
              </label>
              <input type="submit" />
            </div>
          </form>
          INSCRIPTION;
          } else {
              echo "<p>Welcome $name - <a id='unlog' style='color : lawngreen;' href='unlog.php'>disconnect</a></p>";
          }
          ?>
        </div>
      </div>
      <div id="game-overlay">
        <div id="timer-overlay">
          <h2>TIMER</h2>
          <p id="timer">0 : 0 : 0</p>
          <h2>SCORE</h2>
          <p id="score">0</p>
          <h2>BEST SCORE</h2>
          <p id="score-best">
            <?php echo $record ?>
          </p>
          <form
            action="record.php"
            method="POST"
            id="form2"
          >
            <input type="hidden" name="score-input" id="score-input" value="<?php echo $record ?>">
            </input>  
            <button type="submit" id="score-button" style="display : none;">
            <p><b>SUBMIT NEW HIGHSCORE</b></p>
            </button>
          </form>
          <?php
          if (@$_SESSION['username']=="")
          {
            echo "<div style='font-size : 1.2rem;'><p style='margin-left: 10px'>Register first if u want to submit ur highscore!</p></div>";
          }
          ?>
        </div>
        <div id="game-screen" style="opacity: 0">
          <div class="line-one">
            <div class="character" id="one-one">
              <img src="src/img/character.png" />
            </div>
            <div id="one-two" style="opacity: 0">
              <img src="" />
            </div>
            <div id="one-three" style="opacity: 0">
              <img src="" />
            </div>
            <div id="one-four" style="opacity: 0">
              <img src="" />
            </div>
            <div id="one-five" style="opacity: 0">
              <img src="" />
            </div>
            <div id="one-six" style="opacity: 0">
              <img src="" />
            </div>
            <div id="one-seven" style="opacity: 0">
              <img src="" />
            </div>
            <div id="one-eight" style="opacity: 0">
              <img src="" />
            </div>
            <div id="one-nine" style="opacity: 0">
              <img src="" />
            </div>
            <div id="one-ten" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
          </div>
          <div class="line-two">
            <div id="two-one" style="opacity: 0">
              <img src="" />
            </div>
            <div id="two-two" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="two-three" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="two-four" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="two-five" style="opacity: 0">
              <img src="" />
            </div>
            <div id="two-six" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="two-seven" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="two-eight" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="two-nine" style="opacity: 0">
              <img src="" />
            </div>
            <div id="two-ten" style="opacity: 0">
              <img src="" />
            </div>
          </div>
          <div class="line-three">
            <div id="three-one" style="opacity: 0">
              <img src="" />
            </div>
            <div id="three-two" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="three-three" style="opacity: 0">
              <img src="" />
            </div>
            <div id="three-four" style="opacity: 0">
              <img src="" />
            </div>
            <div id="three-five" style="opacity: 0">
              <img src="" />
            </div>
            <div id="three-six" style="opacity: 0">
              <img src="" />
            </div>
            <div id="three-seven" style="opacity: 0">
              <img src="" />
            </div>
            <div id="three-eight" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="three-nine" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="three-ten" style="opacity: 0">
              <img src="" />
            </div>
          </div>
          <div class="line-four">
            <div id="four-one" style="opacity: 0">
              <img src="" />
            </div>
            <div id="four-two" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="four-three" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="four-four" style="opacity: 0">
              <img src="" />
            </div>
            <div id="four-five" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="four-six" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="four-seven" style="opacity: 0">
              <img src="" />
            </div>
            <div id="four-eight" style="opacity: 0">
              <img src="" />
            </div>
            <div id="four-nine" style="opacity: 0">
              <img src="" />
            </div>
            <div id="four-ten" style="opacity: 0">
              <img src="" />
            </div>
          </div>
          <div class="line-five">
            <div id="five-one" style="opacity: 0">
              <img src="" />
            </div>
            <div id="five-two" style="opacity: 0">
              <img src="" />
            </div>
            <div id="five-three" style="opacity: 0">
              <img src="" />
            </div>
            <div id="five-four" style="opacity: 0">
              <img src="" />
            </div>
            <div id="five-five" style="opacity: 0">
              <img src="" />
            </div>
            <div id="five-six" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="five-seven" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="five-eight" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="five-nine" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="five-ten" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
          </div>
          <div class="line-six">
            <div id="six-one" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="six-two" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="six-three" style="opacity: 0">
              <img src="" />
            </div>
            <div id="six-four" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="six-five" style="opacity: 0">
              <img src="" />
            </div>
            <div id="six-six" style="opacity: 0">
              <img src="" />
            </div>
            <div id="six-seven" style="opacity: 0">
              <img src="" />
            </div>
            <div id="six-eight" style="opacity: 0">
              <img src="" />
            </div>
            <div id="six-nine" style="opacity: 0">
              <img src="" />
            </div>
            <div id="six-ten" style="opacity: 0">
              <img src="" />
            </div>
          </div>
          <div class="line-seven">
            <div id="seven-one" style="opacity: 0">
              <img src="" />
            </div>
            <div id="seven-two" style="opacity: 0">
              <img src="" />
            </div>
            <div id="seven-three" style="opacity: 0">
              <img src="" />
            </div>
            <div id="seven-four" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="seven-five" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="seven-six" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="seven-seven" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="seven-eight" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="seven-nine" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="seven-ten" style="opacity: 0">
              <img src="" />
            </div>
          </div>
          <div class="line-eight">
            <div id="eight-one" style="opacity: 0">
              <img src="" />
            </div>
            <div id="eight-two" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="eight-three" style="opacity: 0">
              <img src="" />
            </div>
            <div id="eight-four" style="opacity: 0">
              <img src="" />
            </div>
            <div id="eight-five" style="opacity: 0">
              <img src="" />
            </div>
            <div id="eight-six" style="opacity: 0">
              <img src="" />
            </div>
            <div id="eight-seven" style="opacity: 0">
              <img src="" />
            </div>
            <div id="eight-eight" style="opacity: 0">
              <img src="" />
            </div>
            <div id="eight-nine" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="eight-ten" style="opacity: 0">
              <img src="" />
            </div>
          </div>
          <div class="line-nine">
            <div id="nine-one" style="opacity: 0">
              <img src="" />
            </div>
            <div id="nine-two" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="nine-three" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="nine-four" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="nine-five" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="nine-six" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="nine-seven" style="opacity: 0">
              <img src="" />
            </div>
            <div id="nine-eight" style="opacity: 0">
              <img src="" />
            </div>
            <div id="nine-nine" class="lava">
              <img src="src/img/lava.jpg" />
            </div>
            <div id="nine-ten" style="opacity: 0">
              <img src="" />
            </div>
          </div>
          <div class="line-ten">
            <div id="ten-one" style="opacity: 0">
              <img src="" />
            </div>
            <div id="ten-two" style="opacity: 0">
              <img src="" />
            </div>
            <div id="ten-three" style="opacity: 0">
              <img src="" />
            </div>
            <div id="ten-four" style="opacity: 0">
              <img src="" />
            </div>
            <div id="ten-five" style="opacity: 0">
              <img src="" />
            </div>
            <div id="ten-six" style="opacity: 0">
              <img src="" />
            </div>
            <div id="ten-seven" style="opacity: 0">
              <img src="" />
            </div>
            <div id="ten-eight" style="opacity: 0">
              <img src="" />
            </div>
            <div id="ten-nine" style="opacity: 0">
              <img src="" />
            </div>
            <div id="ten-ten" style="opacity: 0">
              <img src="" />
            </div>
          </div>
        </div>
        <div id="record-overlay">
          <div id="record-title">
            <h2>RECORDS</h2>
          </div>
          <ul id="record-list">
            <?php 
               $reponsebis = $db->query('SELECT record,username FROM data ORDER BY record DESC LIMIT 10');
               while ($donnees = $reponsebis->fetch()) {
               $affichage = "<li>".$donnees['username']." - ".$donnees['record']."</li>";
               echo $affichage;
               }
            ?>
          </ul>
        </div>
      </div>
      <div id="game-control">
        <button id="game-start"></button>
        <div class="moving">
          <button id="game-up"></button>
          <div id="moving-esthetic">
            <button id="game-left"></button>
            <button id="game-down"></button>
            <button id="game-right"></button>
          </div>
        </div>
      </div>
    </div>
    <?php
      if (isset($message)) {
        echo <<<MESSAGE
        <script>
          window.alert('$message');
        </script>
        MESSAGE;
        @$_SESSION['message'] = NULL;
      }
    ?>
    <script src="assets\js\javascript.js"></script>
  </body>
</html>
