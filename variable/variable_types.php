<html>
  <head><title>Hi!</title></head>
  <body>
    <h1>Hello my name is <?php $_NAME = "Aurelien"; echo $_NAME;?></h1> 
    <p>I am <?php $_AGE = 26; echo $_AGE;?></p>
    <p>My eyes are <?php $_EYES = "brown"; echo $_EYES;?></p>
    <p>The first person in my family is <?php 
    $_FAMILY = array(
        0 => 'Coralie', 
        1 => 'Sylvie',   
        2 => 'Emma'); echo $_FAMILY[1];?></p>
    <?php
        $hungry = true;
        if ($hungry == true) {
            echo "J'ai faim";
        } else {
            echo "Je n'ai pas faim";
        }
    ?>
  </body>
</html>
