<html>
  <head><title>Hi!</title></head>
    <body>
        <?php $_EYES = "brown";?>
        <?php $_AGE = "26";?>
        <?php $_NAME = "Aurelien";?>
        <?php $_FAMILY = array(
            0 => 'Coralie', 
            1 => 'Sylvie',   
            2 => 'Emma');
        ?>
        <h1>Hello my name is <?= $_NAME?></h1> 
        <p>I am <?= $_AGE?></p>
        <p>My eyes are <?= $_EYES?></p>
        <p>The first person in my family is <?= $_FAMILY[0];?></p>
        <?php $hungry = true;
            if ($hungry == true) {
                echo "J'ai faim";
            } else {
                echo "Je n'ai pas faim";
            }
        ?>
    </body>
</html>
