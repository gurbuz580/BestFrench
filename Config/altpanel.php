
<?php include_once 'Config/connection.php';?>
<?php include_once 'Config/header.php';?>
<?php include_once 'Config/modals.php';?>

<script type="text/javascript">var eklenecekdizi = []; var cikarilacakdizi = []; var eklenecekfiyatlar = [];  </script>




<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<header id="header"  class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between ">
      <a href="index.php" class="logo d-flex align-items-center" >
        <img src="Plugins/img/logo.png"  alt="">
        <span class="d-none d-lg-block">Best French Street Food</span>
      </a>
    </div>

<!-- SİPARİS NO GİZLİ İNLPUT -->
<input type="hidden" id="siparisno" value="">
<!-- SİPARİS NO GİZLİ İNLPUT -->







 <!-- RESTORAN DURUM PANELİ -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a style="margin-right: 10px;" class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
         <button id="restorandurum"  class="btn btn-warning" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
<?php $sorgu = $conn->query("SELECT restoranDurum FROM restoran");

               $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

                 echo $cikti["restoranDurum"];

                  if($cikti["restoranDurum"]=="Restoran Açık")
                  {
                   echo '<script>
                    
                    document.getElementById("restorandurum").setAttribute("class", "btn btn-success");
 
              </script>';

                  }

                   else if($cikti["restoranDurum"]=="Restoran Yoğun")
                  {
                   echo '<script>
                    
                    document.getElementById("restorandurum").setAttribute("class", "btn btn-warning");
 
              </script>';

                  }

                   else if($cikti["restoranDurum"]=="Restoran Kapalı")
                  {
                   echo '<script>
                    
                    document.getElementById("restorandurum").setAttribute("class", "btn btn-danger");
 
              </script>';

                  }
                ?>
</button>
          </a><!-- End Profile Iamge Icon -->
          </li>
      </ul>
    </nav>
      </header> 

      </body>

<!-- ÜST HEADER -->

<!-- RESTORAN DURUM PANELİ -->






<!-- User GİRİŞ OLDUĞU TAKDİRDE DEĞİŞECEK DROPDOWN -->

  <header id="header" class="header fixed-bottom d-flex align-items-center"  style="justify-content: center;">

<nav class="header-nav">
      <ul class="d-flex align-items-center ">

       
       <li class="nav-item dropdown pe-3" id="kullaniciGirisAlani" style="display: none;">


          <div class="dropdown">
<a class="nav-profile" id="dropdownMenuButton" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img id="userlogin" src="Plugins/img/userlogin.png" alt="">
          </a>

<ul class="dropdown-menu dropdown-menu-end  " style="margin-bottom: 22px;" >
          
         
            <li>
              <a class="dropdown-item d-flex align-items-center" href="hesabim.php">
                <i class="bi bi-person"></i>
                <span>Hesabım</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-basket3"></i>
                <span>Siparişlerim</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Yardım</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a onclick="session_sifirla();" href="../pages/cikis.php" class="dropdown-item d-flex align-items-center" >
                <i class="bi bi-box-arrow-right"></i>
                <span >Güvenli Çıkış</span>
              </a>
            </li>

          </ul>
          </div>
           </li>



    


        <li class="nav-item dropdown pe-3" id="kullaniciGirisAlani1">

          <a class="nav-profile" id="userlogina" href="" data-toggle="modal" data-target="#loginmodal">
            <img id="userlogin" src="Plugins/img/user.png" alt="">
          </a>

  
         </li>



   

      
        <li class="nav-item dropdown pe-3">

          <a class="nav-profile" href="./menu.php">
           <img src="Plugins/img/menu.png" alt="">
          </a>
         

        </li>

        <li class="nav-item dropdown pe-3">

          <a class="nav-profile" href="../sepetim.php">
            <img src="Plugins/img/sepet.png" alt="">
            <span  class="badge bg-danger badge-number" id="sepeturunsayisibadge">0</span>
          </a>
          <!-- End Profile Iamge Icon -->

        </li>
        <li class="nav-item dropdown pe-3">

          <a class="nav-profile" href="index.php">
            <img src="Plugins/img/indirim.png" alt="">
          </a>
          <!-- End Profile Iamge Icon -->

        </li>
        <li class="nav-item dropdown pe-3">

          <a class="nav-profile" href="index.php">
            <img src="Plugins/img/tel.png" alt="">

          </a>
         

        </li>

       
      </ul>
