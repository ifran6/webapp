<?php
session_start();  // Start session at the beginning
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameLogin = trim($_POST['username'] ?? '');
    $passwordLogin = $_POST['password'] ?? '';

    if (!empty($usernameLogin) && !empty($passwordLogin)) {
        // Prepare statement to find user by email
        if ($stmt = $conn->prepare("SELECT * FROM users WHERE email = ?")) {
            $stmt->bind_param("s", $usernameLogin);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();
                // Verify password
                if (password_verify($passwordLogin, $user['password'])) {
                    // Set session variable
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_email'] = $user['email'];

                    // Redirect to welcome page (adjust path if needed)
                    header("Location:welcome.php"); 
                    exit;
                } else {
                    echo "Incorrect password.";
                    exit;
                }
            } else {
                echo "User not found.";
                exit;
            }

            $stmt->close();
        } else {
            echo "Database error: failed to prepare statement.";
            exit;
        }
    } else {
        echo "Both fields are required.";
        exit;
    }
}
?>
