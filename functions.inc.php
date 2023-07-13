<?php


function emailExists($conn, $email, $userName)
{
    $sql = "SELECT * FROM users WHERE Mail = ? OR Username = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $email, $userName);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }

    else {
        $result = false;
        return $result;
    }


}

function createUser($conn, $name, $phone, $email, $userName, $pwd)
{
    $sql = "INSERT INTO users (NameSurname,Phone, Mail, Username ,UserPassword) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $phone, $email, $userName, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: signup.php?error=none");
    exit();
}

function emptyInputLogin($email, $pwd)
{

    if (empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $pwd)
{
    $emailExist = emailExists($conn, $email, $email);

    if ($emailExist === false) {
        header("location: login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $emailExist["UserPassword"];

    $chedkedPwd = password_verify($pwd, $pwdHashed);

    if ($chedkedPwd == false) {
        header("location: login.php?error=wronglogin");
        exit();
    }

    else if ($chedkedPwd == true) {
        session_start();
        $_SESSION["username"] = $emailExist["Username"];

        header("location: main.php");
        exit();

    }
}