</nav>
  </header>
<!-- User GİRİŞ OLDUĞU TAKDİRDE DEĞİŞECEK DROPDOWN -->







</html>


<script>
function passwordgizleme() {
  if(document.getElementById('password').type=="text"){

    document.getElementById('password').type = 'password';

  }

  else if(document.getElementById('password').type=="password"){

    document.getElementById('password').type = 'text';

  }



}
</script>

<script>
function kayitpasswordgizleme() {
  if(document.getElementById('kayitpassword').type=="text"){

    document.getElementById('kayitpassword').type = 'password';

  }

  else if(document.getElementById('kayitpassword').type=="password"){

    document.getElementById('kayitpassword').type = 'text';

  }



}
</script>




<!-- GİRİŞ ALANI -->

<script >
$("#loginbutton2").on("click", function() {



var username=document.getElementById("username").value;
var password=document.getElementById("password").value;

 $.ajax
        (
        {
        url:'./Config/function.php?islem=girisyap', 
        type:'POST',
        data:
        {
        username   :username,
        password    :password
        },
        dataType:"json",
        success:function(data){


          if( data['kullaniciSorgu']=="1"){


            if( data['kullaniciTuru']=="0"){

              alert("hoşgeldin admin");

            }

            else{

              document.getElementById("kullaniciGirisAlani").style.display="";
              document.getElementById("kullaniciGirisAlani1").style.display="none";
              $('#loginmodal').modal('toggle');


               blurt(
                  'Giriş Başarılı!',
                  'Merhaba; hoşgeldiniz.',
                  'info'
                  );
              setTimeout(function () {location.reload();}, 2000)


            }


            

          }

          else{


                  blurt(
                  'Şifren yanlış olabilir mi?',
                  'Kullanıcı Adı veya Şifre hatalı :(',
                  'error'
                  );



          }

         
         


   
       
        }
        }
        )

});
</script>
<!-- GİRİŞ ALANI -->





<!-- KAYIT ALANI -->

<script >
$("#kayit").on("click", function() {


var kullaniciadi            = document.getElementById("kayitusername").value;
var sifre                   = document.getElementById("kayitpassword").value;
var email                   = document.getElementById("email").value;
var isim                    = document.getElementById("isim").value;
var soyisim                 = document.getElementById("soyisim").value;
var telno                   = document.getElementById("telno").value;
var il                      = document.getElementById("il").value;
var ilce                    = document.getElementById("ilce").value;
var adres                   = document.getElementById("adres").value;
var binano                  = document.getElementById("binano").value;
var kapino                  = document.getElementById("kapino").value;
var adrestarifi             = document.getElementById("adrestarifi").value;

if(kullaniciadi==""||sifre==""||email==""||isim==""||soyisim==""||telno==""||il==""||ilce==""||adres==""||binano==""||kapino==""||adrestarifi==""){


blurt(
                  'Eksik Kaldı!',
                  'Lütfen tüm alanları eksiksiz doldurunuz.',
                  'warning'
                  );
return;


}




$.ajax
        (
        {
        url:'./Config/function.php?islem=kayitol', 
        type:'POST',
        data:
        {
        kullaniciadi   :kullaniciadi,
        sifre          :sifre,
        email          :email,
        isim           :isim,
        soyisim        :soyisim,
        telno          :telno,
        il             :il,
        ilce           :ilce,
        adres          :adres,
        binano         :binano,
        kapino         :kapino,
        adrestarifi    :adrestarifi

        },
        dataType:"json",
        success:function(data){

         if(data=="1"){
           blurt(
                  'Daha önceden kayıt olmuş olabilir misin?',
                  'Bu kullanıcı adı ile daha önceden kayıt olunmuş. Lütfen yeni bir kullanıcı adı ile tekrar deneyin.',
                  'error'
                  );

         }

         else{

          blurt(
                  'Başarılı!',
                  'Kayıt işlemi başarılı. Lütfen giriş yapınız.',
                  'info'
                  );

            setTimeout(function(){window.location.replace('../index.php');}, 2000);//wait 2 seconds



         }


        }
        

}
)


});
</script>
<!-- KAYIT ALANI -->



