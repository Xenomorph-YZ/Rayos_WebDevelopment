<?php
    include "config.php";
    $query = mysqli_query($conn, "SELECT * FROM users");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APPLICATION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>BARANGAY REQUEST TRACKER</h1>
        <a href="add.php">ADD REQUEST</a>

        <table>
            <tr>
                <th>No.</th>
                <th>Barangay</th>
                <th>Street</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Problem</th>
            </tr>

            <?php
                $no = 1;
                while($user = mysqli_fetch_assoc($query)): 
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $user['Barangay']  ?></td>
                <td><?= $user['Street']  ?></td>
                <td><?= $user['phone']  ?></td>
                <td><?= $user['address']  ?></td>
                <td><?= $user['Problem']  ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>