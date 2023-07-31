<?php
/** PHP Datat types */
/*
- String 
- Integer -whole numbers
- Float - decimal 
- Boolean true or false
- Array - hold more that one value
- Object - class
- Null - Empty Variable
- Resource - Special variable that holds a Resource


Rules: 
- must start with $
- Are case sensitive
- must start with letter or underscore
- case sensitive
- each statement must end with a semicolon*/
$firstName = "Ericsson";
$lastName = "Lab"; //string 
$age = 10; //integer
$weight = 44.4; // float
$isOpen = true; // boolean
$object =[
    'name'=>'Ericcson',
    ''
];

//$aboutMe ="$firstName-$lastName  @$age years old.";
$aboutMe =$firstName."-".$lastName;
//echo($aboutMe."<br>");
//echo("<h1> Hello ".$firstName.", </h1>");
//var_dump($firstName);
//var_dump($isOpen);


/*
is_bool()
is_integer()
is_string()
is_null()
*/
/*
if(is_bool(true)){
    echo ("true");
}
else{
    echo("gfalse");
}
echo(is_bool(10));

*/




// $name = "Huge";
// echo($name);
// var_dump($name); // check out type
// concatenation inline and use of (.)
// mathematical operations
// +, / ,%,*

// contants 
// define(key, value)
?>