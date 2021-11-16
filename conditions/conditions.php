<?php /* $room_is_filthy = true;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
} */?>


<?php /*
// Create the array of possible states
$possible_states = array (0 => 'health hazard', 1 => 'filthy', 2 => 'dirty', 3 => 'clean', 4 => 'immaculate');

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $possible_states[0][1] ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $possible_states[2] ){
	echo "Yuk, Room is dirty : let's clean it up !";
  if ( $possible_states[3] ){
      echo "Yuk, Room is clean : nothing to do";
}
} else {
	echo "<br>Nothing to do, room is neat.";
}
 */ ?>

 <?php /* // 2. "Different greetings according to time" Exercise

    $now = date('H:i:s');
    echo $now;

    if ($now < "09") {
        echo "Good morning";
    } else if ($now > "09" && $now <= "12") {
        echo "Good day!";
    } else if ($now > "12" && $now <= "16") {
        echo "Good afternoon !";
    } else if ($now > "16" && $now <= "21") {
        echo "Good evening";
    } else if ($now > "21" && $now < "5") {
        echo "Good evening";
    }
     */ ?>

<?php /*
    if($_GET['genre'] == 'homme' AND $_GET['anglais'] == 'no'){
    if($_GET['age'] <12){
        echo "Tu as " .$_GET['age']. " years, Salut petit!";
    }
    else if($_GET['age'] >=12 AND $_GET['age']<=18){
        echo "Tu as " .$_GET['age']. " ans, Salut l'adolescent!";
    }
    else if($_GET['age'] >18 AND $_GET['age']<= 115){
        echo "Tu as " .$_GET['age']. " ans, Salut monsieur l'adulte!";
    }
    else if($_GET['age'] >115){
        echo "Tu as " .$_GET['age']. " ans, Wow! Toujours vivant?";
    }
    } 
    else if($_GET['genre'] == 'homme' AND $_GET['anglais'] == 'yes'){
    if($_GET['age'] <12){
        echo "You are " .$_GET['age']. " yo, Hello boy!";
    }
    else if($_GET['age'] >=12 AND $_GET['age']<=18){
        echo "You are " .$_GET['age']. " yo, Hello Teenage boy!";
    }
    else if($_GET['age'] >18 AND $_GET['age']<= 115){
        echo "You are " .$_GET['age']. " yo, Hello Sir!";
    }
    else if($_GET['age'] >115){
        echo "You are " .$_GET['age']. " yo, Wow! Still alive, old man?";
    }
    } 
    else{
    if($_GET['genre'] == 'femme' AND $_GET['anglais'] == 'no'){
        if($_GET['age'] <12){
        echo "Tu as " .$_GET['age']. " ans, Salut petite!";
        }
        else if($_GET['age'] >=12 AND $_GET['age']<=18){
        echo "Tu as " .$_GET['age']. " ans, Salut l'adolescente!";
        }
        else if($_GET['age'] >18 AND $_GET['age']<= 115){
        echo "Tu as " .$_GET['age']. " ans, Salut madame l'adulte!";
        }
        else if($_GET['age'] >115){
        echo "Tu as " .$_GET['age']. " ans, Wow! Toujours vivante?";
        }
        } 
    else if($_GET['genre'] == 'femme' AND $_GET['anglais'] == 'yes'){
        if($_GET['age'] <12){
        echo "You are " .$_GET['age']. " yo, Hello girl!";
        }
        else if($_GET['age'] >=12 AND $_GET['age']<=18){
        echo "You are" .$_GET['age']. " yo, Hello Teenage girl!";
        }
        else if($_GET['age'] >18 AND $_GET['age']<= 115){
        echo "You are " .$_GET['age']. " yo, Hello Lady!";
        }
        else if($_GET['age'] >115){
            echo "You are " .$_GET['age']. " yo, Wow! Still alive, old lady?";
        }
        }
    }
 */?> <!--
  <form method="GET" action="conditions.php">
   <h3>Are you : </h3>
   <p><label><input type="radio" name="genre" value="homme"> Men ? </label></p>
   <p><label><input type="radio" name="genre" value="femme"> Women ? </label></p>
   <h3>Speak english ? </h3>
   <p><label><input type="radio" name="anglais" value="yes">Yes </label></p>
   <p><label><input type="radio" name="anglais" value="no">No </label></p>
   <p><label> How old are you ? <input type="number" name="age" value=""></label></p>
 </form>  !-->
 


<?php 
    if($_GET['note'] >= 1 AND  $_GET['note'] <= 4){
    echo "This work is really bad. What a dumb kid!";
    }
    elseif($_GET['note'] >= 5 AND  $_GET['note'] <= 9){
    echo "This is not sufficient. More studying is required.";
    }
    elseif($_GET['note'] == 10){
    echo "barely enough!";
    }
    elseif($_GET['note'] >= 11 AND  $_GET['note'] <= 14){
    echo "Not bad!";
    }
    elseif($_GET['note'] >= 15 AND  $_GET['note'] <= 18){
    echo "Bravo, bravissimo!";
    }
    elseif($_GET['note'] >= 19 AND  $_GET['note'] <= 20){
    echo "Too good to be true : confront the cheater!";
    }
?>

 <form method="GET" action="conditions.php">
 <p><label>Votre note /20 <input type="number" name="note" value=""></label></p>
</form> 










