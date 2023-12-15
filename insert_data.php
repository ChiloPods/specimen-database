<?php
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sctname = $_POST["sctname"];
    $cmname = $_POST["cmname"];
    $tp = $_POST["tp"];
    $makanan = $_POST["makanan"];
    $deskripsi = $_POST["deskripsi"];

    // Set path image
    $spcimg = $_FILES["spcimg"]["name"];
    $tempFile = $_FILES["spcimg"]["tmp_name"];
    $path = "spcfoto/".$spcimg;

    // Insert data into the database
    if (move_uploaded_file($tempFile, $path)) {
        // Insert data into the database
        $sql = "INSERT INTO species (sctname, cmname, tp, makanan, deskripsi, spcimg) VALUES ('$sctname', '$cmname', '$tp', '$makanan', '$deskripsi', '$spcimg')";

        if ($connect->query($sql) === TRUE) {
            echo "Species added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    } else {
        echo "File upload failed.";
    }
}

// Close the database connection
$connect->close();
?>
