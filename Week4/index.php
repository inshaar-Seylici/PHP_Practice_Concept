<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            min-height: 100vh;
            display: grid;
            place-items: center;
            margin: 0;
            padding: 24px;
            box-sizing: border-box;
            background: #f3f4f6;
            font-family: Arial, sans-serif;
            color: #1f2937;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 8px;
            width: 100%;
            padding: 28px;
            box-sizing: border-box;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
        }

        .page-container {
            width: min(100%, 420px);
        }

        .results {
            margin-top: 20px;
            padding: 24px 28px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            box-sizing: border-box;
        }

        .results h2 {
            margin: 0 0 16px;
            font-size: 20px;
        }

        .result-item {
            margin-top: 12px;
        }

        .result-label {
            display: block;
            margin-bottom: 4px;
            color: #64748b;
            font-size: 13px;
            font-weight: 600;
        }

        .result-value {
            margin: 0;
            overflow-wrap: anywhere;
            white-space: pre-wrap;
        }

        label {
            margin-top: 8px;
            font-size: 14px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            box-sizing: border-box;
            font-size: 16px;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
        }

        input:focus {
            border-color: #c3cbd5;
            outline: 3px solid rgb(37 99 235 / 18%);
        }

        .gender-options {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .gender-option {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 0;
            cursor: pointer;
        }

        input[type="radio"] {
            width: auto;
            margin: 0;
            padding: 0;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 18px;
        }

        button {
            flex: 1;
            padding: 10px 12px;
            border: 0;
            border-radius: 4px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
        }

        button[type="reset"] {
            background: #e5e7eb;
            color: #1f2937;
        }

        button[type="submit"] {
            background: #e5e7eb;
            color: #1f2937;
        }

        button:hover {
            filter: brightness(0.95);
        }
    </style>
</head>

<body>

    <main class="page-container">
        <form action="" method="post" class="form">
            <label for="fullname">Enter Full Name</label>
            <input type="text" name="fullname" id="fullname" class="input" placeholder="Enter your full name" autocomplete="name" required>
            <label for="password">Enter Password</label>
            <input type="password" name="password" id="password" class="input" placeholder="Enter your password" autocomplete="new-password" required>
            <label for="message">Enter Message</label>
            <textarea name="message" id="message" class="input" cols="30" rows="5" placeholder="Enter your message" required></textarea>
            <label>Gender</label>
            <div class="gender-options">
                <label class="gender-option" for="male">
                    <input type="radio" name="gender" id="male" value="male" required>
                    Male
                </label>
                <label class="gender-option" for="female">
                    <input type="radio" name="gender" id="female" value="female" required>
                    Female
                </label>
                <?php
                if (!empty($_POST["gender"]))
                    echo "<p style='color: red; font-size: 13px; margin: 0;'>Selected Gender: " . htmlspecialchars($_POST["gender"]) . "</p>";
                ?>
            </div>
            <label for="Districtis">Districtis</label>
            <select name="districts" value="districts">
                <option value="hodan">Hodan</option>
                <option value="karan">Karan</option>
                <option value="kaxda">Kaxda</option>
                <option value="wadajir">Wadajir</option>
                <option value="madiino">Madiino</option>
            </select>
            <label for="preferred-districts">Preferred Districts (select one or more)</label>
            <select name="preferred_districts[]" id="preferred-districts" multiple size="5">
                <option value="hodan">Hodan</option>
                <option value="karan">Karan</option>
                <option value="kaxda">Kaxda</option>
                <option value="wadajir">Wadajir</option>
                <option value="madiino">Madiino</option>
            </select>
            <div class="form-actions">
                <button type="reset" name="reset" value="reset">Reset Form</button>
                <button type="submit" name="register" value="register">Register</button>
            </div>
        </form>
        <section class="results" aria-labelledby="results-heading">
            <h2 id="results-heading">Registration Details</h2>
            <div class="result-item">
                <span class="result-label">Full Name</span>
                <p class="result-value"><?php echo $_POST["fullname"] ?? ""; ?></p>
            </div>
            <div class="result-item">
                <span class="result-label">Password</span>
                <p class="result-value"><?php echo $_POST["password"] ?? ""; ?></p>
            </div>
            <div class="result-item">
                <span class="result-label">Message</span>
                <p class="result-value"><?php echo $_POST["message"] ?? ""; ?></p>
            </div>
            <div class="result-item">
                <span class="result-label">Gender</span>
                <p class="result-value"><?php echo $_POST["gender"] ?? ""; ?></p>
            </div>
            <div class="result-item">
                <span class="result-label">District</span>
                <?php
                if (empty($_POST["districts"])) {
                    echo "select one option";
                }
                ?>
                <p class="result-value">
                    <?php
                    echo $_POST["districts"] ?? ""
                    ?>
                </p>
            </div>
            <div class="result-item">
                <span class="result-label">Preferred Districts</span>
                <?php
                $preferredDistricts = $_POST["preferred_districts"] ?? [];
                if (is_array($preferredDistricts) && count($preferredDistricts) > 0) {
                    foreach ($preferredDistricts as $district) {
                        if (is_string($district)) {
                            echo "<p class=\"result-value\">" . htmlspecialchars($district, ENT_QUOTES, "UTF-8") . "</p>";
                        }
                    }
                } else {
                    echo "<p class=\"result-value\">No districts selected</p>";
                }
                ?>
            </div>
        </section>
    </main>
</body>

</html>