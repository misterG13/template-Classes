<?php

/**
 * Copyright
 * Author 'misterG13'
 * Date   March 2022
 */

/**     CREATE A CLASS      **/
/*****************************/
class NameHere
{
    /**     CLASS CONSTANTS     **/
    /*****************************/
    const NEVERCHANGE = "const";
    // no '$' is needed
    // const name is always ALL CAPS

    /**     PROPERTIES; define variables & 'visibility'     **/
    /*********************************************************/
    public $variableOne = "public";
    // PUBLIC VISIBILITY: (PROPERTIES & METHODS)
    // - can be accessed by object (outside class)
    // - "$object->variableOne = 'stuff';"

    protected $variableTwo = "protected";
    // PROTECTED VISIBILITY: (PROPERTIES & METHODS)
    // can NOT be accessed by object (outside class)
    // can be accessed by methods (inside class)
    // can be accessed by a class that 'extends' current class

    private $variableThree = "private";
    // PRIVATE VISIBILITY: (PROPERTIES & METHODS)
    // can ONLY be accessed from within the current class

    /**     METHODS; class' version of a function       **/
    /*****************************************************/
    public function publicFunc()
    {
        // 'public' visibility allows access 
        // from the $object created outside the class

        echo "inside 'publicFunc()'" . "<br>";

        echo $this->variableOne . "<br>"; // public
        echo $this->variableTwo . "<br>"; // protected
        echo $this->variableThree . "<br>"; // private
        // '$this' keyword can be used to refer to
        // the current object

        echo self::NEVERCHANGE;
        // 'self::' is used to access 'const's
        // 'self::' refers to the original class
        // '$this->' refers to the current object (created outside the class)
        // 'self::' and '$this->' work the same but access different variables
    }

    public function publicFunc2()
    {
        // using a function to interact
        // with another function inside the class
        //
        // *both functions will assume the most
        // restrictive visibility between them
        $this->publicFunc();
    }
}
// ------------------------ END OF CLASS ------------------------

$nameHere = new NameHere();
// create an object; a copy of the class is called
// 'instantiation'

var_dump($nameHere);

echo '<br><br>';

print_r($nameHere);

// PRINT ALL OBJECT VARIABLES: (debugging help)
// 'static' visibility inside the class:
//   - stops a variable being dumped/printed

echo '<br><br>';

$nameHere->publicFunc();
// accessing a method

echo '<br><br>';

$nameHere->publicFunc2();
// accessing a method that accesses a method
