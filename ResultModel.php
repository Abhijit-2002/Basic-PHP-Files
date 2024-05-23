<?php
// Define student details
    $students = array(
        "1400430" => array("Maths" => 85, "Science" => 78, "English" => 92),
        "1400431" => array("Maths" => 65, "Science" => 72, "English" => 80)
    );

    // Function to calculate total marks and percentage
    function calculateResult($marks) {
        $totalMarks = array_sum($marks);
        $percentage = $totalMarks / count($marks);
        return array("totalMarks" => $totalMarks, "percentage" => $percentage);
    }

    // Function to determine division
    function getDivision($percentage) {
        if ($percentage >= 60) {
            return "First Division";
        } elseif ($percentage >= 45 && $percentage < 60) {
            return "Second Division";
        } else {
            return "Fail";
        }
    }

    // HTML table generation
    echo "<table border='1'>
            <tr>
                <th>Roll Number</th>
                <th>Total Marks</th>
                <th>Percentage</th>
                <th>Division</th>
            </tr>";

    foreach ($students as $rollNumber => $marks) {
        $result = calculateResult($marks);
        $division = getDivision($result['percentage']);

        echo "<tr>
                <td>$rollNumber</td>
                <td>{$result['totalMarks']}</td>
                <td>{$result['percentage']}%</td>
                <td>$division</td>
            </tr>";
    }

    echo "</table>";
?>