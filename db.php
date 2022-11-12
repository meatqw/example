<?php

// create user table in db
function createTable($conn){

    $sql = "CREATE TABLE User (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(40) NOT NULL,
    address VARCHAR(400) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)
    ";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table User created";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    $conn->close();
}

// add new user
function addData($data) {
    $conn = mysqli_connect("localhost", "root", "Neetqw2110", "example");

    $sql = "INSERT INTO User (name, address) VALUES ('$data[name]', '$data[address]')";
    if ($conn->query($sql) === TRUE) {
        echo "Data add";
    } else {
        echo "Error data add: " . $conn->error;
    }
    $conn->close();
}

// get users
function getData($conn) {
    $sql = "SELECT * FROM User";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"]. " name: " . $row["name"]. " address:" . $row["address"]. "<br>";
        }
      } else {
        echo "no data";
      }
    $conn->close();
}
