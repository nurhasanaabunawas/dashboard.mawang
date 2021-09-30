<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type ="text/css" media = "screen" href = "main.css">
    <script scr="mai.js"></script>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Wilayah</th>
            <th>Nama Ketua RT</th>
            <th>RW</th>
            <th>RT</th>
            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>total_warga</th>
        </tr>
        <?php
        include 'koneksi.php';
        $wilayah = mysqli_query($koneksi, "select * from wilayah_administrasi");
        while ($row = mysqli_fetch_array($wilayah))
        {
            echo "<tr>
            <td>".$row['no']."</td>
            <td>".$row['nama_wilayah']."<td>
            <td>".$row['nama_ketua_rt']."</td>
            <td>".$row['RW']."</td>
            <td>".$row['RT']."</td>
            <td>".$row['lakilaki']."</td>
            <td>".$row['perempuan']."</td>
            <td>".$row['total_warga']."</td>
            </tr>";
        }
        ?>
    </table>
    
</body>
</html>