<?php
include 'Controller/connect.php';
$id = 1;
$veriler = array("id" => $id, "x" => "0", "y" => "0", "z" => "0");

$curl = curl_init("http://localhost/coordinat/api.php");
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET"); //GET, POST, PUT, DELETE
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($veriler));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$cevap = curl_exec($curl);
curl_close($curl);

$sonuc = json_decode($cevap, true);
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
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="coordinate-theme">
                <h4>Koordinat Sistemi</h4>    
                <div class="css-ccs">
                    <div class="point" id="point"></div>
                    <!-- ... -->
                </div>
                <div class="input-group mb-3" style="display: none;">
                    <span class="input-group-text" id="basic-addon1">X</span>
                    <input type="text" class="form-control" id="x" name="x" value="<?php echo $sonuc['x']; ?>" placeholder="X" aria-label="X" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3" style="display: none;">
                    <span class="input-group-text" id="basic-addon1">Y</span>
                    <input type="text" class="form-control" id="y" name="y" value="<?php echo $sonuc['y']; ?>" placeholder="Y" aria-label="Y" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3" style="display: none;">
                    <span class="input-group-text" id="basic-addon1">Z</span>
                    <input type="text" class="form-control" id="z" name="z" value="<?php echo $sonuc['z']; ?>" placeholder="Z" aria-label="Z" aria-describedby="basic-addon1">
                </div>
                <figure>
                    <output data-x="-3"></output>
                    <output data-x="0"></output>
                    <output data-x="1"></output>
                    <output data-x="2"></output>
                </figure>
                <div>
                    <h2>Son Konum Bilgileri</h2>
                    <p>
                        X:<?php echo $sonuc['x']; ?> <br>
                        Y:<?php echo $sonuc['y']; ?> <br>
                        Z:<?php echo $sonuc['z']; ?> <br>
                    </p>
                </div>
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