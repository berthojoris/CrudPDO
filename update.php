<!doctype html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="my.css" />
</head>
<body>
    <?php
        require "conn.php";
        try{
            $sql = "select * from mahasiswa where id=:id limit 1";
            $st = $db->prepare($sql);
            $st->bindParam(':id', $_GET['id']);
            $st->execute();
            $res = $st->fetch();
            $nama = $res['nama'];
            $nim = $res['nim'];
            $tempat_lahir = $res['tempat_lahir'];
            $tanggal_lahir = $res['tanggal_lahir'];
            $hobby = $res['hobby'];
        }catch(PDOException $e){
            echo "Query gagal: ".$e->getMessage();
        }
        
        if(isset($_POST['Submit'])){
            $nama = empty($_POST['nama']) ? $_POST['nama'] : '';
            $nim = empty($_POST['nim']) ? $_POST['nim'] : '';
            $tempat_lahir = empty($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
            $tanggal_lahir = empty($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
            $hobby = empty($_POST['hobby']) ? $_POST['hobby'] : '';
            if($nama || $nim || $tempat_lahir || $tanggal_lahir || $hobby){
                
            }else{
                $sql = "update mahasiswa set nama=:nama, nim=:nim, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, hobby=:hobby where id=:id";
                try{
                    $st = $db->prepare($sql);
                    $st->bindParam(':nama', $_POST['nama']);
                    $st->bindParam(':nim', $_POST['nim']);
                    $st->bindParam(':tempat_lahir', $_POST['tempat_lahir']);
                    $st->bindParam(':tanggal_lahir', $_POST['tanggal_lahir']);
                    $st->bindParam(':hobby', $_POST['hobby']);
                    $st->bindParam(':id', $_GET['id']);
                    $st->execute();
                    
                    header("Location: read.php");
                }catch(PDOException $e){
                    echo 'Update gagal: '.$e->getMessage();
                }
            }
        }
    ?>
    
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']).'?id='.$_GET['id']; ?>" method="POST" style="width: 500px;">
        <fieldset>
            <legend>Update Data</legend>
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
            <input type="submit" value="Update!" class="button darkblue" id="submit" name="Submit" />
        </div>
    </form>
    
</body>
</html>
