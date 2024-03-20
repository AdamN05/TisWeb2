<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Övning2</title>
</head>
<body>
    <p><b>Övning 1</b></p>
    <?php
        $color1 = array('white', 'green', 'red', 'blue', 'black');

        echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color1[2] carpet, the $color1[1] lawn, the $color1[0] house, the $color1[3] sky. The new president and his first lady. - Richard M. Nixon";
    ?>

    <br>
    <br>
    <br>

    <p><b>Övning 2</b></p>
    <?php
        $color2 = array('white', 'green', 'red');

        echo "<ul>";

        echo "<li> $color2[1] <li> $color2[2] <li> $color2[0]";
        echo "</ul>";
    ?>

    <br>
    <br>


    <p><b>Övning 3</b></p>
    <?php
        $Cc = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

        asort($Cc);

        foreach ($Cc as $C => $c) {
            echo "The capital of $C is $c. <br>";
        }
    ?>

    <br>
    <br>
    <br>

    <p><b>Övning 4</b></p>
    <?php
         $x = array(1, 2, 3, 4, 5);
        
        var_dump($x);
        
        unset($x[3]);
        
        $x = array_values($x);
        
        echo "<br>";
        
        var_dump($x);
    ?>

    <br>
    <br>
    <br>
    <br>

    <p><b>Övning 5</b></p>
    <?php
        $color5 = array(4 => 'white', 6 => 'green', 11=> 'red');

        echo"$color5[4]";
    ?>
</body>
</html>