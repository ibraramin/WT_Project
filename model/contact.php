<?php

function addContact($conn, $name, $email, $sub, $mess)
{
    $sql  = "INSERT into contact (name, email, subject, message) values (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        return false;
    }
    $stmt->bind_param('ssss', $name, $email, $sub, $mess);
    if ($stmt->execute()) {
        return true;
    }
    $stmt->close();
    return false;
}

?>