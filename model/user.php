<?php

function createUser($conn, $username, $email, $password)
{
    $sql = "INSERT INTO user (username, email,  password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $password = password_hash($password, PASSWORD_DEFAULT);
    if ($stmt === false) {
        return false;
    }
    $stmt->bind_param("sss", $username, $email, $password);
    if ($stmt->execute()) {
        return true;
    } else {
        $stmt->close();
        return false;
    }
}

function findEmail($conn, $email)
{
    $sql  = "SELECT id, username, email FROM user WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        return false;
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user   = $result->fetch_assoc();
    $stmt->close();
    return $user ? $user : false;
}

function findname($conn, $username)
{
    $sql  = "SELECT id, username, email FROM user WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        return false;
    }
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user   = $result->fetch_assoc();
    $stmt->close();
    return $user ? $user : false;
}

function matchPass($conn, $email, $password)
{
    $sql  = "SELECT password FROM user where email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    if ($stmt == false) {
        return false;
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $pass = $result->fetch_assoc();
    $stmt->close();
    return password_verify($password, $pass["password"]);
}

function updateUserPasswordByEmail($conn, $email, $hashed_password)
{
    $sql = "UPDATE user SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        error_log("Prepare failed in updateUserPasswordByEmail: (" . $conn->errno . ") " . $conn->error);
        return false;
    }
    $stmt->bind_param('ss', $hashed_password, $email);
    $executeSuccess = $stmt->execute();
    if (!$executeSuccess) {
        error_log("Execute failed in updateUserPasswordByEmail for email " . htmlspecialchars($email) . ": (" . $stmt->errno . ") " . $stmt->error);
    }
    $stmt->close();
    return $executeSuccess;
}
