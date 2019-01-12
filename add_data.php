<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="add_data.css">
</head>
<body>
<div class="wrapper">
    <div class="header">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
        <tr>
            <h1>TAMBAH DATA</h1>
        </tr>
        <tr>
            <td class="nama" >NIS</td>
            <td><input type="text" name="nis" size=40 class="input"/></td>
        </tr>
        <tr>
            <td class="nama">Nama</td>
            <td><input type="text" name="nama" size=40 class="input" /> </td>
        </tr>
        <tr>
            <td class="nama">Alamat</td>
            <td><input type="text" name="alamat" size=40 class="input" /></td>
        </tr>
        <tr>
            <td class="nama">Password</td>
            <td><input type="password" name="password" size=40 class="input" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" class="submit" /></td>
        </tr>
    </table>
    </form>
    </div>

    <div class="table">
    <?php
        require_once "./connect.php";
        
        if(isset($_POST['nis']) && isset($_POST['nama'])){
            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $password = $_POST['password'];
            $sql = "INSERT INTO tb_siswa VALUES ('".$nis."','".$nama."','".$alamat."','".$password."')";
            $result = mysqli_query($connect, $sql);
            if ($result){
                echo '<script>
                alert("Data Berhasil Ditambahkan")
                </script>';
            }
            else{
                echo 'Gagal Menambahkan Data <br/>';
                echo mysqli_error($connect);
            }
        }
        echo '<hr/>';
        require_once "./record.php";
        
    ?>
    </div>
</div>
</body>
</html>