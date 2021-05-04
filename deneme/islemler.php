<?php
$db=new PDO("mysql:host=localhost;dbname=deneme","root","");
$data=array();
if (isset($_POST['g'])){
    if (empty($_POST['kullanici_adi'])){
        $data['status']='error';
        $data['message']='Ad Boş Olamaz';
        die(json_encode($data));
    }elseif (empty($_POST['password'])){
        $data['status']='error';
        $data['message']='Soyad Boş Olamaz';
        die(json_encode($data));
    }else{
        $giris=$db->prepare("SELECT * FROM deneme WHERE 
    uye_ad=:uye_ad and 
    uye_soyad=:uye_soyad
    ");
        $giris->execute(array(
            'uye_ad'=>$_POST['uye_ad'],
            'uye_soyad'=>$_POST['uye_soyad']
        ));
        $say=$giris->rowCount();
        if ($say>0){
            $data['status']='success';
            $data['message']='Giriş Başarılı';
            die(json_encode($data));
        }else{
            $data['status']='error';
            $data['message']='Kullanıcı Adı Veya Şifre Hatalı';
            die(json_encode($data));
        }

    }
    echo json_encode($data);
}
if (isset($_POST['k'])){
    if (empty($_POST['uye_ad'])){
        $mesaj['verilecek_mesaj']='Kullanıcı Adı Boş Olamaz';
    }elseif (empty($_POST['uye_soyad'])){
        $mesaj['verilecek_mesaj']='Şifre Boş Olamaz';
    }else{
        $kayit=$db->exec("INSERT INTO deneme SET 
    uye_ad='".$_POST['uye_ad']."',
    uye_soyad='".$_POST['uye_soyad']."'
    ");
        $mesaj['verilecek_mesaj']='Kayıt Oldunuz';
    }
    echo json_encode($mesaj);
}
?>