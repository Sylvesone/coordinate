<?php
include 'Controller/connect.php';
extract($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Cihaz Koordinat Yönetimi</title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style Css -->
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            Button ve veri gönderme işleri
            <div class="button col-lg-3">
                <a id="buttonleft" href="javascript:void(0);" onclick="sol();"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                <a id="buttonup" href="javascript:void(0);" onclick="yukari();"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
                <a id="buttondown" href="javascript:void(0);" onclick="asagi();"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                <a id="buttonright" href="javascript:void(0);" onclick="sag();"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>
            <div class="buttonz col-lg-3">
                <a id="buttonup" href="javascript:void(0);" onclick="yukariz();"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
                <a id="buttondown" href="javascript:void(0);" onclick="asagiz();"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
            </div>
            <div class="input">
                <form id="formsubmit" method="POST">
                    <?php
                    $get = $db->prepare("select * from coordinate where coordinate_id=:coordinate_id");
                    $get->execute(array('coordinate_id' => 1));
                    $getx = $get->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <h3>Son Konum Bilgisi</h3>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">X</span>
                        <input type="text" class="form-control" id="x" name="x" value="<?php echo $getx['coordinate_x']; ?>" placeholder="X" aria-label="X" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Y</span>
                        <input type="text" class="form-control" id="y" name="y" value="<?php echo $getx['coordinate_y']; ?>" placeholder="Y" aria-label="Y" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Z</span>
                        <input type="text" class="form-control" id="z" name="z" value="<?php echo $getx['coordinate_z']; ?>" placeholder="Z" aria-label="Z" aria-describedby="basic-addon1">
                    </div>
                    <input type="hidden" id="submit" name="submit"/>
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
// put your code here
?>
<!-- Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/main.js" text="text/javascript"></script>
</body>
</html>
<?php
if (isset($submit)) {
    $id = 1;
    $veriler = array("id" => $id, "x" => $x, "y" => $y, "z" => $z);

    $curl = curl_init("http://localhost/coordinat/api.php");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT"); //GET, POST, PUT, DELETE
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($veriler));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $cevap = curl_exec($curl);
    curl_close($curl);
    echo '<script type="text/javascript">
            swal({
            title: "Koordinatlar İletildi!",
            icon: "success",
            button: "Tamam",
            }).then(function () {
             window.location = " ";
        })</script>';
    
}
?>
