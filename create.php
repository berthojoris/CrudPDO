<!doctype html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="my.css" />
</head>
<body>
    <?php
        $nama = $nim = $tempat_lahir = $tanggal_lahir = $hobby = "";
        if(isset($_POST['Submit'])){
            require "conn.php";
            $nama = empty($_POST['nama']) ? $_POST['nama'] : '';
            $nim = empty($_POST['nim']) ? $_POST['nim'] : '';
            $tempat_lahir = empty($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
            $tanggal_lahir = empty($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
            $hobby = empty($_POST['hobby']) ? $_POST['hobby'] : '';
            if($nama || $nim || $tempat_lahir || $tanggal_lahir || $hobby){
                
            }else{
                $sql = "insert into mahasiswa (nama, nim, tempat_lahir, tanggal_lahir, hobby) values(:nama, :nim, :tempat_lahir, :tanggal_lahir, :hobby)";
                try{
                    $st = $db->prepare($sql);
                    $st->bindParam(':nama', $_POST['nama']);
                    $st->bindParam(':nim', $_POST['nim']);
                    $st->bindParam(':tempat_lahir', $_POST['tempat_lahir']);
                    $st->bindParam(':tanggal_lahir', $_POST['tanggal_lahir']);
                    $st->bindParam(':hobby', $_POST['hobby']);
                    $st->execute();
                    
                    header("Location: read.php");
                }catch(PDOException $e){
                    echo 'Insert gagal: '.$e->getMessage();
                }
            }
        }
    ?>
    
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" style="width: 500px;">
        <fieldset>
            <legend>Tambah Data</legend>
            <div>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" value="<?php echo htmlspecialchars($nama); ?>" class="txt" required />
            </div>
            <div>
                <label for="nim">Nim:</label>
                <input type="text" name="nim" id="nim" value="<?php echo htmlspecialchars($nim); ?>" class="txt" required />
            </div>
            <div>
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo htmlspecialchars($tempat_lahir); ?>" class="txt" required />
            </div>
            <div>
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo htmlspecialchars($tanggal_lahir); ?>" class="txt" required />
            </div>
            <div>
                <label for="hobby">Hobby:</label>
                <input type="text" name="hobby" id="hobby" value="<?php echo htmlspecialchars($hobby); ?>" class="txt" required />
            </div>
        </fieldset>
        <div>
            <input type="submit" value="Simpan!" class="button darkblue" id="submit" name="Submit" />
        </div>
    </form>
    
</body>
</html>
