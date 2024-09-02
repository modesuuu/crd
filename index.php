<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a href="tambah.php">Tambah</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NAMA</th>
            <th scope="col">JUMLAH</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi,"select * from barang"); 
                while($main = mysqli_fetch_array($data)) { ?>  
                <tr>
                    <td><?php echo $main["id"] ?></td>
                    <td><?php echo $main["nama"] ?></td>
                    <td><?php echo $main["jumlah"] ?></td>
                    <td><a href="hapus.php?id=<?php echo $main['id']; ?>">HAPUS</a></td>
                </tr>
               
            <?php } ?>
        </tbody>
    </table>
</body>
</html>