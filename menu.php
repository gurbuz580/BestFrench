
<?php include_once './Config/altpanel.php';


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
<br><br><br>

<style type="text/css">.nav-pills > li > a.active {
    background-color: #FFD75E !important;
}</style>

	<h4 style="font-size: 25px; text-align: center;" class="card-title">Menüye Göz Atarak Hemen Sipariş Verebilirsin!</h4>

<section class="section">
	<div class="container">
      <div class="row">
<div class="col-sm d-flex">

    <div class="card  flex-fill">
        <div class="card-body flex-fill">
             
          


    <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">





  <li class="nav-item" >
    <a class="nav-link active" style=" color: black;" id="pills-tumurunler-tab" data-toggle="pill" href="#pills-tumurunler" role="tab" aria-controls="pills-home" aria-selected="true">Tüm Ürünler</a>
  </li>


  	<?php 	



$sth = $conn->prepare('SELECT DISTINCT urunKategorisi,KategoriSiralamasi FROM restoranUrunEkleme ORDER BY KategoriSiralamasi ASC');
$sth->execute();

while($row = $sth->fetch( PDO::FETCH_ASSOC))
{


echo '  <li class="nav-item" >
    <a class="nav-link" style=" color: black;" id="pills-'.$row['urunKategorisi'].'-tab" data-toggle="pill" href="#pills-'.$row['urunKategorisi'].'" role="tab" aria-controls="pills-home" aria-selected="true">'.$row['urunKategorisi'].'</a>
  </li>';


}


    	 ?>




</ul>

<br>


<div class="tab-content" id="pills-tabContent">



  <div class="tab-pane fade show active" id="pills-tumurunler" role="tabpanel" aria-labelledby="pills-tumurunler-tab">
  	<div class="row">

<?php 	


$urunDurum=1;

$sth = $conn->prepare('SELECT * FROM restoranUrunEkleme where urunDurum=?');
$sth->bindParam(1, $urunDurum, PDO::PARAM_INT);
$sth->execute();

while($row = $sth->fetch( PDO::FETCH_ASSOC))
{


echo ' <div class="col-xs-2 col-sm-6 col-lg-3 col-6 col-sm d-flex">
            <div class="card flex-fill">
            <img src="'.$row['urunResim'].'" class="card-img-top" alt="..." style="margin-bottom: 10px; border-radius: 8px;">
           <button type="button" id="'.$row['urunId'].'" onclick="SEPETE_URUN_EKLE(this);"class="btn btn-danger" data-toggle="modal" data-target="#urunusepeteeklemodal">Sepete Ekle
              </button>
            <div class="card-body flex-fill">
            <div class="row">
           <h5 class="card-title" style="margin-bottom:-25px;">'.$row['urunAdi'].'</h5>
           </div>
            <div class="row">
           <h5 class="card-title">'.$row['urunFiyati'].'₺'.'</h5>
            <button onclick="urunDetay(this);" style="color:darkred; background-color: transparent; border:0px;" value="'.$row['urunId'].'">  <i class="fa-solid fa-circle-info"></i> Ürün Detayı</button>
            </div>
            
            </div>
            </div>
 </div>';


}


    	 ?>



  </div>
  </div>




<?php 	



$sth = $conn->prepare('SELECT DISTINCT urunKategorisi FROM restoranUrunEkleme');
$sth->execute();

while($row = $sth->fetch( PDO::FETCH_ASSOC))
{


echo '<div class="tab-pane fade" id="pills-'.$row['urunKategorisi'].'" role="tabpanel" aria-labelledby="pills-'.$row['urunKategorisi'].'-tab"><div class="row">';

$urunDurum=1;
$sth2 = $conn->prepare('SELECT * FROM restoranUrunEkleme where urunKategorisi=? AND urunDurum=? ');
$sth2->bindParam(1, $row['urunKategorisi'], PDO::PARAM_STR);
$sth2->bindParam(2, $urunDurum, PDO::PARAM_INT);

$sth2->execute();
while($row = $sth2->fetch( PDO::FETCH_ASSOC))
{
echo '
<div class="col-xs-2 col-sm-6 col-lg-3 col-6 col-sm d-flex">
            <div class="card flex-fill">
            <img src="'.$row['urunResim'].'" class="card-img-top" alt="..." style="margin-bottom: 10px; border-radius: 8px;">
           <button type="button" id="'.$row['urunId'].'" onclick="SEPETE_URUN_EKLE(this);"class="btn btn-danger" data-toggle="modal" data-target="#urunusepeteeklemodal">Sepete Ekle
              </button>
            <div class="card-body flex-fill">
            <div class="row">
           <h5 class="card-title" style="margin-bottom:-25px;">'.$row['urunAdi'].'</h5>
           </div>
            <div class="row">
           <h5 class="card-title">'.$row['urunFiyati'].'₺'.'</h5>
            <button onclick="urunDetay(this);" style="color:darkred; background-color: transparent; border:0px;" value="'.$row['urunId'].'">  <i class="fa-solid fa-circle-info"></i> Ürün Detayı</button>
            </div>
            
            </div>
            </div>
 </div>';
}

echo '</div></div>';
}


    	 ?>


</div>

           

		
			
</div>
</div>
</div>
</div>
</div>

</section>




            
     
           







</body>
</html>



