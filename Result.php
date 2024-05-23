<?php
    $roll1=1400430;

    $maths1=85;
    $sst1=80;
    $science1=90;
    $english1=95;
    $bengali1=100;
    
    $total_marks1 = $maths1+$sst1+$science1+$english1+$bengali1;
    $percentage1=(($total_marks1/500)*100);
    $division1 =0;
    if($percentage1>60.00){
        $division1 = "first division";
    }else{
        $division1 = "second division";
    }

    $roll2=1400432;

    $maths2=85;
    $sst2=1;
    $science2=5;
    $english2=21;
    $bengali2=98;

    $total_marks2 = $maths2+$sst2+$science2+$english2+$bengali2;
    $percentage2=(($total_marks2/500)*100);
    $division2 =0;
    if($percentage2 > 60){
        $division2 = "first division";
    }else{
        $division2 = "second division";
    }
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Results Table</title>
        <style>

            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }
            th {
                background-color: #50C878;
            }
            td{
                background-color: #F5F5F5;
            }
    </style>
    </head>
    <body>
    
    <table border="1">
        <thead>
            <tr>
                <th>Roll Number</th>
                <th>Mathematics</th>
                <th>Bengali</th>
                <th>English</th>
                <th>Science</th>
                <th>Social Science</th>
                <th>Total Marks</th>
                <th>Percentage</th>
                <th>Division</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php  echo $roll1; ?></td>
                <td><?php  echo $maths1; ?></td>
                <td><?php  echo $bengali1; ?></td>
                <td><?php  echo $english1; ?></td>
                <td><?php  echo $science1; ?></td>
                <td><?php  echo $sst1; ?></td>
                <td><?php  echo $total_marks1; ?></td>
                <td><?php  echo $percentage1; ?></td>
                <td><?php  echo $division1; ?></td>
            </tr>
            <tr>
                <td><?php  echo $roll2; ?></td>
                <td><?php  echo $maths2; ?></td>
                <td><?php  echo $bengali2; ?></td>
                <td><?php  echo $english2; ?></td>
                <td><?php  echo $science2; ?></td>
                <td><?php  echo $sst2; ?></td>
                <td><?php  echo $total_marks2; ?></td>
                <td><?php  echo $percentage2; ?></td>
                <td><?php  echo $division2; ?></td>
            </tr>
        </tbody>
    </table>
    
    </body>
    </html>

    