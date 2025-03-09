<?php

/**
 * Copyright © MB Arbatos Klubas. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

$servername = "mysql";
$database = "example";
$username = "example";
$password = "example";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database Connected successfully";
}
catch(PDOException $e)
{
    echo "Database Connection failed: " . $e->getMessage();
}

phpinfo();