<?php // <- PHP scripts start with this opening tag

/* 
PHP Write-Up
Date: 06/29/21
Author: 0x1CA3

This writeup will cover most of the PHP language and everything that you need to start coding in PHP.
*/

// You can make comments like this, with a double-slash

/* You can make multi-line comments 
   like this to make your life easier
*/ 

// NOTE: Statements in PHP must end with a semi-colon -> ;

// Print text to the screen
echo "Hello im 0x1CA3";

// Getting the length of string
echo strlen("Hello im 0x1CA3");

// Reversing a string
echo strrev("Hello im 0x1CA3");

// Addition/Subtraction/Multiplication/Division
echo 1 + 1;
echo 2 - 1;
echo 2 * 2;
echo 4 / 2;

// Creating variables
/* 
So basically you can create variables to store different
types of data inside of them like strings and numbers and other things
*/
$create_variable = "Hello im 0x1CA3";
$create_variable_num = 5;

// Creating Functions
/*
Functions are basically used to store code for later execution/use
In this example we'll be creating a function and storing some code in it,
and then calling it so that the code in the function could be executed
*/
function php_function_example() {
    echo "Hello im 0x1CA3";
}
// Calling Functions
/*
In this example you can see that when we call the
function that we created above, it will executed the code
stored in the function and we will have the text "Hello im 0x1CA3"
printed to our screen
*/
php_function_example();

// Taking user input
/*
By creating a variable and using readline(); you
can take input from the user and do whatever you would like
with it afterwards
*/
$question = readline("Do you like PHP? > ");
echo "This is your answer below: ";
echo ($question);

// If statements & Examples
/*
If statements are basically used to check certain conditions
and execute code if those certain conditions are met
*/
$var_one = 20;
$var_two = 15;
if ($var_one > $var_two) {
    echo "Yay!";
}
else {
    echo "Boo!";
}

$wallet_one = 35;
$wallet_two = 60;
if ($wallet_two != $wallet_one) {
    echo "Yay!";
}
else {
    echo "Boo!";
}

$question_pizza = readline("Do you like Pizza? > ");
if ($question_pizza == "yes") {
    echo "Nice!";
}
else {
    echo "You have issues!";
}

// Switch statements
$food = "sushi";
switch ($food) {
    case "pizza":
        echo "Food is pizza!";
        break;
    case "sushi":
        echo "Food is sushi!";
        break;
    default:
        echo "Error!";
        break;
}

// While loops
/*
So in this example below, we create a variable
and assign the number '20' to it, then we do a while loop that
checks if the variable is equal to 20, and if that condition is met,
it will execute "You got cash!" continuously
*/
$cash = 20;
while ($cash = 20) {
    echo "You got cash!";
}

// Do-While loops
$do_num = 1;
do {
    echo $do_num;
    $do_num++;
} while ($do_num < 20);

// For loops
/*
In the example below this piece of code will create a loop
that loops through the numbers 1-19
*/
for ($loop_number = 0; $loop_number < 20; $loop_number++) {
    echo $loop_number;
}

// Arrays
$genders = array("Male", "Female");
echo count($genders); // count(); Outputs the the number of items in an array
echo $genders[1]; // Outputs "Female". To print "Male" change $genders[1] -> $genders[0]

// Associative arrays
$food_table = array("Wings"=>"Yummy", "Peas"=>"Gross");
echo "Wings are " . $food_table["Wings"] . ""; // Outputs "Wings are Yummy"

// Extra Stuff
/* 
Beyond this point there will be extra things in the
language that I will cover that you can use to improve your skills
*/
echo date("l"); // Outputs the current day which at the time of this writing is Tuesday

system("whoami"); // Lets you execute a system command. Example: system("echo Hi!");

setcookie("Food", "Pizza", time() + (45000 * 30), "/"); // Creates a cookie with called "Food"

// The following code below will show you have to create a session variable
session_start();
$_SESSION["food"] = "pizza";
echo $_SESSION["food"]; // This code prints the value of "food" which is our session variable
// PHP scripts end with this closing tag
?>

<?php 
include 'your_file_here.php'; // This code includes the specified PHP file

/* 
Congrats! You made it to the end, hopefully you learned enough PHP to be able to start building your own PHP scripts 
of easy - medium complexity and have fun with it!
*/
?>