<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Ngambil data
    $search = $_GET["search"];

    // Query data ke database
    $sql = "SELECT * FROM your_table_name WHERE nama_buku LIKE '%$search%' OR nama_pengarang LIKE '%$search%' OR detail_buku LIKE '%$search%'";

    // Eksekusi Query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Tampilkan data yang sesuai dengan kata kunci pencarian
        while ($row = $result->fetch_assoc()) {
            echo "Buku: " . $row["nama_buku"] . "<br>";
            echo "Pengarang: " . $row["nama_pengarang"] . "<br>";
            echo "Detail Buku: " . $row["detail_buku"] . "<br><br>";
        }
    } else {
        echo "No results found";
    }
}

?>