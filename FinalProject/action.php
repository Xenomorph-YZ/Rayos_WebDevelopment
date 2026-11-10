```php
<?php

include "config.php";

// ======================================
// ADD STUDENT
// ======================================

if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $stmt = mysqli_prepare($conn,
        "INSERT INTO users (name, email, phone, address)
         VALUES (?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $stmt, "ssss",
        $name, $email, $phone, $address
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error adding student: " . mysqli_error($conn);
    }
}


// ======================================
// UPDATE STUDENT
// ======================================

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['barangay'];
    $email = $_POST['street'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $problem = $_POST['problem'];

    $stmt = mysqli_prepare($conn,
        "UPDATE users
         SET name = ?, email = ?, phone = ?, address = ?
         WHERE id = ?"
    );

    mysqli_stmt_bind_param(
        $stmt, "ssssi",
        $name, $email, $phone, $address, $id
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating student: " . mysqli_error($conn);
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    mysqli_query($conn,"DELETE FROM users WHERE id=$id"); 

    header("Location: index.php");
    exit;
}

?>
