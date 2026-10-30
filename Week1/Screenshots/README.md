# Week 1: PHP Programming Basics

This folder contains my Week 1 practice files and screenshots demonstrating basic PHP programming concepts covered in the course **Web Application Development - PHP & MySQL**.

# PHP Introduction Screenshots

This folder contains screenshots explaining the basic concepts of PHP in the course:

**Web Application Development - PHP & MySQL**

---

# 1. PHP Basic Syntax & Output

## Screenshot Name

`PHP_Output_Echo_Print.png`

## Description

This screenshot demonstrates how to generate output in PHP using `echo` and `print`. It also shows how PHP can be embedded within HTML.

Main concepts covered:
- Using `echo` to output text and HTML tags.
- Using `print` to output text.
- Understanding that parentheses `()` are optional for both `echo` and `print`.
- Demonstrating that `echo` can accept multiple arguments without parentheses.

### Code Example

```php
<?php
echo "Hello, World!";
print "Welcome to PHP";
echo '<h1>Hello, World HTML tag version</h1>';
?>

## Screenshot

![PHP Output Echo Print](screenshots/PHP_Output_Echo_Print.png)

---

# 2. Variables and Constants

## Screenshot Name

`PHP_Variables_Constants.png`

## Description

This screenshot demonstrates how to declare and use variables and constants in PHP.

Important points:
- Variables start with the `$` sign and are case-sensitive.
- Variables cannot start with a number or contain spaces.
- Constants are defined using the `define()` function and cannot be changed once set.

### Code Example

```php
<?php
// Variables
$name = "Mohamed Abdirahim";
$age = 23;
echo "Welcome, $name";
echo "Age: ", $age;

// Constants
define("SITE_OWNER", "Omar");
echo "Site Owner: " . SITE_OWNER;
?>
```

## Screenshot

![PHP Variables Constants](screenshots/PHP_Variables_Constants.png)

---

# 3. Control Structures

## Screenshot Name

`PHP_Control_Structures.png`

## Description

This screenshot demonstrates how to use conditional statements to control the flow of the PHP script.

### If/Else Statement
Used to execute different blocks of code based on conditions.

```php
<?php
if ($age > 25) {
    echo "You're eligible.";
} elseif ($age > 20) {
    echo "Be mature.";
} else {
    echo "You're too young.";
}
?>
```

### Switch Statement
Used as an alternative to complex if/else chains. 

```php
<?php
switch (true) {
    case ($age > 25):
        echo "You're eligible.";
        break;
    case ($age > 20):
        echo "Be mature.";
        break;
    default:
        echo "You're too young.";
}
?>
```

## Screenshot

![PHP Control Structures](screenshots/PHP_Control_Structures.png)