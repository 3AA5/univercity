<?php  

    include 'Database-connect.php';
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $password=($_POST['password']);
        $role=($_POST['role']);

        $sql = "SELECT * FROM `users` WHERE email='$email'";
        $res = $conn->query($sql);

        if ($res->num_rows === 0) {
            $password=password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`name`, `email`, `password`, `role`)
            VALUES ('$name', '$email', '$password', '$role'";
        }
    }
    else {
        header("Location: sing up.html");
    exit();
    }
?>