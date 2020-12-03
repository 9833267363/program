<html>
<body>
<?php  

function Profit($costPrice,  

                $sellingPrice) 
{ 

    $profit = ($sellingPrice - 

               $costPrice); 

  

    return $profit; 
} 

  
 

function Loss($costPrice, 

              $sellingPrice) 
{ 

    $Loss = ($costPrice -  

             $sellingPrice); 

  

    return $Loss; 
} 

  
 

$costPrice = 65; 

$sellingPrice = 120; 

  

if ($sellingPrice == $costPrice) 

    echo "No profit nor Loss"; 

  

else if ($sellingPrice > $costPrice) 

    echo " Maximum profit is rs. ".Profit($costPrice, 

                $sellingPrice); 

  
else

    echo Loss($costPrice,  

              $sellingPrice)." Loss "; 

  

?>





</body>
</html>