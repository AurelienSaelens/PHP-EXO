<?php /* 
    $pronouns = array('I', 'You', 'He/She','We', 'You', 'They');

    foreach($pronouns as $pronouns) {
         if($pronouns === 'He/She'){
              echo $pronouns . " codes <br>";
         }
         else{
         echo $pronouns . " code <br>";
    }}
 */ ?>
<?php /*
    $number_of_line = 1;
    while ($number_of_line <= 100) {
        echo "I shall not watch flies fly when I'm learning PHP <br>";
    }
    $number_of_line++;
*/ ?>
<?php /*
    for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++)
    {
         echo "I shall not watch flies fly when I'm learning PHP <br>";
    }
*/?>

<?php /*
    for( $number=0; $number<=120; $number++){
    echo $number;
    echo "<br>";
    }
 */ ?>

<?php
$countries = array ('Belgium' => 'Belgium',
                    'France' => 'France',
                    'Germany' => 'Germany',
                    'Danemark' => 'Danemark',
                    'Sweden' => 'Sweden',
                    'Poland' => 'Poland',
                    'Italia' => 'Italia',
                    'Spain' => 'Spain',
                    'Portugal' => 'Portugal',
                    'Netherlands' => 'Netherlands')
?>

<form action="loops.php" method="GET">
  <select name="countries">
    <?php
   foreach($countries as $key => $value)
   {
   echo "<option value='$key'> $key</option>";
   }
?>
  </select>
  <button type="submit" name="envoyer">Envoyer</button>
</form>
