<!-- File ini berisi koneksi dengan database suklib -->

 
<?php
$conn = mysqli_connect("localhost", "root", "", "suklib", "3306");
  
// perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan error 
if($conn->connect_error) {
    die ('Koneksi Gagal : "$conn -> connect_error"');
}


?>