<?php

$tableSize = 10;

echo "<style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            color: #333333;
            text-transform: uppercase;
        }
        td:nth-child(even) {
            background-color: #f9f9f9;
        }
        td:nth-child(odd) {
            background-color: #ffffff;
        }
      </style>";

echo "<table>";
echo "<tr><th colspan='$tableSize'>Division Table</th></tr>";
echo "<tr><th></th>";

for ($i = 1; $i <= $tableSize; $i++) {
    echo "<th>$i</th>";
}

echo "</tr>";

for ($dividend = 1; $dividend <= $tableSize; $dividend++) {
    echo "<tr><th>$dividend</th>";

    for ($divisor = 1; $divisor <= $tableSize; $divisor++) {
        $quotient = $dividend / $divisor;
        echo "<td>";

        if ($quotient == (int)$quotient) {
            echo (int)$quotient;
        } else {
            echo number_format($quotient, 2);
        }

        echo "</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>
