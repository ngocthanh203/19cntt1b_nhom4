<?php
      $conn = mysqli_connect('localhost', 'root','', 'baitap') 
              or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
?>