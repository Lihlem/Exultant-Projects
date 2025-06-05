<?php
// views/annual_returns_dashboard.php
// This file displays the annual returns data in an HTML table.
// The data is expected to be in a variable named $data,
// passed from AnnualReturnsController.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annual Returns Dashboard</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Annual Returns</h1>

    <?php if (isset($data) && !empty($data)): ?>
        <table>
            <thead>
                <tr>
                    <th>Year</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $returnEntry): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($returnEntry['year']); ?></td>
                        <td><?php echo htmlspecialchars($returnEntry['amount']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No annual returns data available.</p>
    <?php endif; ?>

</body>
</html>
