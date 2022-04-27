
<?php include_once 'connection.php';


?>

<?php switch ($_GET['islem'])
 {




    case 'girisyap':
      
       
$kuladi = $_POST['username'];
$sifre = $_POST['password'];

$sth = $conn->prepare('SELECT kullaniciAdi,kullaniciSifre,kullaniciTipi,kullaniciId FROM kullanicilar
    WHERE kullaniciAdi =? AND kullaniciSifre=?');
$sth->bindParam(1, $kuladi, PDO::PARAM_STR);
$sth->bindParam(2, $sifre, PDO::PARAM_STR);
$sth->execute();
$row =$sth->fetch(PDO::FETCH_ASSOC);
$kullaniciSorgu = $sth->rowCount();

$kullaniciSorgu*=-1;

if(isset($row['kullaniciTipi'])){

$kullaniciTuru=$row['kullaniciTipi'];
 $_SESSION['kullaniciId']=$row['kullaniciId'];
 $kullaniciId= $_SESSION['kullaniciId'];

}
else{

   $kullaniciTuru="hatalı";
   $kullaniciId="yok";

}


 $result = array('kullaniciTuru' => "$kullaniciTuru",
                'kullaniciSorgu' => "$kullaniciSorgu",
                'kullaniciId' => "$kullaniciId"
                );

echo json_encode($result, JSON_PRETTY_PRINT);
     

        break;



         case 'kayitol':
      
       
$kullaniciadi = $_POST['kullaniciadi'];
$sifre        = $_POST['sifre'];
$email        = $_POST['email'];
$isim         = $_POST['isim'];
$soyisim      = $_POST['soyisim'];
$telno        = $_POST['telno'];
$il           = $_POST['il'];
$ilce         = $_POST['ilce'];
$adres        = $_POST['adres'];
$binano       = $_POST['binano'];
$kapino       = $_POST['kapino'];
$adrestarifi  = $_POST['adrestarifi'];



$sth = $conn->prepare('SELECT kullaniciAdi FROM kullanicilar
    WHERE kullaniciAdi =?');
$sth->bindParam(1, $kullaniciadi, PDO::PARAM_STR);

$sth->execute();
$kullaniciadikontrol = $sth->rowCount();

$kullaniciadikontrol*=-1;

if($kullaniciadikontrol=="0"){



$sth = $conn->prepare('INSERT INTO kullanicilar (kullaniciAdi, kullaniciSifre, kullaniciEmail, kullaniciIsim, kullaniciSoyisim, kullaniciTel, kullaniciIl,kullaniciIlce, kullaniciAdres, kullaniciBinano, kullaniciKapino, kullaniciAdrestarifi ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)');
$sth->bindParam(1, $kullaniciadi, PDO::PARAM_STR);
$sth->bindParam(2, $sifre, PDO::PARAM_STR);
$sth->bindParam(3, $email, PDO::PARAM_STR);
$sth->bindParam(4, $isim, PDO::PARAM_STR);
$sth->bindParam(5, $soyisim, PDO::PARAM_STR);
$sth->bindParam(6, $telno, PDO::PARAM_STR);
$sth->bindParam(7, $il, PDO::PARAM_STR);
$sth->bindParam(8, $ilce, PDO::PARAM_STR);
$sth->bindParam(9, $adres, PDO::PARAM_STR);
$sth->bindParam(10, $binano, PDO::PARAM_STR);
$sth->bindParam(11, $kapino, PDO::PARAM_STR);
$sth->bindParam(12, $adrestarifi, PDO::PARAM_STR);
$sth->execute();


}

else{




}




echo json_encode($kullaniciadikontrol, JSON_PRETTY_PRINT);
     

        break;




case 'kullanicivarmiuyarisi':



$kullaniciadi = $_POST['kullaniciadi'];

$sth = $conn->prepare('SELECT kullaniciAdi FROM kullanicilar
    WHERE kullaniciAdi =?');
$sth->bindParam(1, $kullaniciadi, PDO::PARAM_STR);

$sth->execute();
$kullaniciadikontrol = $sth->rowCount();

$kullaniciadikontrol*=-1;

if($kullaniciadikontrol=="0"){

echo json_encode("0", JSON_PRETTY_PRINT);

}


else{

echo json_encode("1", JSON_PRETTY_PRINT);

}

            break;



     case 'eklenecekurunmodalacek':

$urunid=$_POST['urunid'];




$sth = $conn->prepare('SELECT * FROM restoranUrunEkleme
    WHERE urunId =?');
$sth->bindParam(1, $urunid, PDO::PARAM_INT);

$sth->execute();

while($row = $sth->fetch( PDO::FETCH_ASSOC))
{


echo json_encode($row, JSON_PRETTY_PRINT);




}






     

     break;



     case 'urundetaycek':

$urunid=$_POST['urunid'];




$sth = $conn->prepare('SELECT * FROM restoranUrunEkleme
    WHERE urunId =?');
$sth->bindParam(1, $urunid, PDO::PARAM_INT);

$sth->execute();

while($row = $sth->fetch( PDO::FETCH_ASSOC))
{


echo json_encode($row, JSON_PRETTY_PRINT);




}






     

     break;





case 'sepeteurunekle':

$urunid                 =$_POST['urunid'];
$urunadet               =$_POST['urunadet'];
$kullaniciid            =$_POST['kullaniciId'];
$key                    =$_POST['key'];
$eklenecekurunler       =$_POST['eklenecekurunler'];
$cikarilacakurunler     =$_POST['cikarilacakurunler'];
$urunadi                =$_POST['urunadi'];


$ekstrafiyatfarki       =$_POST['ekstrafiyatfarki'];


$urunFiyat=$_POST['urunFiyat'];
$urunResim=$_POST['urunResim'];




$sth = $conn->prepare("SELECT ISNULL(sepeturunid,'N/A') AS sepeturunid FROM sepet where musteriId=? GROUP BY sepeturunid");
$sth->bindParam(1, $kullaniciid, PDO::PARAM_INT);
$sth->execute();
while($row = $sth->fetch( PDO::FETCH_ASSOC)){

if($row['sepeturunid']==""){

  $_SESSION['sepeturunid']=$key;  
}

else{

$key=$row['sepeturunid'];

}


}














$sth = $conn->prepare("INSERT INTO sepet (sepeturunid, urunId,musteriId,urunAdi,urunAdet,urunOzellik1,urunOzellik2,ekstraFiyat,urunFiyat,urunResim) VALUES (?,?,?,?,?,?,?,?,?,?)");
$sth->bindParam(1, $key, PDO::PARAM_STR);
$sth->bindParam(2, $urunid, PDO::PARAM_STR);
$sth->bindParam(3, $kullaniciid, PDO::PARAM_STR);
$sth->bindParam(4, $urunadi, PDO::PARAM_STR);
$sth->bindParam(5, $urunadet, PDO::PARAM_STR);
$sth->bindParam(6, $eklenecekurunler, PDO::PARAM_STR);
$sth->bindParam(7, $cikarilacakurunler, PDO::PARAM_STR);
$sth->bindParam(8, $ekstrafiyatfarki, PDO::PARAM_STR);
$sth->bindParam(9, $urunFiyat, PDO::PARAM_STR);
$sth->bindParam(10,$urunResim, PDO::PARAM_STR);


$sth->execute();





echo json_encode("Sepete Eklendi.", JSON_PRETTY_PRINT);
     

     break;








 case 'sepeturunsayisi':

$musteriid=$_SESSION['kullaniciId'];




$sth = $conn->prepare('SELECT count(musteriId) FROM sepet where musteriId=? GROUP BY musteriId');
$sth->bindParam(1, $musteriid, PDO::PARAM_INT);
$sth->execute();
$row = $sth->fetch( PDO::FETCH_ASSOC);

echo json_encode($row, JSON_PRETTY_PRINT);


  break;







  case 'urunuSepettenSil':

$sirano=$_POST['sirano'];




$sth = $conn->prepare('DELETE FROM sepet WHERE sirano=?');
$sth->bindParam(1, $sirano, PDO::PARAM_INT);
$sth->execute();


echo json_encode('silindi', JSON_PRETTY_PRINT);


  break;


  case 'sepetiBosalt':

$sepeturunid=$_POST['kullaniciid'];




$sth = $conn->prepare('DELETE FROM sepet WHERE musteriId=?');
$sth->bindParam(1, $sepeturunid, PDO::PARAM_INT);
$sth->execute();


echo json_encode('silindi', JSON_PRETTY_PRINT);


  break;














 }
     ?>
