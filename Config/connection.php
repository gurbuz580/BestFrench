<?php 
session_start();
    
    $Sunucu_Adresi   = "185.92.2.138,4251";
    $Sunucu_Database = "bestFrenchDb";
    $Sunucu_User     = "sa";
    $Sunucu_Pass     = "67813001249bB";

  

    try 
    {
    $conn = new PDO("sqlsrv:Server=$Sunucu_Adresi;Database=$Sunucu_Database", $Sunucu_User, $Sunucu_Pass);
    } catch ( PDOException $e )
    {
    echo $e->getMessage();
    }
    if ($conn) {  


         }else { echo "Başarısız";   }

        
 ?>