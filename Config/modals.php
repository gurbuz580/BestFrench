
<!-- GİRİŞ YAP MODAL -->
  <div class="modal fade" id="loginmodal" tabindex="1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
  <div class="d-flex justify-content-center " style="align-items-center"> <img src="Plugins/img/logo.png" style="width:200px;"></div>
          
          
            <div  class="login-wrap p-1 p-md-5 pt-ms-1" >
                <div class="form-group mt-3 mb-4">
                  <input  type="text" class="form-control" name="username" id="username" required>
                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class=" fa fa-solid fa-user"></i> &nbsp;&nbsp;Kullanıcı Adı</label>
                </div>
                <div class="form-group mb-4">
                  <input id="password" type="password"name="password" id="password"  class="form-control" required>
                 <label class="form-control-placeholder" style="pointer-events:none;"><i class="fa fa-solid fa-key"></i>&nbsp;&nbsp; Şifre</label>
                  <span toggle="#password-field" onclick="passwordgizleme();" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                  <button id="loginbutton2" style="background-color: #f6c915; border-color:#f6c915;" class="form-control btn btn-danger rounded px-3">Giriş</button>
                </div>
                   <div class="form-group">
                  <button  class="nav-profile form-control btn btn-primary rounded px-3" data-toggle="modal" data-target="#kayitmodal">Kayıt Ol</button>
                </div>
          
                <div class="form-group d-md-flex">
                  <div class="w-50 text-left">
                    <label class="checkbox-wrap checkbox-primary mb-0">Beni Hatırla
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                    <a href="#">Şifremi Unuttum</a>
                  </div>
                </div>
                  <p class="social-media d-flex justify-content-center">
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa-brands fa-facebook"></span></a>
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa-brands fa-twitter"></span></a>
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa-brands fa-instagram"></span></a>

                  </p>
   
             
            </div>
       


        
                  </div>
                </div>
              </div>
<!-- GİRİŞ YAP MODAL -->






<!-- KAYIT OL MODAL -->

  <div class="modal fade" id="kayitmodal" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
  <div class="d-flex justify-content-center " style="align-items-center"> <img src="Plugins/img/logo.png" style="width:200px;"></div>
          
              
  <div  class="kayit-wrap p-5 p-md-5 pt-ms-1 container" >


  
  <span style="display: none;" class="badge bg-danger badge-number"  id="dahaoncekayit"> Bu kullanıcı adı ile daha önceden kayıt olunmuş.</span>
  <span style="display: none;" class="badge bg-success badge-number"  id="uygunkuladi"> Kullanıcı adı uygun.</span>


    <div class="row" style="margin-bottom: 5px;">

                <div class="col">

                <div class="form-group">

                  <input type="text" class="form-control" name="kayitusername" id="kayitusername" autocomplete="off" required >
                    
                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class=" fa fa-solid fa-user"></i> &nbsp;&nbsp;Kul. Adı</label>

                </div>
                </div>




                <div class="col">
                <div class="form-group">
                  <input type="password" name="kayitpassword" id="kayitpassword" autocomplete="off"  class="form-control" required>
                  <label class="form-control-placeholder" style="pointer-events:none;"><i class="fa fa-solid fa-key"></i> &nbsp;&nbsp;Şifre</label>
                  <span toggle="#password-field" onclick="kayitpasswordgizleme();" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
              </div>

 </div>




<div class="row" style="margin-bottom: 5px;">


 <div class="col">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" autocomplete="off" required >
                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; E-Mail</label>
                </div>
  </div>

 </div>






 <div class="row" style="margin-bottom: 5px;">


 <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" name="isim" id="isim" autocomplete="off" required >
                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class="fa fa-address-card" aria-hidden="true"></i> &nbsp;&nbsp;İsim</label>
                </div>
                </div>
                <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" name="soyisim" id="soyisim" autocomplete="off" required >
                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class="fa fa-address-card" aria-hidden="true"></i> &nbsp;&nbsp;Soyisim</label>
                </div>
                </div>

 </div>

  <div class="row" style="margin-bottom: 5px;">


 <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" name="telno" id="telno" autocomplete="off" required >
                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class="fa fa-phone" aria-hidden="true"></i>
 &nbsp;&nbsp;Telefon Numarası</label>
                </div>
                </div>
                

 </div>
  <div class="row" style="margin-bottom: 5px;">
  <div class="col">
                <div class="form-group">
                  <select class="form-control" name="il" id="il" style="height: 47.8px;">
                    <option value="Niğde">Niğde</option>
                  </select>
                  
                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;İl</label>
                </div>
                </div>
                <div class="col">
                <div class="form-group">
              
                  <select class="form-control" name="ilce" id="ilce" style="height: 47.8px;">
                    <option value="Merkez">Merkez</option>
                    <option value="Bor">Bor</option>

                  </select>


                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;İlçe</label>
                </div>
                </div>
 </div>


