
<!DOCTYPE html>
<html>
<head>
<title>Array Manipulatie</title>
</head>
<body>
<h1>Array Manipulatie</h1>
<p>Voer een cijfer in en klik op de knop om het aan de array toe te voegen. Vervolgens wordt de som van alle cijfers weergegeven.</p>

  <form method="post">
<label for="numberInput">Voer een cijfer in:</label>
<input type="number" name="numberInput" id="numberInput">
<button type="submit" name="addToArr">Voeg toe aan de array</button>
</form>

  <div id="output">
<?php
    // a) Array met één initiële waarde
    $numberArray = [5];

    // b) Controleer of het formulier is ingediend
    if (isset($_POST['addToArr'])) {
      $number = $_POST['numberInput'];

      // c) Voeg het ingevoerde cijfer toe aan de array
      $numberArray[] = $number;
    }

    // d) Laat alle cijfers in de array zien met een for loop
    echo "Alle cijfers in de array: ";
    foreach ($numberArray as $num) {
      echo $num . ", ";
    }

    // e) Bereken de som van alle cijfers in de array
    $sum = array_sum($numberArray);

    echo "<br>Som van alle cijfers in de array: $sum";
    ?>
</div>
</body>
</html>




