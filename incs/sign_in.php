<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $usernameLogin = trim(htmlspecialchars($_POST['username']));
    $passwordLogin = trim(htmlspecialchars($_POST['password']));

    if (!empty($usernameLogin) && !empty($passwordLogin)) {
        // Prepare statement to find user
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $usernameLogin);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            // $hashPass = password_hash($passwordLogin, PASSWORD_DEFAULT);
            // Verify password
            if (password_verify($passwordLogin, $user['password'])) {
                // You can set session variables here if using sessions
                // echo "Login successful! Welcome, " . htmlspecialchars($user['email']);
                 // Store user info in session if needed
                 $_SESSION['user_email'] = $user['email'];

                 // Redirect to welcome page
                 header("Location:./incs/welcome.php");
                 exit;
                // redirect or perform other logic here
            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "User not found.";
        }

        $stmt->close();
    } else {
        echo "Both fields are required.";
    }
}
?>

