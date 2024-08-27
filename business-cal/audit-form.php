<?php
// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form values
    $companyName = $_POST['company_name'];
    $industry = $_POST['Industry'];
    $processName  = $_POST['prcss_name'];
    $employeeCount = $_POST['employe_count'];

    $averageProcessingTime  = $_POST['time_per_unit'];
    $annualVolume  = $_POST['annual_volume'];
    $percentageAutomation  = $_POST['per_pro_auto'];
    $estimatedAutomationCost  = $_POST['auto_cost'];
    $annualMaintenanceCost  = $_POST['maint_cost'];
    $averageFTESalary  = $_POST['fte_salary'];
    $additionalCostForFTE  = $_POST['add_cost'];

    // echo "---------------------------------------------------------------- -----------------------" . "</br>";
    // echo "companyName ----------". $companyName . "</br>";
    // echo "industry ----------". $industry . "</br>";
    // echo "processName ----------". $processName . "</br>";
    // echo "employeeCount ----------". $employeeCount . "</br>";
    // echo "averageProcessingTime ----------". $averageProcessingTime . "</br>";
    // echo "annualVolume ----------". $annualVolume . "</br>";
    // echo "percentageAutomation ----------". $percentageAutomation . "</br>";
    // echo "estimatedAutomationCost ----------". $estimatedAutomationCost . "</br>";
    // echo "annualMaintenanceCost ----------". $annualMaintenanceCost . "</br>";
    // echo "averageFTESalary ----------". $averageFTESalary . "</br>";
    // echo "additionalCostForFTE ----------". $additionalCostForFTE . "</br>";
    // echo "--------------------------------------------------------------- -----------------------" . "</br>";

    $fteHoursPerYear = 2080; 
    $fteCostPerUnit = ((500000 + (500000 * 0.3)) / $fteHoursPerYear )* $averageProcessingTime;
    $currentAnnualCost = $fteCostPerUnit * $annualVolume;
    $estimatedAnnualCostAfterAutomation = ($currentAnnualCost * (1 - $percentageAutomation)) + $annualMaintenanceCost;
    $potentialCostSavings = $currentAnnualCost - $estimatedAnnualCostAfterAutomation;
    $roi = $potentialCostSavings / $estimatedAutomationCost;
    $fteSavings = $annualVolume * $averageProcessingTime * ($percentageAutomation / $fteHoursPerYear);
    $fteCostSavings = $fteSavings * ($averageFTESalary + ($averageFTESalary * $additionalCostForFTE));
    $percentageReductionInCost = ($potentialCostSavings / $currentAnnualCost) * 100;
    $paybackPeriodDays = ($estimatedAutomationCost / $potentialCostSavings) * 365;
    $hoursSaved = $annualVolume * $averageProcessingTime * $percentageAutomation;
    $daysSaved = $hoursSaved / 24;

    // Store results in session variables
    $_SESSION['companyName'] = $companyName;
    $_SESSION['processName'] = $processName;
    $_SESSION['currentAnnualCost'] = $currentAnnualCost;
    $_SESSION['estimatedAnnualCostAfterAutomation'] = $estimatedAnnualCostAfterAutomation;
    $_SESSION['potentialCostSavings'] = $potentialCostSavings;
    $_SESSION['fteSavings'] = $fteSavings;
    $_SESSION['fteCostSavings'] = $fteCostSavings;
    $_SESSION['hoursSaved'] = $hoursSaved;
    $_SESSION['daysSaved'] = $daysSaved;
    $_SESSION['roi'] = $roi;
    $_SESSION['percentageReductionInCost'] = $percentageReductionInCost;
    $_SESSION['paybackPeriodDays'] = $paybackPeriodDays;

    // echo "companyName -----------------------" . $companyName . "</br>";
    // echo "processName -----------------------" . $processName . "</br>";
    // echo "FTE Cost per Unit -----------------------" . $fteCostPerUnit . "</br>";
    // echo "currentAnnualCost -----------------------" . $currentAnnualCost . "</br>";
    // echo "estimatedAnnualCostAfterAutomation -----------------------" . $estimatedAnnualCostAfterAutomation . "</br>";
    // echo "potentialCostSavings -----------------------" . $potentialCostSavings . "</br>";
    // echo "fteSavings -----------------------" . $fteSavings . "</br>";
    // echo "fteCostSavings -----------------------" . $fteCostSavings . "</br>";
    // echo "hoursSaved -----------------------" . $hoursSaved . "</br>";
    // echo "daysSaved -----------------------" . $daysSaved . "</br>";
    // echo "roi -----------------------" . $roi . "</br>";
    // echo "percentageReductionInCost -----------------------" . $percentageReductionInCost . "</br>";
    // echo "paybackPeriodDays -----------------------" . $companyName . "</br>";

    // Redirect to the previous page
    header("Location: audit-result.php"); // Replace 'previous_page.php' with your actual page
    exit;
}
?>
