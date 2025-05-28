<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usernameRegister = trim($_POST['username']);
    $passwordRegister = trim($_POST['password']);
    $confirmPasswordRegister = trim($_POST['confirm-password']);

    if (!empty($usernameRegister) && !empty($passwordRegister) && !empty($confirmPasswordRegister)) {
        if ($passwordRegister !== $confirmPasswordRegister) {
            die('Passwords do not match');
        }

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $usernameRegister);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                echo "<p class='alert alert-danger'>User already exists</p>";
            } else {
                $hashedPassword = password_hash($passwordRegister, PASSWORD_DEFAULT);
                $status = 0;
                $stmt = $conn->prepare("INSERT INTO users (email, password, statu, created_date) VALUES (?, ?, ?, NOW())");
                $stmt->bind_param("ssi", $usernameRegister, $hashedPassword, $status);

                if($stmt->execute()){
                    echo "Registered a user!";
                } else {
                    echo "Failed to register the user!";
                }
            }
        } else {
            echo "SQL query failed";
        }

        $stmt->close();
    } else {
        die('All fields are required.');
    }
}
?>