<!-- KULLANICI KAYITLIMI SOR -->
<script type="text/javascript">
var input = document.querySelector('#kayitusername');

input.addEventListener('input', function()
{
    

    $.ajax
        (
        {
        url:'./Config/function.php?islem=kullanicivarmiuyarisi', 
        type:'POST',
        data:
        {
        kullaniciadi   :input.value

        },
        dataType:"json",
        success:function(data){


          if(input.value==""){

             document.getElementById("dahaoncekayit").style.display="none";
         document.getElementById("uygunkuladi").style.display="none";
          }

         else if(data=="1"){

          document.getElementById("dahaoncekayit").style.display="";
          document.getElementById("dahaoncekayit").style="margin-bottom:25px;";

         document.getElementById("uygunkuladi").style.display="none";

         }

         else{

          document.getElementById("dahaoncekayit").style.display="none";
         document.getElementById("uygunkuladi").style.display="";
         document.getElementById("uygunkuladi").style="margin-bottom:25px;";


         }


        }
        

}
)


});
</script>
<!-- KULLANICI KAYITLIMI SOR -->

<script type="text/javascript">
  
function SEPETE_URUN_EKLE(e){


var urunid=e.id;



$.ajax
        (
        {
        url:'./Config/function.php?islem=eklenecekurunmodalacek', 
        type:'POST',
        data:
        {
        urunid   :urunid
        },
        dataType:"json",
        success:function(data){




document.getElementById("urunIdInput").value=urunid;


var ekle1=document.getElementById("ekle1").innerHTML=data['ekle1'];
var ekle1fiyat=document.getElementById("ekle1").value=data['ekle1fiyat'];

var ekle2=document.getElementById("ekle2").innerHTML=data['ekle2'];
var ekle2fiyat=document.getElementById("ekle2").value=data['ekle2fiyat'];

var ekle3=document.getElementById("ekle3").innerHTML=data['ekle3'];
var ekle3fiyat=document.getElementById("ekle3").value=data['ekle3fiyat'];

var ekle4=document.getElementById("ekle4").innerHTML=data['ekle4'];
var ekle4fiyat=document.getElementById("ekle4").value=data['ekle4fiyat'];

var ekle5=document.getElementById("ekle5").innerHTML=data['ekle5'];
var ekle5fiyat=document.getElementById("ekle5").value=data['ekle5fiyat'];


var ekle6=document.getElementById("ekle6").innerHTML=data['ekle6'];
var ekle6fiyat=document.getElementById("ekle6").value=data['ekle6fiyat'];

var ekle7=document.getElementById("ekle7").innerHTML=data['ekle7'];
var ekle7fiyat=document.getElementById("ekle7").value=data['ekle7fiyat'];






var cikar1=document.getElementById("cikar1").innerHTML=data['cikar1'];
var cikar2=document.getElementById("cikar2").innerHTML=data['cikar2'];
var cikar3=document.getElementById("cikar3").innerHTML=data['cikar3'];
var cikar4=document.getElementById("cikar4").innerHTML=data['cikar4'];
var cikar5=document.getElementById("cikar5").innerHTML=data['cikar5'];






          
document.getElementById("urunresimmodal").src=data['urunResim'];
document.getElementById("urunresimmodal").name=data['urunResim'];

document.getElementById("urunadimodal").innerHTML=data['urunAdi'];
document.getElementById("urunfiyatimodal").innerHTML=data['urunFiyati'];


if(ekle1!==null){

  document.getElementById("ekle1").style.display="";
}
else{
  document.getElementById("ekle1").style.display="none"; 
}

if(ekle2!==null){

  document.getElementById("ekle2").style.display="";


}

else{
  document.getElementById("ekle2").style.display="none"; 
}
if(ekle3!==null){

  document.getElementById("ekle3").style.display="";


}

else{
  document.getElementById("ekle3").style.display="none"; 
}
if(ekle4!==null){

  document.getElementById("ekle4").style.display="";


}

else{
  document.getElementById("ekle4").style.display="none"; 
}

if(ekle5!==null){

  document.getElementById("ekle5").style.display="";


}

else{
  document.getElementById("ekle5").style.display="none"; 
}

if(ekle6!==null){

  document.getElementById("ekle6").style.display="";


}

else{
  document.getElementById("ekle6").style.display="none"; 
}

if(ekle7!==null){

  document.getElementById("ekle7").style.display="";


}

else{
  document.getElementById("ekle7").style.display="none"; 
}




if(cikar1!==null){

  document.getElementById("cikar1").style.display="";
}
else{
  document.getElementById("cikar1").style.display="none"; 
}

if(cikar2!==null){

  document.getElementById("cikar2").style.display="";


}

else{
  document.getElementById("cikar2").style.display="none"; 
}
if(cikar3!==null){

  document.getElementById("cikar3").style.display="";


}

else{
  document.getElementById("cikar3").style.display="none"; 
}
if(cikar4!==null){

  document.getElementById("cikar4").style.display="";


}

else{
  document.getElementById("cikar4").style.display="none"; 
}

if(cikar5!==null){

  document.getElementById("cikar5").style.display="";


}

else{
  document.getElementById("cikar5").style.display="none"; 
}




           
        }
        }
        )





}

