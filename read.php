<!doctype html>
<html>
<head>
    <title>Read</title>
    <link rel="stylesheet" href="my.css" />
</head>
<body>
    <?php
        require 'conn.php';
        $sql = "select * from mahasiswa";
        try{
            $res = $db->query($sql);
        }catch(PDOException $e){
            echo 'Query gagal: '.$e->getMessage();
        }
    ?>
    
    <table class="datatable">
        <caption>Data Mahasiswa Superhero</caption>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Hobby</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php if(isset($res)): ?>
                <?php $no=1; foreach($res as $row): ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['tempat_lahir']; ?></td>
                        <td><?php echo $row['tanggal_lahir']; ?></td>
                        <td><?php echo $row['hobby']; ?></td>
                        <td><a href="update.php?id=<?php echo $row['id'] ?>">Edit</a> | 
                            <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No Data</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <br />
    <a href="create.php" class="button green">Tambah Data</a>
</body>
</html>
