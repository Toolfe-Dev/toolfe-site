<?php
// Start the session
include '../php/db.php';
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Retrieve form values
    $companyName = $_POST['company_name'];
    $industry = $_POST['Industry'];
    $processName  = $_POST['prcss_name'];
    $Currency  = $_POST['Currency'];
    $employeeCount = $_POST['employe_count'];
    $averageProcessingTime  = $_POST['time_per_unit'];
    $averageProcessingTimehrs  = $_POST['time_per_unit']/60;
    $annualVolume  = $_POST['annual_volume'];
    $percentageAutomation  = $_POST['per_pro_auto'];
    $averageFTESalary  = $_POST['fte_salary'];
    $additionalCostForFTE  = $_POST['add_cost'];

    // Estimated Automation Cost Assumption

    $cur_manual_process = ((((($averageProcessingTime * $percentageAutomation )/100)*$annualVolume)/60) * $percentageAutomation) /100 ;
    $aft_manual_process = ((((($averageProcessingTime * (100-$percentageAutomation) )/100)*$annualVolume)/60) * $percentageAutomation) /100 ;

    $saved_hrs = (($cur_manual_process -  $aft_manual_process)*15)/100;

    if ($Currency == 'INR') {
        $hrsRateToolfe = 1000;
      }elseif($Currency == 'EUR'){
        $hrsRateToolfe = 10.79;
      }else {
        $hrsRateToolfe = 11.91;
      }

    $dev_cost = $saved_hrs * $hrsRateToolfe;
    $main_cost = ($dev_cost*15)/100;

    
    $estimatedAutomationCost  = $dev_cost;
    $annualMaintenanceCost  = $main_cost;



    // Calculate additional values
    $fteHoursPerYear = 2080; 
    $fteCostPerUnit = (($averageFTESalary + ($averageFTESalary * ($additionalCostForFTE/100))) / $fteHoursPerYear )* $averageProcessingTimehrs;
    $currentAnnualCost = $fteCostPerUnit * $annualVolume;
    $estimatedAnnualCostAfterAutomation = ($currentAnnualCost * (1 - ($percentageAutomation/100))) + $annualMaintenanceCost;
    $potentialCostSavings = $currentAnnualCost - $estimatedAnnualCostAfterAutomation;
    $roi = $potentialCostSavings / $estimatedAutomationCost;
    $fteSavings = $annualVolume * $averageProcessingTimehrs * (($percentageAutomation/100) / $fteHoursPerYear);
    $fteCostSavings = $fteSavings * ($averageFTESalary + ($averageFTESalary * ($additionalCostForFTE/100)));
    $percentageReductionInCost = ($potentialCostSavings / $currentAnnualCost) * 100;
    $paybackPeriodDays = ($estimatedAutomationCost / $potentialCostSavings) * 365;
    $hoursSaved = $annualVolume * $averageProcessingTimehrs * ($percentageAutomation/100);
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
    $_SESSION['Currency'] = $Currency;
    $_SESSION['dev_cost'] = $dev_cost;
    $_SESSION['main_cost'] = $main_cost;


    // Insert data into the database
    $sql = "INSERT INTO rpa_calculator_results (company_name, industry, process_name, employee_count, average_processing_time, annual_volume, percentage_automation, estimated_automation_cost, annual_maintenance_cost, average_fte_salary, additional_cost_for_fte, current_annual_cost, estimated_annual_cost_after_automation, potential_cost_savings, fte_savings, fte_cost_savings, hours_saved, days_saved, roi, percentage_reduction_in_cost, payback_period_days)
    VALUES ('$companyName', '$industry', '$processName', $employeeCount, $averageProcessingTimehrs, $annualVolume, $percentageAutomation, $estimatedAutomationCost, $annualMaintenanceCost, $averageFTESalary, $additionalCostForFTE, $currentAnnualCost, $estimatedAnnualCostAfterAutomation, $potentialCostSavings, $fteSavings, $fteCostSavings, $hoursSaved, $daysSaved, $roi, $percentageReductionInCost, $paybackPeriodDays)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();

    // Redirect to the result page
    header("Location: audit-result.php");
    exit;
}
?>
