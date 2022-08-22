<?php
include('db.php');

if(isset($_POST['uye_ekle_btn'])){
    $gelenİsim = FiltreGüvenliği($_POST["k_adi"]);
    $geleSoyisim = FiltreGüvenliği($_POST["k_soyadi"]);
    $gelenKullaniciAdi = FiltreGüvenliği($_POST["yeniuyeadi"]);
    $gelenSifre = FiltreGüvenliği(md5($_POST['uyesifre']));
    $kriptolama = hash('sha256', $gelenSifre); // //anahtar hash fonksiyonu ile sha256 algoritmasi ile sifreleniyor

    
    if(true){
        $KayitEkle = $db->prepare("INSERT INTO uyeler SET adi = ?, soyadi = ?,  kullaniciadi = ?, sifre = ?");
        // Execute() : INSERT, DELETE, UPDATE) çalıştırır ve geri dönüş değeri olarak eklenen, silinen veya güncellenen kayıt sayısını verir. 
        if(true){
            $kullaniciEkle = $KayitEkle->execute([
                $gelenİsim,
                $geleSoyisim,
                $gelenKullaniciAdi,
                $kriptolama
            ]);

            if($kullaniciEkle){
                echo "<script>alert('Tebrikler Kaydiniz Başarılı, Giriş Sayfasına Yönlendiriliyorsunuz');</script>";
                header('Refresh:1;giris.php'); 
            }
            
        }else{  
             if(true){
                echo "<script>alert('Kayidiniz Başarısız, Kayit Sayfasına Yönlendiriliyorsunuz');</script>";
                header('Refresh:2;kayitol.php'); 
            }
        }
    }
    }elseif(empty($gelenKullaniciAdi && $kriptolama)){
        echo "<script>alert('Lütfen Bilgileri Eksi Girmeyiniz')</script>";
        header('Refresh:1;kayitol.php'); 
    }

/* *************  Uye Giriş Sayfasın Sonu  ***********  */




?>