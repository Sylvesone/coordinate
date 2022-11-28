# Koordinat Sistemi Projesi Açıklama


- Sunucu tarafından yön tuşlarına tıklandığı zaman x, y veya z inputları koordinat verilerini almaktadır fakat anlık olarak client kısmına point'in hareketi için veri gitmemektedir. 

- Sunucu tarafından x, y veya z inputlarına koordinat verileri girildikten sonra gönder işlemiyle client kısmındaki point sayfayı yeniledikten sonra hareket etmektedir. Koordinat sisteminin altında son koordinat verileri yazmaktadır.


## Kurulum

-Tüm dosya ve klasörleri "coordinat" klasöründen sunucunuza yükleyin, web kök dizininize yerleştirin. Web kökü bazı sunucularda farklıdır, cPanel'de public_html/ve Plesk'te httpdocs/.

-localhost/phpmyadmin link üzerinden "sql" dosyası içindeki xyz.sql dosyasını veritabanınıza tablo oluşturduktan sonra import ediniz.

-Controller dosyası içinden "connect.php" içinden oluşturduğunuz tablo adını güncelleyiniz.

## Test
[Server](https://muratbariskoroglu.com/coordinate/sunucu.php) - Sunucu erişim linki

[Client](https://muratbariskoroglu.com/coordinate/client.php) - Client erişim linki

