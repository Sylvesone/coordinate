# Koordinat Sistemi Projesi Açıklama

Elimizde bir cihaz bulunmaktadır. Bu cihaz x,y ve z koordinatlarında hareket edebilmektedir. Cihazın hareket edebilmesi için, uzaktan bir kontrolör tarafından x , y veya z koordinatlarında ilerletilmesi gerekmektedir.
Bir client bir de server tarafınız olmalı. Server tarafı cihaza komutlar göndererek yeni koordinatlarına doğru hareket ettirme işlemini iletmeli. Client tarafı ise ( cihazın üzerinde kuruludur ) aldığı hareket bilgilerini işleyerek son konum bilgisini server’a iletmelidir.
Backend işlemler için PHP dili kullanılmalı ve OOP yaklaşımı kullanılarak geliştirilmelidir.
RESTful API arabirimi kullanılmalıdır.
Örnek ;
 
Cihazın başlangıç pozisyonu 0,0,0 olarak seçilmelidir. Server tarafında Aşağı , Yukarı , Sağ , Sol , İleri ve Geri butonları bulunmalıdır. Aşağı butonuna her basıldığında z koordinatında 1 birim aşağıya yönde ilerletilmeli, sol butonuna basıldığında x koordinatında 1 birim sola doğru ilerletilmeli ,  ileri butonuna basıldığında 1 birim y koordinatında ileri yönde ilerletilmelidir. Komutlar her yön butona basıldığında client tarafına iletilebilir veya ilerleme komutları kayıt altına alınarak “ Gönder “ butonuna basıldığında toplu olarak iletilebilir ( 2. Opsiyon artı puan olarak değerlendirilecektir ).

Cihaza istekler gönderildikten sonra cihaz nihai konumunu aldığında son konum bilgisini server’a dönmelidir. ( “ 0, 0, 0 “ konumunda olan bir cihaz düşünelim. X koordinatına 2, y koordinatına 1 birim ilerleme gönderdiğimizi varsayalım. Bu durumda cihaz server tarafına cevap olarak  “ 2, 1, 0 “ değerini dönmelidir. ). Bu sonuç server tarafındaki kontrolör tarafından ekranda görüntülenebilmelidir. ( Son Konum : x , y, z )


## Kurulum

-Tüm dosya ve klasörleri "coordinat" klasöründen sunucunuza yükleyin, web kök dizininize yerleştirin. Web kökü bazı sunucularda farklıdır, cPanel'de public_html/ve Plesk'te httpdocs/.

-localhost/phpmyadmin link üzerinden "sql" dosyası içindeki xyz.sql dosyasını veritabanınıza tablo oluşturduktan sonra import ediniz.

-Controller dosyası içinden "connect.php" içinden oluşturduğunuz tablo adını güncelleyiniz.

## Test
[Server](https://muratbariskoroglu.com/coordinate/sunucu.php) - Sunucu erişim linki

[Client](https://muratbariskoroglu.com/coordinate/client.php) - Client erişim linki

## Açıklama

- Sunucu tarafından yön tuşlarına tıklandığı zaman x, y veya z inputlatı koordinat verilerini almaktadır fakat anlık olarak client kısmına point'in hareketi için veri gitmemektedir. 

- Sunucu tarafından x, y veyaz z inputlarına koordinat verileri girildikten sonra gönder işlemiyle client kısmındaki point hareket etmektedir. Koordinat sisteminin altında koordinat verileri yazmaktadır.
