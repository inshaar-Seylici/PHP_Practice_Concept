# Week 2: Loops and Arrays

These notes summarize the examples in [`index.php`](index.php), including the loops and array patterns shown in the practice screenshots under [`screenshots/`](screenshots/).

## 1. Loops

Loops repeat code. Make sure the loop condition will eventually become false, or the program may never stop.

### `while`

Checks its condition before each iteration. It can run zero times.

```php
$i = 1;
while ($i <= 5) {
    echo $i;
    $i++;
}
```

### `do...while`

Runs the body first and checks the condition afterward, so it always runs at least once.

```php
$n = 5;
do {
    echo $n;
    $n--;
} while ($n > 0);
```

The lesson uses this pattern to calculate a factorial: start `$result` at `1`, multiply by each descending integer, and stop after reaching zero.

### `for`

Useful when the loop has a clear starting value, stopping condition, and update.

```php
for ($i = 1; $i <= 5; $i++) {
    echo $i;
}
```

### Nested loops and loop control

A nested loop runs the inner loop once for every iteration of the outer loop. The Week 2 example uses nested loops to produce multiplication results.

- `break` exits the current loop.
- `continue` skips the rest of the current iteration and moves to the next one.

## 2. Numeric (indexed) arrays

An indexed array stores values under numeric indexes, beginning at `0`.

```php
$names = ["Mohamed", "Omar", "Ali"];
echo $names[0]; // Mohamed

foreach ($names as $name) {
    echo $name;
}
```

Use `print_r()` or `var_dump()` to inspect an array while practicing. They are diagnostic tools, not substitutes for formatting user-facing output.

## 3. Associative arrays

An associative array maps named keys to values.

```php
$student = ["name" => "Ali", "age" => 20, "city" => "Mogadishu"];
$student["phone"] = "0612345678"; // Add a key
$student["age"] = 21;             // Update a value
unset($student["city"]);          // Remove a key

foreach ($student as $key => $value) {
    echo "$key: $value";
}
```

## 4. Multidimensional arrays

An array can contain other arrays. Access nested values one index/key at a time.

```php
$developer = [
    "name" => "Mohamed",
    "skills" => ["PHP", "HTML", "CSS"]
];

echo $developer["skills"][0]; // PHP
```

An array of records can be traversed with `foreach`:

```php
$students = [
    ["name" => "Ali", "grade" => 90],
    ["name" => "Omar", "grade" => 85]
];

foreach ($students as $student) {
    echo $student["name"] . ": " . $student["grade"];
}
```

## 5. Useful array checks and inspection

- `count($array)` returns the number of elements.
- `array_key_exists($key, $array)` checks whether a key exists.
- `isset($array[$key])` checks that a key exists and its value is not `null`.
- `in_array($value, $array)` checks whether a value is present.
- `array_keys($array)` returns the keys; `array_values($array)` returns the values.

For value checks, `in_array($value, $array, true)` enables strict type comparison.
