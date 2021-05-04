<?php
$db=new PDO("mysql:host=localhost;dbname=deneme","root","");
?>
    <!doctype html>
    <html lang="en">
    <head>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>
    <header class="bg-dark">
            <i class="fas fa-user-plus fa-1x" style="margin-left: 380px;margin-bottom: 10px" data-toggle="modal" data-target="#kayitol"></i>
            <div id="yazi" style="margin-bottom: 10px;margin-left: 14px">
                <h8 data-toggle="modal" data-target="#kayitol">Kayıt Ol</h8>
            </div>
            <i class="fas fa-sign-in-alt fa-1x" style="margin-left: 60px;margin-bottom: 15px;margin-top: 3px;"data-toggle="modal" data-target="#uyegiris"></i>
            <div id="yazi2" style="margin-bottom: 10px; margin-left: 14px; margin-right:20px" data-toggle="modal" data-target="#uyegiris">
                <h8>Giriş Yap</h8>
            </div>
            </div>
        </nav>
    </header>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="kayitol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label>Kayıt Ol</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="kayit_form" method="POST" role="kayit_form">
                        <label>Ad</label>
                        <input class="form-control" type="text" name="uye_ad" placeholder="Ad">
                        <label>Soyad</label>
                        <input class="form-control" type="text" name="uye_soyad" placeholder="Soyad">
                
                        <br>
                        <input type="hidden" name="k">
                        <button type="button" class="btn btn-success" style="width: 200px; margin-left: 130px;background: #1c2331" id="save" name="save">Kayıt Ol</button>  </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="uyegiris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Üye Giriş</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="islem.php" method="POST" id="forms" role="forms">
                        <label>Adınız</label>
                        <i class="fas fa-user"></i>
                        <input class="form-control" type="text" name="uye_ad" placeholder="Kullanıcı Adı">
                        <label>Şifreniz</label>
                        <i class="fas fa-lock"></i>
                        <input class="form-control" type="password" name="uye_soyad" placeholder="Şifre">
                        <br>
                        <input type="hidden" name="g">
                        <button type="submit" class="btn btn-primary" style="margin-left:135px;background: #1c2331;width: 200px" id="giris">Giriş Yap</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
   
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Hakkımızda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Burası Web Programlama, Mobil Uygulama, Web Tasarımı, Veritabanı ve daha bir sürü kategoride geliştirme yapan insanların özgeçmişini oluşturduğu ve iş verenlerin onları bulduğu ortam. Daha detaylı olursa;
                    Php, Phyton, Mysql, MongoDB, Java, C, C++, Photoshop, İllüstratör, Bootstrap, Materialize.css ve daha yüzlerce programlamada, tasarımda veya veritabanında kullanabileceğin şuan buraya yazamadığımız teknolojilerin olduğu bir yer.
                    Kısaca buraya kayıt ol, özgeçmiş oluşturma sayfasına git senden istediğimiz bilgileri gir sen iş arama iş seni bulsun.
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="width: 200px; height: 60px;margin-top: 355px;margin-left: 40px;background: none;border: 1px solid white;color: white">Hakkımızda</button>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" style="width: 200px; height: 60px;margin-top: 355px;margin-left: 40px;background: none;border: 1px solid white;color: white">ÖZGEÇMİŞ OLUŞTUR</button>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#iletisim" style="width: 200px; height: 60px;margin-top: 355px;margin-left: 40px;background: none;border: 1px solid white;color: white">İletişim</button>
    <!-- Modal -->
    <div class="modal fade" id="iletisim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">İletişim</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form1" class="form-signin" novalidate method="post">
                        <label for="validationCustom01" class="sr-only">Ad</label>
                        <input type="text" class="form-control" id="user" placeholder="Ad" required name="user" autofocus>
                        <br>

                        <label for="" class="sr-only">Soyad</label>
                        <input id="soyad" class="form-control" type="text" name="soyad" placeholder="Soyad" autofocus>
                        <br>
                        <label for="" class="sr-only">E-Mail</label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="E-mail" autofocus required="">
                        <br>

                        <label for="" class="sr-only">Mesajınız</label>
                        <textarea id="mesaj" class="form-control" typeof="mesaj" rows="3" placeholder="Mesajınız" name="mesaj" autofocus></textarea>

                        <input type="hidden" name="message_button">
                        <button class="btn btn-primary" type="submit" style="margin-top: 20px;margin-left: 160px;background: #1c2331" id="mesaj_kayit" name="mesaj_kayit">Mesajı Gönder</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="alertSI" class="alert alert-success alert-dismissible fade show" role="alert" style="height: 100px;background: #1c2331; margin-top: 200px;color: white"><i class="fas fa-thumbs-up"></i>Mesaj Gönderildi<br>En Kısa Zamanda İletişime Geçilicek</div>
        <div id="alertNO" class="alert alert-danger" role="alert" style=" margin-top: 200px;height: 100px">Kayıt başarısız boş alanları gözden geçirin 🙃 </div>
    </div>
    </div>
    </div>
    <script>
    $(document).ready(function(){
        $('#save').click( function(){
            $.ajax({
                url:"islemler.php",
                type:"post",
                dataType:'json',
                data:$('#kayit_form').serialize(),
                success:function(data){
                    alert(data['verilecek_mesaj']);
                }
            })
        })
    })
    </script>
    <script type="text/javascript">
      $(document).ready(function (){
            $('#forms').submit(function (){
                var columnState=$(this).attr('id');
                var formID=$('#'+columnState);
                $.ajax({
                    url: "islemler.php",
                    type: "POST",
                    dataType: 'json',
                    data: formID.serialize(),
                    success:function (data){
                        if (data.status=='success'){
                            swal({
                                title: "Sonuç",
                                text: data.message,
                                icon: data.status,
                                button: "Tamam",
                            });
                            window.location="yenisayfa.php";
                        }else{
                            swal({
                                title: "Sonuç",
                                text: data.message,
                                icon: data.status,
                                button: "Tamam",
                            });
                        }
                    }
                });
                return false;
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#alertSI").hide();
            $("#alertNO").hide();
            $("#form1").submit(function(e){
                e.preventDefault();
                user = $.trim($("#user").val());
                soyad=$.trim($("#soyad").val());
                email=$.trim($("#email").val());
                mesaj=$.trim($("#mesaj").val());
                if(user.length>0&& soyad.length>0&&email.length>0&&mesaj.length>0){
                    $("#alertSI").fadeTo(2000, 500).slideUp(500, function() {
                        $("#alertSI").slideUp(500);
                        $.ajax({
                            url:"islemler.php",
                            type:"POST",
                            dataType:'json',
                            data:$('#form1').serialize(),
                            success:function (data){
                                alert(data['mesaj']);
                            }
                        })
                    });
                }else{
                    $("#alertNO").fadeTo(2000, 500).slideUp(500, function() {
                        $("#alertNO").slideUp(500);
                    });
                }
            });
        });
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    </body>
    </html>