```php
<?php
    include "config.php";

    // Check if ID is provided
    if (!isset($_GET['id']) || !filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
        die("Invalid or missing student ID!");
    }

    $id = (int) $_GET['id'];

    // Retrieve student information
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $query = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($query);

    if (!$user) {
        die("Student not found!");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="wrapper">
        <div class="form-wrapper">
            <h1>EDIT USER</h1>

            <form method="POST" action="action.php">

                <input type="hidden" name="id" value="<?= $user['id'] ?>">

                <input type="text" name="name"
                    placeholder="Name"
                    value="<?= htmlspecialchars($user['Barangay']) ?>"
                    required>

                <input type="email" name="email"
                    placeholder="Email"
                    value="<?= htmlspecialchars($user['Street']) ?>"
                    required>

                <input type="text" name="phone"
                    placeholder="Phone Number"
                    value="<?= htmlspecialchars($user['phone']) ?>"
                    required>

                <textarea name="address"
                    placeholder="Address"
                    required><?= htmlspecialchars($user['address']) ?></textarea>

                <textarea name="problem"
                    placeholder="Problem"
                    required><?= htmlspecialchars($user['Problem']) ?></textarea>

                <div class="btn-box">
                    <button type="submit" class="btn" name="update">
                        UPDATE
                    </button>

                    <a href="index.php" class="btn">Cancel</a>
                </div>

            </form>
        </div>
    </div>

</body>
</html>
```