</script>






<!-- Sepete ekle butonuna tıklayınca -->


!-- GİRİŞ ALANI -->

<script>
$("#sepeteeklebutton").on("click", function() {

var urunFiyat="";
var urunadi=document.getElementById("urunadimodal").innerHTML;
var urunadet=document.getElementById("urunadetmodal").value;
var kullaniciId=<?php if(isset($_SESSION['kullaniciId'])) { echo $_SESSION['kullaniciId']; } else{ echo '0';} ?>;
var urunid=document.getElementById("urunIdInput").value;


if(kullaniciId=="0"){

 blurt(
                  'Lütfen Giriş Yapın :)',
                  'Sepetine ürün eklemek ve sipariş vermek için giriş yapmalısın. Giriş yapmak için alt panelde bulunan kullanıcı ikonunu kullanabilirsin.',
                  'error'
                  );

return;
}




if (sessionStorage.getItem("key") === null) {
   sessionStorage.setItem('key', generateId(20)); 
}




var key=sessionStorage.getItem("key");

 var eklenecekurunler=eklenecekdizi.toString();

 var cikarilacakurunler=cikarilacakdizi.toString();

if (eklenecekfiyatlar.length === 0) { 
ekstrafiyatfarki="0";
 }

 else{

  const islemYapanMetod = (toplam, simdikiDeger) => toplam + simdikiDeger;
var ekstrafiyatfarki=eklenecekfiyatlar.map(Number).reduce(islemYapanMetod);
 }







$.ajax
        (
        {
        url:'./Config/function.php?islem=urundetaycek', 
        type:'POST',
         async: false,
        data:
        {
        urunid   :urunid
        },
        dataType:"json",
        success:function(data){



         urunFiyat=data['urunFiyati'];

         
            
        }
        }
        )


     






var urunResim=document.getElementById("urunresimmodal").name;




$.ajax
        (
        {
        url:'./Config/function.php?islem=sepeteurunekle', 
        type:'POST',
        data:
        {
        urunid              :urunid,
        urunadet            :urunadet,
        kullaniciId         :kullaniciId,
        key                 :key,
        eklenecekurunler    :eklenecekurunler,
        cikarilacakurunler  :cikarilacakurunler,
        urunadi             :urunadi,
        ekstrafiyatfarki    :ekstrafiyatfarki,
        urunFiyat           :urunFiyat,
        urunResim           :urunResim




        
        },
        dataType:"json",
        success:function(data){

        blurt(
                  'Sepet doluyor :)',
                  data,
                  'info'
                  );



        eklenecekdizi=[];
        cikarilacakdizi=[];
        eklenecekfiyatlar=[];


$('#urunusepeteeklemodal').modal('toggle');













$.ajax
        (
        {
        url:'./Config/function.php?islem=sepeturunsayisi', 
        type:'POST',
        data:
        {
                    
        },
        dataType:"json",
        success:function(data){



          document.getElementById("sepeturunsayisibadge").innerHTML=data[''];
         
            
        }
        }
        )


        }
        }
        )






});
</script>








