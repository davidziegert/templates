<?php

class Character
{
    // Properties
    public $Name;
    public $Image;
    public $Strength;
    public $Agility;
    public $Life;
    public $Damage;

    // Methods
    function set_name()
    {
        $namelist = array("Ari", "Kai", "Ezra", "Amari", "Nova", "Milan", "Onyx", "Zion", "Layne", "Wren");
        $index = rand(0, 9);
        $this->Name = $namelist[$index];
    }

    function get_name()
    {
        return $this->Name;
    }

    function set_image()
    {
        $index = rand(1, 10);
        $this->Image = $index . ".jpg";
    }

    function get_image()
    {
        return $this->Image;
    }

    function set_strength()
    {
        $index = rand(5, 10);
        $this->Strength = $index;
    }

    function get_strength()
    {
        return $this->Strength;
    }

    function set_agility()
    {
        $index = rand(1, 7);
        $this->Agility = $index;
    }

    function get_agility()
    {
        return $this->Agility;
    }

    function set_life($Life)
    {
        $this->Life = $Life;
    }

    function get_life()
    {
        return $this->Life;
    }

    function set_damage()
    {
        $this->Damage = $this->Strength + $this->Agility / rand(1, 10);
    }

    function get_damage()
    {
        return $this->Damage;
    }
}

$char_1 = new Character();
$char_2 = new Character();

$char_1->set_name();
$char_1->set_image();
$char_1->set_strength();
$char_1->set_agility();
$char_1->set_life(rand(50, 100));
$char_2->set_name();
$char_2->set_image();
$char_2->set_strength();
$char_2->set_agility();
$char_2->set_life(rand(50, 100));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>rpg.tmp</title>

    <meta name="author" content="AUTHOR">
    <meta name="description" content="DESCRIPTION">
    <meta name="keywords" content="KEYWORD, KEYWORD">
    <meta name="robots" content="index, follow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Styles -->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="apple-touch-icon" href="./img/touch.png" />
</head>

<body>
    <div id="wrapper">
        <div id="char1">
            <div>
                <?php
                echo '<img src="./images/'. $char_1->get_image() .'"></img>';
                echo "<br>";
                echo "Name: " . $char_1->get_name();
                echo "<br>";
                echo "STR: " . $char_1->get_strength();
                echo "<br>";
                echo "AGI: " . $char_1->get_agility();
                echo "<br>";
                echo "HP: " . $char_1->get_life();
                ?>
            </div>
        </div>
        <div id="char2">
            <div>
                <?php
                echo '<img src="./images/'. $char_2->get_image() .'"></img>';
                echo "<br>";
                echo "Name: " . $char_2->get_name();
                echo "<br>";
                echo "STR: " . $char_2->get_strength();
                echo "<br>";
                echo "AGI: " . $char_2->get_agility();
                echo "<br>";
                echo "HP: " . $char_2->get_life();
                ?>
            </div>
        </div>
        <div id="battletag">
            <div>
                <?php
                echo "<h2>Fight!</h2>";

                $round = 1;

                while (($char_1->get_life() >= 0) || ($char_2->get_life() >= 0)) {
                    echo "<h3>Round: " . $round . "</h3>";

                    $char_1->set_damage();
                    echo $char_1->get_name() . " attacks! " . $char_2->get_name() . " get: " . round($char_1->get_damage(), 2) . " damage!";
                    $char_2->set_life($char_2->get_life() - $char_1->get_damage());

                    if ($char_2->get_life() <= 0) {
                        echo "<h2>" . $char_2->get_name() . " died!</h2>";
                        break;
                    }

                    echo "<br>";

                    $char_2->set_damage();
                    echo $char_2->get_name() . " attacks! " . $char_1->get_name() . " get: " . round($char_2->get_damage(), 2) . " damage!";
                    $char_1->set_life($char_1->get_life() - $char_1->get_damage());

                    if ($char_1->get_life() <= 0) {
                        echo "<h2>" . $char_1->get_name() . " died!</h2>";
                        break;
                    }

                    $round++;
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>