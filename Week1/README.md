# PHP Practice Concepts - Week 1

This folder contains my PHP practice exercises from Week 1.

Each section includes:
- Screenshot of the code
- Screenshot name
- Description
- Code explanation
- What I learned

---

# 1. Display Messages in PHP

## Screenshot

![Display Message](Screen_Shot/Display_Message.png)

## Screenshot Name

`Display_Message.png`

## Description

This section demonstrates how to display text in PHP using `echo` and `print`.

## Code Explanation

```php
echo "Welcome to PHP <br>";
print "Welcome to php Using Print display";
```

### `echo`

`echo` is used to output text or other values to the browser.

```php
echo "Welcome to PHP";
```

### `print`

`print` is another PHP statement used to display text.

```php
print "Welcome to php Using Print display";
```

### `<br>`

The `<br>` HTML tag creates a new line in the browser.

## What I Learned

I learned two basic ways to display messages in PHP: `echo` and `print`.

---

# 2. Comments in PHP

## Screenshot

![Comments](Screen_Shot/Comments.png)

## Screenshot Name

`Comments.png`

## Description

This section demonstrates how comments are written in PHP.

Comments are notes written inside the code for the developer. PHP does not execute them.

## Single-Line Comment

```php
// This is a single line comment
```

A single-line comment starts with `//`.

Everything after `//` on that line is ignored by PHP.

## Multi-Line Comment

```php
/*
This is a section of multiline comments
which will not be interpreted
*/
```

Multi-line comments start with `/*` and end with `*/`.

## What I Learned

I learned how to use single-line and multi-line comments to explain and organize PHP code.

---

# 3. Variables in PHP

## Screenshot

![Variables](Screen_Shot/Variables.png)

## Screenshot Name

`Variables.png`

## Description

This section demonstrates how to create and use variables in PHP.

## Code Explanation

```php
$name = "Abdihakim <br>";
echo "My name is $name";
```

### `$name`

The `$name` variable stores a text value.

```php
$name = "Abdihakim";
```

PHP variables always start with the `$` symbol.

### `echo`

The `echo` statement displays the variable and text in the browser.

```php
echo "My name is $name";
```

## What I Learned

I learned how to create a variable, store a value inside it, and display that value using `echo`.

---

# 4. Constants in PHP

## Screenshot

![Constants](Screen_Shot/Constand.png)

## Screenshot Name

`Constand.png`

## Description

This section demonstrates how to create and use a constant in PHP.

## Code Explanation

```php
define("NAME", "Muuse");

echo NAME;
```

### `define()`

The `define()` function creates a constant.

```php
define("NAME", "Muuse");
```

Here:

- `NAME` is the constant name.
- `Muuse` is the constant value.

The constant is then displayed without using `$`:

```php
echo NAME;
```

## What I Learned

I learned that constants are created using `define()` and are accessed without the `$` symbol.

---

# 5. Operators in PHP

## Screenshot

![Operators](Screen_Shot/Operators.png)

## Screenshot Name

`Operators.png`

## Description

This section demonstrates arithmetic operators in PHP.

## Code Explanation

```php
$a = 10;
$b = 3;

echo $a + $b;
echo "<br>";

echo $a - $b;
echo "<br>";

echo $a * $b;
echo "<br>";

echo $a / $b;
echo "<br>";

echo $a % $b;
```

### Operators Used

| Operator | Meaning |
|---|---|
| `+` | Addition |
| `-` | Subtraction |
| `*` | Multiplication |
| `/` | Division |
| `%` | Remainder / Modulus |

The `<br>` tag is used to display each result on a separate line.

## What I Learned

I learned how to perform basic arithmetic calculations in PHP using operators.

---

# 6. `if` Statement

## Screenshot

![If Statement](Screen_Shot/If.png)

## Screenshot Name

`If.png`

## Description

This section demonstrates the PHP `if` control structure.

## Code Explanation

```php
$age = 20;

if ($age >= 18) {
    echo "You are an adult";
}
```

The variable `$age` stores the value `20`.

The `if` statement checks:

```php
$age >= 18
```

If the condition is true, PHP displays:

```text
You are an adult
```

## What I Learned

I learned how to use an `if` statement to execute code when a condition is true.

---

# 7. `if...else` Statement

## Screenshot

![If Else](Screen_Shot/If_Else.png)

## Screenshot Name

`If_Else.png`

## Description

This section demonstrates how `if...else` handles two possible conditions.

## Code Explanation

```php
$age = 20;

if ($age >= 18) {
    echo "You are an adult";
} else {
    echo "You are child";
}
```

If the condition is true, the first block runs.

If the condition is false, the `else` block runs.

## What I Learned

I learned how to provide an alternative result when an `if` condition is false.

---

# 8. `if...elseif...else` Statement

## Screenshot

![If Elseif Else](Screen_Shot/If_Elseif_Else.png)

## Screenshot Name

`If_Elseif_Else.png`

## Description

This section demonstrates how to check multiple conditions using `if`, `elseif`, and `else`.

## Code Explanation

```php
$score = 80;

if ($score >= 90) {
    echo "Grade A";
} elseif ($score >= 70) {
    echo "Grade B";
} elseif ($score >= 50) {
    echo "Grade C";
} else {
    echo "Fail";
}
```

PHP checks the conditions from top to bottom.

For a score of `80`:

```text
80 >= 90  → false
80 >= 70  → true
```

Therefore, the result is:

```text
Grade B
```

## What I Learned

I learned how to check several conditions and return a different result depending on which condition is true.

---

# 9. The `switch` Statement

## Screenshot

![Switch Statement](Screen_Shot/The_Switch_Statement.png)

## Screenshot Name

`The_Switch_Statement.png`

## Description

This section demonstrates the PHP `switch` statement.

The `switch` statement is useful when one value needs to be compared with several possible values.

## Code Explanation

```php
$day = "Monday";

switch ($day) {

    case "Monday":
        echo "Today is Monday";
        break;

    case "Tuesday":
        echo "Today is Tuesday";
        break;

    case "Wednesday":
        echo "Today is Wednesday";
        break;

    default:
        echo "Unknown day";
}
```

### `switch`

The `switch` checks the value stored in `$day`.

### `case`

Each `case` represents a possible value.

```php
case "Monday":
```

If `$day` is `"Monday"`, that case runs.

### `break`

`break` stops the switch after the matching case has executed.

### `default`

`default` runs when none of the cases match.

## What I Learned

I learned how to use `switch`, `case`, `break`, and `default` to handle multiple possible values.

---

# 10. Control Structures Practice

## Screenshot

![Control Structures](Screen_Shot/If_Elseif_Else.png)

## Description

The control structure examples above demonstrate how PHP can make decisions based on conditions.

The main structures practiced here are:

```text
if
if...else
if...elseif...else
switch
```

These structures control which part of the PHP program is executed.

## What I Learned

I learned how control structures allow a PHP program to make decisions.

---

# Technologies Used

- PHP
- HTML
- XAMPP / Apache
- Visual Studio Code
- GitHub

---

# Week 1 Summary

During this practice, I worked with:

- Displaying messages with `echo` and `print`
- PHP comments
- Variables
- Constants
- Operators
- `if`
- `if...else`
- `if...elseif...else`
- `switch`