<div class="row" style="margin-bottom: 5px;">


 <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" name="adres" id="adres" autocomplete="off" required >
                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Adres</label>
                </div>
                </div>
                

 </div>

 <div class="row" style="margin-bottom: 5px;">


 <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" name="binano" id="binano" autocomplete="off" required >
                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class="fa fa-home" aria-hidden="true"></i>

 &nbsp;&nbsp;Bina No</label>
                </div>
                </div>


                <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" name="kapino" id="kapino" autocomplete="off" required >
                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class="fa fa-hand-rock-o" aria-hidden="true"></i>

 &nbsp;&nbsp;Kapı No</label>
                </div>
                </div>
                

 </div>


 <div class="row" style="margin-bottom: 5px;">


 <div class="col">
           

               
                <div class="form-group">

                  <textarea type="text" class="form-control" name="adrestarifi" id="adrestarifi" autocomplete="off" required></textarea>
                 
                  <label class="form-control-placeholder" style="pointer-events:none;" for="username"><i class="fa fa-hand-rock-o" aria-hidden="true"></i>

 &nbsp;&nbsp;Adres Tarifi</label>
                </div>
          
                

 </div>
 </div>






<div class="form-group">
                  <button  name="kayit" id="kayit" style="background-color: #f6c915;  border-color:#f6c915;" class="form-control btn btn-danger rounded px-3">Kayıt Ol</button>

                      </div>

                      <div class="form-group">
                  <button  name="kayit" data-dismiss="modal" id="kayit" style="background-color: #c9c9c9;  border-color:#c9c9c9;" class="form-control btn btn-danger rounded px-3">Vazgeç</button>

                      </div>
  </div>
   <p class="social-media d-flex justify-content-center">
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa-brands fa-facebook"></span></a>
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa-brands fa-twitter"></span></a>
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa-brands fa-instagram"></span></a>
                  </p>
         
          </div>
                
                                     
               

          </div>
          </div>

<!-- KAYIT OL MODAL -->




<!--SEPETE URUN EKLE MODAL -->




<div class="modal fade" id="urunusepeteeklemodal" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ürünü Sepete Ekle</h5>
                      <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                      <!-- UrunIdiçin gizli input -->
                      <input type="hidden" id="urunIdInput">
                      <!-- UrunIdiçin gizli input -->
                        
                    <div class="col-2 align-self-center">
                    </div>
                    <div class="col-4 align-self-center">
                    <b>Ürün Adı</b>
                    </div>
                    <div class="col-3 align-self-center">
                    <b>Fiyat</b>
                    </div>
                    <div class="col-3 align-self-center">
                    <b>Adet</b>
                    </div>
                    </div>
                    <div class="row">
                     <div class="col-2 align-self-center">
                     <img src="" style="margin-right: 20px;" id="urunresimmodal" name="" width="50" height="50" border="0" class="rounded-circle">
                        </div>  
                        <div class="col-4 align-self-center">
                        <h5 class="card-title" id="urunadimodal" style="text-color: red;"></h5>
                        </div>
                        <div class="col-3 align-self-center">
                        <h6 class="card-title" id="urunfiyatimodal"></h6>
                        </div> 
                        <div class="col-3 align-self-center">
                        <input type="number" id="urunadetmodal" class="form-control" value="1">
                        </div>            
                    </div>
                    <hr> 
                    <h5 class="card-title" style="text-color: red;">Lütfen Çıkarmak İstediğiniz Ürünleri Seçiniz</h5>

                    <div class="row">
                        <div class="col align-self-center">


                <button type="button" class="btn btn-outline-danger" onclick="urunozelliklericikar(this);"  style="margin-right: 8px; margin-bottom: 10px; display: none;" id="cikar1"></button>
                <button type="button" class="btn btn-outline-danger" onclick="urunozelliklericikar(this);"   style="margin-right: 8px; margin-bottom: 10px; display: none;" id="cikar2"></button>
                <button type="button" class="btn btn-outline-danger" onclick="urunozelliklericikar(this);"  style="margin-right: 8px; margin-bottom: 10px; display: none;" id="cikar3"></button>
                <button type="button" class="btn btn-outline-danger" onclick="urunozelliklericikar(this);"  style="margin-right: 8px; margin-bottom: 10px; display: none;" id="cikar4"></button>
                <button type="button" class="btn btn-outline-danger" onclick="urunozelliklericikar(this);"  style="margin-right: 8px; margin-bottom: 10px; display: none;" id="cikar5"></button>






             



                 
                    </div>

                   </div>
                <hr> 
                    <h5 class="card-title" id="tiklamayeri" style="text-color: red;">Lütfen Eklemek İstediğiniz Ürünleri Seçiniz</h5>

                    <div class="row">
                       

                        <div class="col align-self-center">


                          <input type="hidden" id="urunozellikeklenecekler">
                          
                        <button type="button" class="btn btn-outline-success" onclick="urunozellikleriekle(this);"  style="margin-right: 8px; margin-bottom: 10px; display:none;" id="ekle1"></button>
                        <button type="button" class="btn btn-outline-success"  onclick="urunozellikleriekle(this);" style="margin-right: 8px; margin-bottom: 10px; display:none;" id="ekle2"></button>
                        <button type="button" class="btn btn-outline-success"  onclick="urunozellikleriekle(this);" style="margin-right: 8px; margin-bottom: 10px; display:none;" id="ekle3"></button>
                        <button type="button" class="btn btn-outline-success"  onclick="urunozellikleriekle(this);" style="margin-right: 8px; margin-bottom: 10px; display:none;" id="ekle4"></button>
                        <button type="button" class="btn btn-outline-success"  onclick="urunozellikleriekle(this);" style="margin-right: 8px; margin-bottom: 10px; display:none;" id="ekle5"></button>
                        <button type="button" class="btn btn-outline-success"  onclick="urunozellikleriekle(this);" style="margin-right: 8px; margin-bottom: 10px; display:none;" id="ekle6"></button>
                        <button type="button" class="btn btn-outline-success"  onclick="urunozellikleriekle(this);" style="margin-right: 8px; margin-bottom: 10px; display:none;" id="ekle7"></button>




   <hr> 
                      </div>
                       </div>
                    
                      </div>

                       








                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                      <button type="button" class="btn btn-primary" id="sepeteeklebutton">Sepete Ekle</button>
                    </div>
                  </div>
                </div>
              </div>