<!-- GUID ID -->

<script type="text/javascript">
  



  function dec2hex (dec) {
  return dec.toString(16).padStart(2, "0")
}

// generateId :: Integer -> String
function generateId (len) {
  var arr = new Uint8Array((len || 40) / 2)
  window.crypto.getRandomValues(arr)
  return Array.from(arr, dec2hex).join('')
}

</script>

<!-- GUID ID -->




<script>
function urunDetay(sel) {

$('#urundetayimodal').modal('show');


var urunid=sel.value;



$.ajax
        (
        {
        url:'./Config/function.php?islem=urundetaycek', 
        type:'POST',
        data:
        {
        urunid   :urunid,
        
        },
        dataType:"json",
        success:function(data){

       document.getElementById("urundetayresim").src= data['urunResim'];
       document.getElementById("urundetayisim").innerHTML=data['urunAdi'];
       document.getElementById("urundetaydetay").innerHTML= data['urunAciklamasi'];

        }
        }
        )







}
</script>












<script type="text/javascript">
  
$('#urunusepeteeklemodal').on('hidden.bs.modal', function () {


        eklenecekdizi=[];
        cikarilacakdizi=[];
        eklenecekfiyatlar=[];




document.getElementById("ekle1").style="margin-right: 8px; margin-bottom: 10px; display:none;";
document.getElementById("ekle2").style="margin-right: 8px; margin-bottom: 10px; display:none;";
document.getElementById("ekle3").style="margin-right: 8px; margin-bottom: 10px; display:none;";
document.getElementById("ekle4").style="margin-right: 8px; margin-bottom: 10px; display:none;";
document.getElementById("ekle5").style="margin-right: 8px; margin-bottom: 10px; display:none;";
document.getElementById("ekle6").style="margin-right: 8px; margin-bottom: 10px; display:none;";
document.getElementById("ekle7").style="margin-right: 8px; margin-bottom: 10px; display:none;";


document.getElementById("cikar1").style="margin-right: 8px; margin-bottom: 10px; display: none;";
document.getElementById("cikar2").style="margin-right: 8px; margin-bottom: 10px; display: none;";
document.getElementById("cikar3").style="margin-right: 8px; margin-bottom: 10px; display: none;";
document.getElementById("cikar4").style="margin-right: 8px; margin-bottom: 10px; display: none;";
document.getElementById("cikar5").style="margin-right: 8px; margin-bottom: 10px; display: none;";


    document.querySelector('input[id="urunadetmodal"]').value = '1';
});



</script>




<script type="text/javascript">
  
var musteriid=sessionStorage.getItem('key');
$.ajax
        (
        {
        url:'./Config/function.php?islem=sepeturunsayisi', 
        type:'POST',
        data:
        {
        musteriid   :musteriid
        },
        dataType:"json",
        success:function(data){

          if(data['']===undefined){
            document.getElementById("sepeturunsayisibadge").innerHTML='0';
          }
          else{

           document.getElementById("sepeturunsayisibadge").innerHTML=data['']; 
          }
          
         
            
        }
        }
        )


</script>