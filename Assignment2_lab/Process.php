
<?php
require_once "Function.php";

// Display output safely
function safeOutput($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}

// Accept POST requests 
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("Please submit the registration form.");
}

// Retrieve form data
$name = trim($_POST["employee_name"] ?? "");
$id = trim($_POST["employee_id"] ?? "");
$gender = $_POST["gender"] ?? "";
$department = $_POST["department"] ?? "";
$type = $_POST["employment_type"] ?? "";
$basicInput = $_POST["basic_salary"] ?? "";
$allowanceInput = $_POST["allowance"] ?? "";
$deductionInput = $_POST["deduction"] ?? "";
$yearsInput = $_POST["years_service"] ?? "";

$errors = "";

// Validate employee information
if (empty($name) || empty($id)) {
    $errors .= "Employee name and ID are required.<br>";
}

if ($gender != "Male" && $gender != "Female") {
    $errors .= "Please select a gender.<br>";
}

if ($department != "Human Resources" &&
    $department != "Finance" &&
    $department != "Information Technology" &&
    $department != "Administration") {
    $errors .= "Please select a valid department.<br>";
}

if ($type != "Full-Time" && $type != "Part-Time") {
    $errors .= "Please select employment type.<br>";
}

// Validate numeric inputs
if (!is_numeric($basicInput) || $basicInput <= 0) {
    $errors .= "Basic salary must be greater than zero.<br>";
}

if (!is_numeric($allowanceInput) || $allowanceInput < 0) {
    $errors .= "Allowance cannot be negative.<br>";
}

if (!is_numeric($deductionInput) || $deductionInput < 0) {
    $errors .= "Deduction cannot be negative.<br>";
}

if (!is_numeric($yearsInput) || $yearsInput < 0 ||
    (float)$yearsInput != (int)$yearsInput) {
    $errors .= "Years of service must be a whole number and cannot be negative.<br>";
}

// Convert values
$basic = is_numeric($basicInput) ? (float)$basicInput : 0;
$allowance = is_numeric($allowanceInput) ? (float)$allowanceInput : 0;
$deduction = is_numeric($deductionInput) ? (float)$deductionInput : 0;
$years = is_numeric($yearsInput) && $yearsInput >= 0
    ? (int)$yearsInput : 0;

// Calculate salary
$gross = calculateGrossSalary($basic, $allowance);
$bonus = calculateBonus($basic);
$service = calculateServiceBenefit($basic, $years);
$employment = calculateEmploymentAllowance($basic, $type);
$benefits = calculateTotalBenefits($bonus, $service, $employment);
$net = calculateNetSalary($gross, $benefits, $deduction);
$status = checkSalaryStatus($net);
$annual = calculateAnnualSalary($net);

// Validate deduction
if ($deduction > $gross + $benefits) {
    $errors .= "Deduction cannot exceed gross salary plus benefits.<br>";
}

// Retrieve uploaded document
$fileName = "";
$fileType = "";
$fileSize = 0;
$temp = "";
$storedName = "";
$uploadStatus = "Not uploaded";

if (!isset($_FILES["employee_document"]) ||
    $_FILES["employee_document"]["error"] != UPLOAD_ERR_OK) {
    $errors .= "Please select an employee document.<br>";
} else {
    $fileName = $_FILES($_FILES["employee_document"]["name"]);
    $fileSize = $_FILES["employee_document"]["size"];
    $temp = $_FILES["employee_document"]["tmp_name"];
    $fileType = $_FILES["employee_document"]["type"];

    if ($fileSize > 2 * 1024 * 1024) {
        $errors .= "Document must not exceed 2 MB.<br>";
    } elseif ($fileSize <= 0) {
        $errors .= "Document is empty.<br>";
    }
}

// Upload document
 
if (empty($errors)) {
    $storedName = $fileName;
    $destination = $folder . $storedName;

    if (file_exists($destination)) {
        $errors .= "This filename already exists. Rename the document.<br>";
    } elseif (move_uploaded_file($temp, $destination)) {
        $uploadStatus = "Uploaded successfully";
    } else {
        $errors .= "Upload failed. Check the uploads folder.<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Registration Results</title>
</head>
<body>

<?php if (!empty($errors)) { ?>

    <h1>Please Correct These Errors</h1>
    <p><?php echo $errors; ?></p>

<?php } else { ?>

    <h1>Employee Registration Results</h1>

    <h2>Employee Information</h2>

    <table border="1">
        <tr><th>Employee Name</th><td><?php echo safeOutput($name); ?></td></tr>
        <tr><th>Employee ID</th><td><?php echo safeOutput($id); ?></td></tr>
        <tr><th>Gender</th><td><?php echo safeOutput($gender); ?></td></tr>
        <tr><th>Department</th><td><?php echo safeOutput($department); ?></td></tr>
        <tr><th>Employment Type</th><td><?php echo safeOutput($type); ?></td></tr>
        <tr><th>Years of Service</th><td><?php echo $years; ?></td></tr>
    </table>

    <h2>Salary Details</h2>

    <table border="1">
        <tr><th>Basic Salary</th><td>$<?php echo number_format($basic, 2); ?></td></tr>
        <tr><th>Allowance</th><td>$<?php echo number_format($allowance, 2); ?></td></tr>
        <tr><th>Gross Salary</th><td>$<?php echo number_format($gross, 2); ?></td></tr>
        <tr><th>Bonus</th><td>$<?php echo number_format($bonus, 2); ?></td></tr>
        <tr><th>Service Benefit</th><td>$<?php echo number_format($service, 2); ?></td></tr>
        <tr><th>Employment Allowance</th><td>$<?php echo number_format($employment, 2); ?></td></tr>
        <tr><th>Total Benefits</th><td>$<?php echo number_format($benefits, 2); ?></td></tr>
        <tr><th>Deduction</th><td>$<?php echo number_format($deduction, 2); ?></td></tr>
        <tr><th>Net Salary</th><td>$<?php echo number_format($net, 2); ?></td></tr>
        <tr><th>Salary Status</th><td><?php echo safeOutput($status); ?></td></tr>
        <tr><th>Annual Salary</th><td>$<?php echo number_format($annual, 2); ?></td></tr>
    </table>

    <h2>Uploaded Document</h2>

    <table border="1">
        <tr><th>Document Name</th><td><?php echo safeOutput($storedName); ?></td></tr>
        <tr><th>Document Type</th><td><?php echo safeOutput($fileType); ?></td></tr>
        <tr><th>Document Size</th><td><?php echo number_format($fileSize / 1024, 2); ?> KB</td></tr>
        <tr><th>Upload Status</th><td><?php echo safeOutput($uploadStatus); ?></td></tr>
    </table>

<?php } ?>

<p><a href="index.html">Back to Registration Form</a></p>

</body>
</html>
