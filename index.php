
<?php include_once 'Config/altpanel.php';

?>


<?php if(isset($_SESSION['kullaniciId'])){


 echo '<script>
               
document.getElementById("kullaniciGirisAlani").style.display="";
document.getElementById("kullaniciGirisAlani1").style.display="none";
 
</script>';


             

}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<br>
<br>
<br>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
  
    

<?php 








$sth = $conn->prepare('SELECT * FROM restoranSlider');
$sth->execute();

while($row = $sth->fetch( PDO::FETCH_ASSOC))
{

$sliderresim= $row["sliderResim"];
$ilksirami= $row["ilkSirami"];
              

  echo '<div class="carousel-item '; if($ilksirami==1){echo "active";} else{ } echo '" >
                    <img src="'.$sliderresim.'" class="d-block w-100" alt="...">
                  </div>'; 



}

         
        ?>

    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
              

<div class="card-body flex-fill ">
              <h4 style="font-size: 25px; text-align: center;" class="card-title">En Çok Sevilen Lezzetler</h4>
              
           
              <div class="container">
              <div class="row">
      
                    <?php 
            $query = $conn->query("SELECT * FROM restoranUrunEkleme where urunFavori=1 AND urunDurum=1 ", PDO::FETCH_ASSOC);
            if ( $query->rowCount() ){

            foreach( $query as $row ){
            $urunid= $row["urunId"];
            $urunadi= $row["urunAdi"];
            $urunaciklamasi= $row["urunAciklamasi"];
            $uruntokendegeri= $row["urunTokenDegeri"];
            $urunkategorisi= $row["urunKategorisi"];
            $urunresim= $row["urunResim"];
            $urunfiyati=$row["urunFiyati"];

            
            
            
           
            echo '

            <!-- VERİTABANINDAN GELENİ EKLENECEK YER -->

            <div class="col col-xs-6 col-sm-6 col-lg-3 col-6 col-sm d-flex">
            <div class="card flex-fill">
            <img src="'.$urunresim.'" class="card-img-top" alt="..." style="margin-bottom: 10px; border-radius: 8px;">
           <button type="button" id="'.$urunid.'" onclick="SEPETE_URUN_EKLE(this);"class="btn btn-danger" data-toggle="modal" data-target="#urunusepeteeklemodal">Sepete Ekle
              </button>

            <div class="card-body flex-fill ">
            <div class="row">
           <h5 class="card-title" style="margin-bottom:-25px;">'.$row['urunAdi'].'</h5>
           </div>
            <div class="row">
           <h5 class="card-title">'.$row['urunFiyati'].'₺'.'</h5>
            <button onclick="urunDetay(this);" style="color:darkred; background-color: transparent; border:0px;" value="'.$urunid.'">  <i class="fa-solid fa-circle-info"></i> Ürün Detayı</button>
            </div>
          
            
                
        
            </div>
         
            </div>
            </div>
  
            ';
            }
          }
    



            ?>

         
        </div>

     



<!-- içerik alanaı -->
 <!-- Default dropup button -->












      </div>



  <br>
  <br>
  <br>



  
</body>
</html>





