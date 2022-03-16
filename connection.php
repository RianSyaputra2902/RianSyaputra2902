<?php
$conn_string = "host=john.db.elephantsql.com" . 
  "port=5432 dbname=zfblrwcz" .
  "user=zfblrwcz" . 
  "password=JVzibiIzivwBxbc2ISZeP9gY31ocfYXq";
$conn = pg_connect($conn_string);

if($conn) {
    echo "Koneksi database berhasil tersambung";
} else {
    echo "Koneksi dengan database GAGAL tersambung";
}
?>
