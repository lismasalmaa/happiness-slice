<?php
$conn = mysqli_connect("localhost", "id20939379_lismasalma", "m]<[Skkn8?FLpkh]", "id20939379_eskrim");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $wadah = [];
    while($baju = mysqli_fetch_assoc($result)){
        $wadah[] = $baju;
    }
    return $wadah;
}

function tambah($data){
    global $conn;
    //htmlspecialchars untuk blog tag elemen html
    //simpan data ke dalam variable superglobal $_post
    $nama=($data["nama"]);
    $birthday=($data["birthday"]);
    $waffle=($data["waffle"]);
    $ice=($data["ice"]);
    $donat=($data["donat"]);
    $slice=($data["slice"]);
    $drink=($data["drink"]);
    //data yang disimpam di $_POST masukan ke databse
    $query ="INSERT INTO cake
         VALUES('', '$nama', '$birthday', '$waffle','$ice','$donat','$slice','$drink')";
        
        mysqli_query($conn, $query);

    //yang akan dikembalikan nilai 1 atau -1 untuk menghasilkan pesan
    return mysqli_affected_rows($conn);
}