
<?php

//  Calculate Gross Salary
function calculateGrossSalary($basicSalary, $allowance) {
    return $basicSalary + $allowance;
}


//       Calculate Bonus
function calculateBonus($basicSalary) {

    if ($basicSalary >= 1000) {
        return $basicSalary * 0.10;
    } elseif ($basicSalary >= 500) {
        return $basicSalary * 0.05;
    } else {
        return 0;
    }
}


//  Calculate Service Benefit
function calculateServiceBenefit($basicSalary, $yearsOfService) {

    if ($yearsOfService >= 5) {
        return $basicSalary * 0.08;
    } elseif ($yearsOfService >= 3) {
        return $basicSalary * 0.05;
    } else {
        return 0;
    }
}


//  Employment Allowance
function calculateEmploymentAllowance($basicSalary, $employmentType) {

    if ($employmentType == "Full-Time") {
        return $basicSalary * 0.06;
    } elseif ($employmentType == "Part-Time") {
        return $basicSalary * 0.03;
    } else {
        return 0;
    }
}


//    Total Benefits
function calculateTotalBenefits(
    $bonus,
    $serviceBenefit,
    $employmentAllowance
) {
    return $bonus + $serviceBenefit + $employmentAllowance;
}

// Calculate Net Salary
function calculateNetSalary($grossSalary, $totalBenefits, $deduction) {

    return $grossSalary + $totalBenefits - $deduction;
}


//  Check Salary Status
function checkSalaryStatus($netSalary) {

    if ($netSalary >= 1500) {
        return "High Salary";
    } elseif ($netSalary >= 800) {
        return "Medium Salary";
    } else {
        return "Low Salary";
    }
}


// Annual Salary,  Default argument
function calculateAnnualSalary($netSalary, $months = 12) {

    return $netSalary * $months;
}

?>
