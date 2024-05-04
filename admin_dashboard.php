<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }

        h2 {
            margin-top: 20px;
            color: #555;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        @media screen and (max-width: 600px) {
            table {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>

    <h2>Requests from Users:</h2>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Product</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Assume $requests is an array containing user requests
            $requests = [
                ["user1", "Product 1", 2],
                ["user2", "Product 2", 1],
                ["user3", "Product 3", 3]
            ];

            foreach ($requests as $request) {
                echo "<tr>";
                echo "<td>" . $request[0] . "</td>";
                echo "<td>" . $request[1] . "</td>";
                echo "<td>" . $request[2] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
