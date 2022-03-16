<?php
$conn_string = "host = ec2-34-224-226-38.compute-1.amazonaws.com" . 
  "port=5432 dbname=dcpgji8n0ra2sm" .
  "user=loyvnysswxbfga" . 
  "password=cb138d93ed7f63794236aa1474817cff48d48bb5887b52cbe9da039fff0b7125";
$conn = pg_connect($conn_string);

if($conn) {
    echo "Koneksi database berhasil tersambung";
} else {
    echo "Koneksi dengan database GAGAL tersambung";
}
?>
