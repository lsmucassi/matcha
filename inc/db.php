<?php
    if (!class_exists('db_matcha')) {
        class matcha {
            function __construct() {
                $this->connect();
            }

            function connect() {
                $servername = "localhost";
                try {
                    $link = new PDO("mysql:host=$servername", DB_USER, DB_PASS);
                    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "CREATE DATABASE IF NOT EXISTS db_matcha";
                    $link->exec($sql);
                    $sql = "use db_matcha";
                    $link->exec($sql);
                    $sql = "CREATE TABLE IF NOT EXISTS db_matcha.matcha_users (user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                user_name VARCHAR(255) NOT NULL, user_login VARCHAR(255) NOT NULL, user_email VARCHAR(255) NOT NULL,
                                user_pass VARCHAR(255) NOT NULL, user_registered INT NOT NULL, user_confirm INT DEFAULT 0 NOT NULL)";
                    $link->exec($sql);
                }
                catch(PDOException $e)
                {
                    echo "Error: " . $sql . "<br>" . $e->getMessage();
                }
            }

            function hash_password($password, $nonce) {
                $secureHash = hash_hmac('sha512', $password . $nonce, SITE_KEY);
                
                return $secureHash;
            }

            function clean($array) {
                
                return array_map('mysql_real_escape_string', $array);
            }          

            function insert($link, $table, $fields, $values) {
                $fields = implode(", ", $fields);
                $values = implode("', '", $values);
    
                try {
                    $conn = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO $table (user_id, $fields, user_confirm) VALUES ('', '$values', '')";
                    $conn->exec($sql);
                    return TRUE;
                }
                catch(PDOException $e)
                {
                    echo $sql . "<br>" . $e->getMessage();
                }
            }
        }
    }

    $db_match = new matcha;
?>