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
        header("Location: ../login.php");
    } catch (PDOException $error) {
        exit("Error: " . $error->getMessage());
    }

    $query = null;
    $connection = null;
}

function login_user($username, $password)
{
    $connection = connect_to_database();

    $query = "SELECT _USERNAME, _PASSWORD FROM tb_accounts WHERE _USERNAME = ?";

    try {
        $statement = $connection->prepare($query);
        $statement->bindParam(1, $username, PDO::PARAM_STR);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        if (!$results) {
            exit("Error: No results from database!");
        } else {
            foreach ($results as $row) {
                if (password_verify($password, $row["_PASSWORD"])) {
                    start_session($row["_USERNAME"]);
                    login_time($username);
                    header("Location: ../index.php");
                } else {
                    exit("Error: Password not match!");
                }
            }
        }

        $statement->closeCursor();
        $statement = null;
        $results = null;
    } catch (PDOException $error) {
        exit("Error: " . $error->getMessage());
    }

    $query = null;
    $connection = null;
}

function login_time($username)
{
    $timestamp = date("Y-m-d H:i:s", time());
    $connection = connect_to_database();

    $query = "UPDATE tb_accounts SET _LASTLOGIN = ? WHERE _USERNAME = ?";

    try {
        $statement = $connection->prepare($query);
        $statement->bindParam(1, $timestamp, PDO::PARAM_STR);
        $statement->bindParam(2, $username, PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
        $statement = null;
    } catch (PDOException $error) {
        exit("Error: " . $error->getMessage());
    }

    $query = null;
    $connection = null;
}

function logout_user()
{
    $_SESSION["ID"] = null;
    $_SESSION["STATUS"] = "inactive";
    $_SESSION["TIMESTAMP"] = null;
    $_SESSION["AGENT"] = null;
    $_SESSION["IP"] = null;
    $_SESSION["USER"] = null;
    session_unset();
    session_destroy();
    header("Location: ../login.php");
}

function start_session($username)
{
    session_start();
    $_SESSION["ID"] = session_create_id();
    $_SESSION["STATUS"] = "active";
    $_SESSION["TIMESTAMP"] = $_SERVER["REQUEST_TIME"];
    $_SESSION["AGENT"] = $_SERVER["HTTP_USER_AGENT"];
    $_SESSION["IP"] = $_SERVER["REMOTE_ADDR"];
    $_SESSION["USER"] = $username;
    session_commit();
    ini_set("session.use_strict_mode", 1);
}

function destroy_session()
{
    $_SESSION["ID"] = null;
    $_SESSION["STATUS"] = "inactive";
    $_SESSION["TIMESTAMP"] = null;
    $_SESSION["AGENT"] = null;
    $_SESSION["IP"] = null;
    $_SESSION["USER"] = null;
    session_unset();
    session_destroy();
    header("Location: login.php");
}

function check_is_login()
{
    if (!empty($_SESSION) && $_SESSION["STATUS"] == "active") {
        header("Location: index.php");
    }
}

function check_have_session()
{
    if (empty($_SESSION) || $_SESSION["STATUS"] == "inactive" || $_SESSION["TIMESTAMP"] < $_SERVER["REQUEST_TIME"] - 180) {
        destroy_session();
    } else {
        if ($_SESSION["AGENT"] != $_SERVER["HTTP_USER_AGENT"] || $_SESSION["IP"] != $_SERVER["REMOTE_ADDR"]) {
            destroy_session();
        } else {
            $_SESSION["ID"] = session_create_id();
            $_SESSION["TIMESTAMP"] = $_SERVER["REQUEST_TIME"];
            session_commit();
        }
    }
}