var myTopmyLeft;
var myTop;
var myRight;
var myTopz;
var myLeftz;
var $element = $('#point'); //Burada css kutu ifadesini çağırdık

function sol() { //Öncelikle sol yön tuşuna bastığımızda olan işlemler için fonksiyon oluşturduk ve adına sol verdik.
    var x = document.getElementById("x"); //İnputtan değer x id'li veriyi seçtik
    x.value = Number(x.value) - 1; //-1 diye düşürdük
    console.log(x.value);
}
//Sağ yönlendirme butonuna bastoğı zaman x ekseninde yapacağı + deger
function sag() { //Diğer fonksiyonlar da aynı mantıkla çalıştığından açıklama yazmaya gerek olmadığını düşündük.
    var x = document.getElementById("x");
    x.value = Number(x.value) + 1;
    console.log(x.value);
}
//Yukarı yönlendirme butonuna bastoğı zaman y ekseninde yapacağı + deger
function yukari() { //Burası yukarı yön tuşu için yapılmış fonksiyon.
    var y = document.getElementById("y");
    y.value = Number(y.value) + 1;
    console.log(y.value);
}
//Aşağı yönlendirme butonuna bastoğı zaman y ekseninde yapacağı - deger
function asagi() { //Burası da aşağı yön tuşu için yapılmış fonksiyon.
    var y = document.getElementById("y");
    y.value = Number(y.value) - 1;
    console.log(y.value);
}
//Çapraz yönlendirme butonuna bastoğı zaman z ekseninde yapacağı + deger
function yukariz() { //Burası da aşağı yön tuşu için yapılmış fonksiyon.
    var z = document.getElementById("z");
    z.value = Number(z.value) + 1;
    console.log(z.value);
}
//Çapraz yönlendirme butonuna bastoğı zaman z ekseninde yapacağı - deger
function asagiz() { //Burası da aşağı yön tuşu için yapılmış fonksiyon.
    var z = document.getElementById("z");
    z.value = Number(z.value) - 1;
    console.log(z.value);
}

//İnputlardan gelen verileri aldık
var inputX = document.getElementById("x").value;
var inputY = document.getElementById("y").value;
var inputZ = document.getElementById("z").value;

//eğer x değeri 0'dan büyükse x ekseninde + yöne hareket edecek
if (inputX > 0) {
    for (let i = 0; i < inputX; i++) {
        myLeft = $('#point').css('margin-left');
        myLeft = myLeft.substring(0, myLeft.length - 2);
        console.log(myLeft);
        myLeft++;
        myLeft = myLeft + 129;
        $('#point').css('margin-left', myLeft);
        var x = document.getElementById("x");
        x.value = Number(x.value);
    }
}
//eğer x değeri 0'dan küçükse x ekseninde - yöne hareket edecek
else if (inputX < 0) {
    for (let i = 0; i > inputX; i--) {
        myLeft = $('#point').css('margin-left');
        myLeft = myLeft.substring(0, myLeft.length - 2);
        console.log(myLeft);
        myLeft--;
        myLeft = myLeft - 129;
        $('#point').css('margin-left', myLeft);
        var x = document.getElementById("x");
        x.value = Number(x.value);
    }
}
//eğer y değeri 0'dan büyükse y ekseninde + yöne hareket edecek
if (inputY > 0) {
    for (let i = 0; i < inputY; i++) {
        var myTop = $('#point').css('margin-top');
        myTop = myTop.substring(0, myTop.length - 2);
        console.log(myTop);
        myTop--;
        myTop = myTop - 129;
        $('#point').css('margin-top', myTop);
        var y = document.getElementById("y");
        y.value = Number(y.value);
    }
} 
//eğer y değeri 0'dan küçükse y ekseninde - yöne hareket edecek
else if (inputY < 0) {
    for (let i = 0; i > inputY; i--) {
        var myTop = $('#point').css('margin-top');
        myTop = myTop.substring(0, myTop.length - 2);
        console.log(myTop);
        myTop++;
        myTop = myTop + 129;
        $('#point').css('margin-top', myTop);
        var y = document.getElementById("y");
        y.value = Number(y.value);
    }
}

//eğer z değeri 0'dan büyükse z ekseninde + yöne hareket edecek
if (inputZ > 0) {
    for (let i = 0; i < inputZ; i++) {
        myTopz = $('#point').css('margin-top');
        myTopz = myTopz.substring(0, myTopz.length - 2);
        console.log(myTopz);
        myTopz++;
        myTopz = myTopz - 129;
        $('#point').css('margin-top', myTopz);

        myLeftz = $('#point').css('margin-left');
        myLeftz = myLeftz.substring(0, myLeftz.length - 2);
        console.log(myLeftz);
        myLeftz++;
        myLeftz = myLeftz + 129;
        $('#point').css('margin-left', myLeftz);
        var z = document.getElementById("z");
        z.value = Number(z.value);
    }
} 
//eğer z değeri 0'dan küçükse z ekseninde - yöne hareket edecek
else if (inputZ < 0) {
    for (let i = 0; i > inputZ; i--) {
        myTopz = $('#point').css('margin-top');
        myTopz = myTopz.substring(0, myTopz.length - 2);
        console.log(myTopz);
        myTopz--;
        myTopz = myTopz + 129;
        $('#point').css('margin-top', myTopz);

        myLeftz = $('#point').css('margin-left');
        myLeftz = myLeftz.substring(0, myLeftz.length - 2);
        console.log(myLeftz);
        myLeftz--;
        myLeftz = myLeftz - 129;
        $('#point').css('margin-left', myLeftz);
        var z = document.getElementById("z");
        z.value = Number(z.value);
    }
}