<?php

$host = "localhost";
$port = 3309;
$database = "belajar_php_db";
$username = "root";
$password = "mysql";

try {
    $connection = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database" . PHP_EOL;

    // Menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "Error terkoneksi ke database: " . $exception->getMessage() . PHP_EOL;
}

// Fungsi untuk membuat koneksi ke database
function getConnection(): PDO
{
    $host = "localhost";
    $port = 3309;
    $database = "belajar_php_db";
    $username = "root";
    $password = "mysql";

    return new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
}

try {
    $connection = getConnection();

    // Membuat tabel jika belum ada
    $createTableSQL = <<<SQL
        -- CREATE TABLE IF NOT EXISTS customers (
        --     id VARCHAR(100) NOT NULL,
        --     name VARCHAR(100) NOT NULL,
        --     email VARCHAR(100) NOT NULL,
        --     PRIMARY KEY (id)
        -- ) ENGINE = InnoDB;

        -- CREATE TABLE IF NOT EXISTS admin (
        --     username VARCHAR(100) NOT NULL,
        --     password VARCHAR(100) NOT NULL,
        --     PRIMARY KEY (username)
        -- ) ENGINE = InnoDB;

        --  CREATE TABLE IF NOT EXISTS comments (
        --     id INT NOT NULL AUTO_INCREMENT,
        --     email VARCHAR(100) NOT NULL,
        --     comment TEXT,
        --     PRIMARY KEY (id)
        -- ) ENGINE = InnoDB;
    SQL;

    // $connection->exec($createTableSQL);
    // echo "tabel  berhasil dibuat." . PHP_EOL;

    $connection->exec("INSERT INTO comments(email, comment) VALUES('nafa@test.com', 'halo')");
    $id = $connection->lastInsertId();

    var_dump($id);

    // Menyisipkan data ke tabel customers
    // $insertSQL = <<<SQL
    //     INSERT INTO customers(id, name, email)
    //     VALUES ('hasya', 'Hasya', 'hasya@test.com');
    // SQL;
    

    // $connection->exec($insertSQL);

    // echo "Data berhasil disisipkan." . PHP_EOL;

    // $insertAdminSQL = "INSERT IGNORE INTO admin (username, password) VALUES ('admin', 'admin')";
    // $connection->exec($insertAdminSQL);
    // echo "Data admin berhasil disisipkan atau sudah ada." . PHP_EOL;

    // Menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "Error: " . $exception->getMessage() . PHP_EOL;
}


$connection = getConnection();

// $sql = "SELECT *FROM customers";
// $result = $connection->query($sql);
// foreach ($result as $row) {
//     var_dump($row);
// }


$connection = null;


$username   = "admin";
$password = "admin";


// $username   = "admin'; #";
// $password = "admin";

// Menggunakan Function Quote
// $username   = $connection->quote("admin'; #");
// $password = $connection->quote("admin");

// Membuat Prepare Statement
// $sql    ="SELECT * FROM admin WHERE username = :username AND password = :password";
// $result = $connection->prepare($sql);
// $result->bindParam("username", $username);
// $result->bindParam("password", $password);
// $result->execute();

// Membuat Parameter dengan Index
// $sql    ="SELECT * FROM admin WHERE username = ? AND password = ?";
// $result = $connection->prepare($sql);
// // $result->bindParam(1, $username);
// // $result->bindParam(2, $password);
// $result->execute([$username, $password]);

// $sql    ="SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
// $result =$connection->query($sql);

//Function Fetch()
// $succes = false;
// if  ($row = $result ->fetch ()) {
//     echo "SUKSES LOGIN : " . $row["username"] . PHP_EOL;
// }else {
//     echo "GAGAL LOGIN". PHP_EOL;
// }

//Function Fetch All()
// $sql    ="SELECT * FROM customers";
// $result =$connection->query($sql);
// $customers = $result->fetchAll();

// var_dump($customers);

// $succes = false;
// foreach ($result as $row) {
//     $succes = true;
// }
// if ($succes) {
//     echo "SUKSES LOGIN". PHP_EOL;
// }else {
//     echo "GAGAL LOGIN". PHP_EOL;
// }


?>

