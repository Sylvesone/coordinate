<?php

//VT Bağlantısı
require_once 'Controller/connect.php';

header("Content-Type:application/json; charset=utf-8");

$islem = $_SERVER["REQUEST_METHOD"];
parse_str(file_get_contents("php://input"), $veriler);

if ($veriler['id'] != '1') {
    islem(NULL, 901, "Hatala İşlem");
}

function islem($x, $y, $z, $kod, $mesaj) {
    $islem["x"] = $x;
    $islem["y"] = $y;
    $islem["z"] = $z;
    $islem["kod"] = $kod;
    $islem["mesaj"] = $mesaj;
    $sonuc = json_encode($islem, JSON_UNESCAPED_UNICODE);
    echo $sonuc;
}

if ($islem == "PUT") {
    $sorgu = $db->prepare("update coordinate set coordinate_x=:coordinate_x, coordinate_y=:coordinate_y, coordinate_z=:coordinate_z where coordinate_id=1");
    $update = $sorgu->execute(array('coordinate_x' => $veriler["x"], 'coordinate_y' => $veriler["y"], 'coordinate_z' => $veriler["z"]));
    if ($sorgu->rowCount() > 0) {
        islem($veriler["x"],$veriler["y"],$veriler["z"], 900, "Kayıt Güncellendi!");
    }else{
        islem(NULL, NULL, NULL, 904, "Kayıt Güncellenemedi!");
    }
} elseif ($islem == "GET") {
    $sorgu = $db->query("select * from coordinate where coordinate_id=$veriler[id]", PDO::FETCH_ASSOC);
    if ($sorgu->rowCount() > 0) {
        foreach ($sorgu as $val) {
            $koordinat = array("x" => $val["coordinate_x"], "y" => $val["coordinate_y"], "z" => $val["coordinate_z"]);
        }
        islem($koordinat['x'],$koordinat['y'],$koordinat['z'], 900, "Kayıt Listelendi!");
    } else {
        islem(NULL,NULL,NULL, 902, "Kayıt Bulunamadı!");
    }
}    