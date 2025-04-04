<?php 
include_once 'connect.php';
session_start();


if      ($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['user_username']) && isset($_POST['user_password'])) {

        $user_name = $_POST['user_username'];
        $user_password = $_POST['user_password'];

    
        $sql = "SELECT username, password, user_ID, rank FROM users WHERE username = :user_name AND password = :user_password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':user_password', $user_password);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            header("Location:  /DLCHUB/src/fontend/pages/index.php?error='Invalid username or password'");

            exit;
        }

       switch ($result['rank']) {
            case 'A':
                $_SESSION['user_ID'] = $result['user_ID'];
                header("Location: /DLCHUB/src/fontend/pages/admin_view/admin_dashboard.html"); 
                break;
            case 'B':
                $_SESSION['user_ID'] = $result['user_ID'];
                header("Location: #");
                break;
            case 'C':
                $_SESSION['user_ID'] = $result['user_ID'];
                header("Location:  /DLCHUB/src/fontend/pages/student_view/student_dashboard.html");
                break;
            default:
                header("Location: /DLCHUB/src/fontend/pages/index.php?error=Invalid rank");
        }

   
}else{
    echo "Invalid request method or missing parameters.";
    exit;
}

?>