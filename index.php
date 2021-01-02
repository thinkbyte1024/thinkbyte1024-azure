<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webpage</title>
</head>
<body>
    <?php 
        include 'lib/connection.php';

        
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Joined</th>
            <th>Salary</th>
        </tr>
        <?php
            $query = "SELECT * FROM members";
            $result = $conn->query($query);
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>" ."<td>" . $row['name'] . "</td><td>" . $row['role'] . "</td><td>" .$row['joined'] . "</td><td>" . "$" . $row['salary'] . "</td></tr>";
                }
            } else {
                echo "No results";
            }
            $conn->close();
        ?>
    </table>
</body>
</html>