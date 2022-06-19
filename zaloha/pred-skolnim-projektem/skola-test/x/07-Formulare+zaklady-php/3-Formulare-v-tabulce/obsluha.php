<style>
    .vysledek {
        color:red;
        font-weight:bold;
        font-size: 130%;
        display: inline;
    }
</style>
<h2 style="color:red">Vítejte ve skriptu pro obsluhu formuláře</h2>

<?php 
if(isset($_POST["heslo"])) {
  echo "<h3>Byli vyplněny následující údaje: </h3>";

  /*echo "<p>Pět plus 5 = ";
  $vysledek = 5+5;
  echo "<span class='vysledek'>$vysledek</span></p>";*/

  echo "<p>Jméno a příjmení: <b>"; echo $_POST["jmeno"]; echo "</b></p>";

  echo "<p>Heslo: <b>"; echo $_POST["heslo"]; echo "</b></p>";

  echo "<p>Pohlaví: <b>"; echo $_POST["pohlavi"]; echo "</b></p>";

  echo "<p>Souhlas: <b>"; 
  if(isset($_POST["souhlas"])) {
    echo $_POST["souhlas"];
  }
  else {
    echo "ne";
  }
  echo "</b></p>";
} else {
  echo "<h1>Nevyplnil jsi formulář, nemáš tady co dělat</h1>";
  echo "<a href=\"index.html\">Tady je ten formulář!</a>";
}
?>