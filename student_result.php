<?php
function calculateResult($marks) {
    // Validate marks
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.\n";
            return;
        }
    }

    // Check for fail condition
    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "Student has failed.\n";
            return;
        }
    }

    // Calculate total and average marks
    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    // Determine grade using switch-case
    switch (true) {
        case ($averageMarks >= 80):
            $grade = "A+";
            break;
        case ($averageMarks >= 70):
            $grade = "A";
            break;
        case ($averageMarks >= 60):
            $grade = "A-";
            break;
        case ($averageMarks >= 50):
            $grade = "B";
            break;
        case ($averageMarks >= 40):
            $grade = "C";
            break;
        case ($averageMarks >= 33):
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    // Output results
    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: " . number_format($averageMarks, 2) . "\n";
    echo "Grade: $grade\n";
}

// Sample marks input
$marks = [85, 70, 65, 50, 33]; // Modify this array for different input
calculateResult($marks);
?>
