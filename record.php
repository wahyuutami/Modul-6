<?php
require_once"connect.php";
$sql = 'SELECT * FROM tb_siswa';
$result = mysqli_query($connect, $sql);
if($result){
    if(mysqli_num_rows($result)){
        ?>
        <table border = 1 cellspacing = 1 cellpadding = 5>
            <tr>
                <td id="d">#</td>
                <td width=100 id="d">NIS</td>
                <td width=150 id="d">Nama</td>
                <td id="d">Alamat</td>
            </tr>
            <?php
            $i = 1;
            while($row = mysqli_fetch_row($result)){
                ?>
                <tr>
                    <td id="d">
                        <?php echo $i;?>
                    </td>
                    <td id="d">
                        <?php echo $row[0];?>
                    </td>
                    <td id="d">
                        <?php echo $row[1];?>
                    </td>
                    <td id="d">
                        <?php echo $row[2];?>
                    </td>
                </tr>
                <?php
                    $i++;
            }
                ?>                    
                </table>
                <a href="logout.php" id="s">Logout!</a>
            <?php
        }
        else{
            echo 'Data tidak Ditemukan';
}
mysqli_close($connect);
}
?>