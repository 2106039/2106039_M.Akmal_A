<?php 
    $db = mysqli_connect("localhost","root","","2106039_M.Akmal_UTS");
    if (!$db) {
        echo "<script>
                alert('database tidak terhubung')
            </script>";
    };

    $Jeniskendaraan = $_POST['Jeniskendaraan'];
    $Nomerkendaraan = $_POST['Nomerkendaraan'];
    $jammasuk = $_POST['jammasuk'];
    $Password = $_POST['Password'];
    $alamat = $_POST['alamat'];



    $query = "INSERT INTO parkir VALUES(NULL,'$Jeniskendaraan','$Nomerkendaraan','$jammasuk','$Password','$alamat')";
    mysqli_query($db,$query);
    echo "<script>alert('data berhasil ditambahkan')</script>";
    echo "<script>window.location='./index.php'</script>"
?>