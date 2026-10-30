# Week 4: HTML Forms and PHP Form Processing

This lesson demonstrates how an HTML form collects user input and how PHP reads submitted values from the `$_POST` superglobal. The example in [`index.php`](index.php) is a registration form with a name, password, message, gender selection, and single- and multi-select district controls.

## 1. Form structure and submission

The form uses `method="post"` to send its controls to the same page. Each control has a `name`, which PHP uses as the key when retrieving its submitted value.

```html
<form action="" method="post">
    <!-- Form controls go here -->
</form>
```

The lecture slides introduce both `GET` and `POST`; this week's example practices `POST`.

## 2. Form controls in the example

The form includes:

- A text input for the full name.
- A password input.
- A `<textarea>` for a message.
- Radio buttons that share the `gender` name, so the user selects one option.
- A single-select district dropdown.
- A multi-select district control named `preferred_districts[]`, which submits its selected values as an array.
- Reset and submit buttons.

To choose more than one district, hold Ctrl while clicking options on Windows (or Command on macOS).

The `required` attribute asks the browser to check that these fields have a value before submission. This is browser-side validation, not a replacement for validating submitted data in PHP.

## 3. Retrieving submitted values

PHP makes POSTed form data available through the `$_POST` superglobal. The control's `name` is the array key:

```php
$_POST["fullname"];
$_POST["password"];
$_POST["message"];
$_POST["gender"];
$_POST["districts"];
```

The example displays the submitted values in its Registration Details panel and checks whether a gender value was submitted before showing the selected option. The form control names are case-sensitive and must match the keys used in PHP.

The multi-select control uses the `[]` suffix in its `name`, so PHP receives its selected values as an array. The example uses `foreach` to display each district and escapes it before output:

```php
$preferredDistricts = $_POST["preferred_districts"] ?? [];
if (is_array($preferredDistricts) && count($preferredDistricts) > 0) {
    foreach ($preferredDistricts as $district) {
        if (is_string($district)) {
            echo htmlspecialchars($district, ENT_QUOTES, "UTF-8");
        }
    }
}
```

## 4. Form processing workflow

1. The browser displays the form and its input controls.
2. The user enters values and submits the form.
3. The browser sends the values using the form's POST method.
4. PHP reads the values from `$_POST` and the page displays the results.

## 5. Running the example

Start Apache in XAMPP, place or keep the project under the server document root, and open the Week 4 `index.php` through the local server (for example, `http://localhost/php-course/Week4/`).

## Practice and safety note

This is a learning demonstration, not a production registration system. Do not enter a real password: the example displays the submitted password, and its result fields do not consistently escape submitted values before output. A real application must validate input on the server, escape output for its context, and never display or store a plaintext password.

## Screenshots

Suggested screenshot names, capture ranges, and descriptions are in [`screenshots/README.md`](screenshots/README.md).
