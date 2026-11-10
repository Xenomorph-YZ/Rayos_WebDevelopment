<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>ADD USER</h1>
            <form method="POST" action="action.php">
                <input type="text" name="barangay" placeholder="Barangay" required>
                <input type="text" name="street" placeholder="Street" required>
                <input type="text" name="phone" placeholder="Phone Number" required>
                <textarea name="address" placeholder="Address" required></textarea>
                <textarea name="problem" placeholder="Problem" required></textarea>
                <div class="btn-box">
                    <button type="submit" class="btn" name="add">Submit</button>
                    <a href="index.php" class="btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    
    
</body>
</html>