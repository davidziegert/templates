<?php

function connect_to_database()
{
    define("HOST", "localhost");
    define("USER", "your_user");
    define("PASSWORD", "your_password");
    define("DATABASE", "test");

    try {
        $connection = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USER, PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (PDOException $error) {
        exit("Error: " . $error->getMessage());
    }
}

function register_user($username, $email, $password)
{
    $connection = connect_to_database();
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO tb_accounts VALUES (NULL, ?, ?, ?, NULL)";

    try {
        $statement = $connection->prepare($query);
        $statement->bindParam(1, $username, PDO::PARAM_STR);
        $statement->bindParam(2, $email, PDO::PARAM_STR);
        $statement->bindParam(3, $hash, PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
        $statement = null;
    } catch (PDOException $error) {
        exit("Error: " . $error->getMessage());
    }

    $connection = null;
}
