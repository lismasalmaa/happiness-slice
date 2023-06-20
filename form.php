<?php
include 'controllers.php';
// $jumlah = new jumlah();

if(isset($_POST["submit"])){

    if( tambah($_POST) > 0){
        echo "<script>alert('Data berhasil disimpan.');window.location='result.php';</script>";
    }
    else{
         echo "<script>alert('Data gagal disimpan.');window.location='result.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="formm">
<form action="" method="post">
    <h6>Pesan sekarang!</h6>
            <div class="input-field">
                    <input type="text" name="nama" class="input" placeholder="Nama" required>
                    <i class="bx bx-user"></i>
                </div>


                <div class="input-field">
                    <input type="number" name="birthday" class="input" placeholder="birthday" required>
                    <i class="bx bx-user"></i>
                </div>


                <div class="input-field">
                    <input type="number" name="waffle" class="input" placeholder="waffle" required>
                    <i class="bx bx-lock-alt"></i>
                </div>


                <div class="input-field">
                    <input type="number" name="ice" class="input" placeholder="ice" required>
                    <i class="bx bx-lock-alt"></i>
                </div>


                <div class="input-field">
                    <input type="number" name="donat" class="input" placeholder="donat" required>
                    <i class="bx bx-lock-alt"></i>
                </div>


                <div class="input-field">
                    <input type="number" name="slice" class="input" placeholder="slice" required>
                    <i class="bx bx-lock-alt"></i>
                </div>


                <div class="input-field">
                    <input type="number" name="drink" class="input" placeholder="drink" required>
                    <i class="bx bx-lock-alt"></i>
                </div>


                <div class="input-field1">
                <button type="submit" name="submit" class="submit">Beli!</button>
                </div>
            </form>
        </div>
    </div>

    </div>
</body>
</html>