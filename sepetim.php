
<?php 
include_once 'Config/altpanel.php';
?>

<?php if(isset($_SESSION['kullaniciId'])){


 echo '<script>
               
document.getElementById("kullaniciGirisAlani").style.display="";
document.getElementById("kullaniciGirisAlani1").style.display="none";
 
</script>';


             

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body> <br><br><br>

 <section class="section dashboard ">
  <div class="container">
      <div class="row justify-content-center" >

            <!-- Top Selling -->
            <div class="col-12">
           

              <div class="card top-selling">

                  <table class="table table-sm" style="padding: 0;"  >
                  <h2 class="card-title" style="font-size: 25px; text-align: center;"> Sepetim </h2>
                  
                
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Ürün Adı</th>
                        <th scope="col">Fiyatı</th>
                        <th scope="col" >Ekstra Ürün Fiyatı</th>


                        <th scope="col" style="text-align: center;">Adet</th>
                        <th scope="col" style="text-align: center;">Toplam</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                  
                      
                        <?php   if(isset($_SESSION['kullaniciId'])){

                                $sth = $conn->prepare('SELECT * FROM sepet
                                WHERE musteriId =? AND siparisDurumu=0');
                                $sth->bindParam(1, $_SESSION['kullaniciId'], PDO::PARAM_INT);
                             

                               


                                $sth->execute();

                                while($row = $sth->fetch( PDO::FETCH_ASSOC))
                                {

                                    echo '<tr id="'.$row["sirano"].'">
                        <th style="width: 9%"><img src="'.$row["urunResim"].'" ></th>
                        <td style="width: 20%" ><b>'.$row["urunAdi"].'</b><br>'.$row["urunOzellik1"].'<br>'.$row["urunOzellik2"].'</td>
                        <td>'.$row["urunFiyat"].'</td>
                        <td style=" text-align: left;">'.$row["ekstraFiyat"].'</td>

                        <td  style=" text-align: center;" class="fw-bold">'.$row["urunAdet"].'</td>
                        <td style=" text-align: center;">'.$row["ToplamUrunFiyati"].'</td>
                        <td  style=" text-align: left;"><button class="form-control " style="background-color:transparent; border:0px;" id="urunuSepettenSil" onclick="urunuSepettenSil(this);" value="'.$row["sirano"].'"><i style="color: #e03131; font-size: 20px;" class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </tr>';

                    




                                }

                        } ?>
                
                        


            
<thead class="thead-dark">
                      <tr>
                        <th></th>
                         <th></th>
                          <th></th>
                           <th></th>
                            <th></th>
                             <th></th>
                             <th></th>


                       
                      </tr>
                    </thead>


                  </table>


           

             
              </div>




<div class="container">
  <div class="row">
      <div class="col-12 text-right">
        <button type="button" class="btn btn-danger" id="sepetiBosalt">Sepeti Boşalt</button>

        <button type="button" class="btn btn-primary ">Siparişi Gönder.</button>


      </div>
       




  </div>



</div>
            









            </div><!-- End Top Selling -->
 </div>
          </div>
        
          <br>
          <br>





      

   
      

    
   </section>
  
 



</body>
</html>




<script type="text/javascript">


function urunuSepettenSil(e){

var element=document.getElementById(e.value);


  $.ajax
        (
        {
        url:'./Config/function.php?islem=urunuSepettenSil', 
        type:'POST',
        data:
        {
        sirano   :e.value

        },
        dataType:"json",
        success:function(data){

          element.remove();
          document.getElementById("sepeturunsayisibadge").innerHTML=document.getElementById("sepeturunsayisibadge").innerHTML-1;

        }
        

}
)


}



</script>



<script type="text/javascript">
  
  $("#sepetiBosalt").on("click", function() {


    var kullaniciid=<?php echo $_SESSION['kullaniciId']; ?>

     $.ajax
        (
        {
        url:'./Config/function.php?islem=sepetiBosalt', 
        type:'POST',
        data:
        {
        kullaniciid   :kullaniciid

        },
        dataType:"json",
        success:function(data){

         blurt(
                  'Sepetiniz Temizlendi',
                  'Sepetinizdeki tüm ürünler silindi.',
                  'info'
                  );
        setTimeout(function(){window.location.replace('../index.php');}, 1500);
            

        }
        

}
)





});
</script>



