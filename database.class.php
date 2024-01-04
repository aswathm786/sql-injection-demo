<?php

class Database
{
    public static $conn = null;

    public static function getConnection()
    {
        if (self::$conn == null) {
            $config_file = file_get_contents('db.json');
            $config = json_decode($config_file, true);

            $servername = $config['host'];
            $username = $config['username'];
            $password = $config['password'];
            $dbname = $config['dbname'];

            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            } else {
                // Set the connection for reuse
                self::$conn = $connection;
                return self::$conn;
            }
        } else {
            return self::$conn;
        }
    }
}
?>
