<?php /*
    $family = array (
        1 => 'Coralie',
        2 => 'Sylvie',
        3 => 'Dany'
    );
    print_r($family);

    $recipe = array (
        1 => 'Chicken',
        2 => 'plain yogurt',
        3 => 'minced garlic',
        4 => 'minced ginger',
        5 => 'garam masala',
        6 => 'turmeric',
        7 => 'ground cumin',
        8 => 'red chili powder',
        9 => 'salt'
    );
    var_dump($recipe);

    $movies = array (
        1 => 'American Sniper',
        2 => 'Nous étions soldats',
        3 => 'Le loup de wallstreet'
    );
    echo($movies[2]);
*/ ?>

<?php /*
    $me = array (
        'name' => 'Aurélien',
        'lastname' => 'Saelens',
        'age' => '26',
        'season' => 'summer',
        'soccer' => false,
        'hobbies' => array (
            1 => 'skateboarding',
            2 => 'friends',
            3 => 'party',
            4 => 'coding'
        ),
        'mother' => array (
            'age' => '49',
            'name' => 'sylvie',
            'hobbies' => 'dancing'
        ),
    );
    $me['hobbies'][]=['Taxidermy'];
    $me['lastname'] = 'Durand';

    $soulmate = array (
        'name' => 'kamil',
        'lastname' => 'bickzyk',
        'age' => '22',
        'season' => 'summer',
        'soccer' => false,
        'hobbies' => array (
            1 => 'coding'
        ),    
    );
    $intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
        echo '<pre>';
        print_r($intersection);
        echo '<pre>';

    $fusion = array_merge($me['hobbies'], $soulmate['hobbies']);
        echo '<pre>';
        print_r($fusion);
        echo '<pre>';


   // echo '<pre>';
   // print_r($me['lastname']);
   // echo '</pre>';
 */ ?>

 <?php
    $web_development = array ( 
        'frontend' => '',
        'backend' => ''
    );
    $web_development['frontend'] = ['xhtml', 'CSS', 'Javascript'];
    $web_development['backend'] = ['Ruby on Rails', 'Flash'];
    $web_development['frontend'][0] = 'html';
    $web_development['backend'][1] = '';


    echo '<pre>';
    print_r($web_development);
    echo '<pre>';
?>