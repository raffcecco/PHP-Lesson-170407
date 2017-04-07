<?php

/* Base class for all superheros. */
class Superhero
{
    public $weight = 80;
    public $costumeColour = 'pink';
    public $image = 'Superhero.jpg';

    /* Displays a pic and other info about the hero, using the properties above. */
    public function showInfo() {
        echo "<hr/>";
        echo '<h2>'.get_class($this).'</h2>';
        echo "<img src = '/Superhero/images/$this->image' class='hero-pic' alt='A Superhero'/>";
        echo "<ul>";
        echo "<li>Weight: $this->weight Kg</li>";
        echo "<li>Costume Colour: $this->costumeColour</li>";
        echo "</ul>";
    }

    /* Punch action. */
    function punch() {
        echo 'Punch!<br/>';
    }

    /* Kick action. */
    function kick() {
        echo 'Kick!<br/>';
    }

    /* A superpower (or not in this case!) */
    function superPower() {
        echo 'Break wind!<br/>';
    }

}


/* Superman inherits everything from Superhero */
class Superman extends Superhero {
    public $weight = 100;
    public $costumeColour = 'Blue & Red';
    public $image = 'Superman.jpg';

    // ...but he has a much better superpower.
    function superPower()
    {
        parent::superPower();   // Put this line back in to also get Superhero's superpower too.
        echo 'Fly!</br>';
    }
}

/* Batman extends everthing from Superhero */
class Batman extends Superhero {

    public $weight = 90;
    public $costumeColour = 'black';
    public $image = 'Batman.jpg';

    function superPower()
    {
        // parent::superPower();   // Put this line back in to also get Superhero's superpower too.
        echo 'Martial Arts Attack!</br>';
    }

    // Batman has other skills too!
    function driveBatmobile () {
        echo 'Drive Batmobile!<br/>';
    }
}


/* Batwoman inherits everything from Superhero AND Batman! */
class Batwoman extends Batman {
    public $weight = 60;
    public $image = 'Batwoman.jpg';

    function superPower()
    {
        // parent::superPower();   // Put this line back in to also get Batman's superpower.
        echo 'Super Agility Dash!</br>';
    }
}