<!--SEPETE URUN EKLE MODAL -->





<!-- URUN DETAYI MODAL -->



<div class="modal fade" style="height:700px;" id="urundetayimodal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ürün Detayı</h5>
                      <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
            
                    <div class="row justify-content-center">
                     <div class="col-6">
                      
                    <img src="" id="urundetayresim" class="card-img-top" alt="..." style="border-radius: 8px; max-width: 100%;  
height: auto;">
                    
                    </div>        
                    </div>
                    <hr> 
                    <h5 class="card-title" id="urundetayisim" align="center" style="margin-bottom: -20px; "></h5>
                    <h6 class="card-title" style="color: black; font-size: 14px;" id="urundetaydetay"></h6>
                    
                      </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    
                    </div>
                  </div>
                </div>
              </div>


              <!-- URUN DETAYI MODAL -->




<script type="text/javascript">
  
function urunozellikleriekle(e){


var urunid=document.getElementById("urunIdInput").value;
var eklenecekurunozelligi=e.innerHTML+' istiyorum';
var eklenumarasi=e.id;
var eklenecekfiyat="";
$.ajax
        (
        {
        url:'./Config/function.php?islem=urundetaycek', 
        type:'POST',
        async:false,
        data:
        {
        urunid   :urunid,
        
        },
        dataType:"json",
        success:function(data){

    


          if(data[eklenumarasi]==e.innerHTML){

          eklenecekfiyat=data[eklenumarasi+'fiyat'];


          }

          else{

                  blurt(
                  'Sakıncalı işleri bırak lütfen :)',
                  'Bize zarar vermek yerine yardımcı olmayı dene.',
                  'error'
                  );
                  setTimeout(function () {location.reload();}, 1500)


            
          }






        }
        }
        )










if(eklenecekdizi.includes(eklenecekurunozelligi)==true){
kacincisirada=eklenecekdizi.indexOf(eklenecekurunozelligi);
eklenecekdizi.splice(kacincisirada, 1);
eklenecekfiyatlar.splice(kacincisirada, 1);
e.style.backgroundColor="white";
e.style.color="#2A9061";

}

else{
eklenecekdizi.push(eklenecekurunozelligi);
eklenecekfiyatlar.push(eklenecekfiyat);
e.style.backgroundColor="#2A9061";
e.style.color="white";

}







}



</script>


<script type="text/javascript">
  
function urunozelliklericikar(e){



var cikarilacakurunozelligi=e.innerHTML+' İSTEMİYORUM';


if(cikarilacakdizi.includes(cikarilacakurunozelligi)==true){
kacincisirada=cikarilacakdizi.indexOf(cikarilacakurunozelligi);
cikarilacakdizi.splice(kacincisirada, 1);
e.style="margin-bottom: 10px; margin-right: 8px; background-color:white; color:#DC3545;";

}

else{
cikarilacakdizi.push(cikarilacakurunozelligi);
e.style="text-decoration: line-through; margin-bottom: 10px; margin-right: 8px; background-color:#DC3545; color:white;";

}


}



</script>