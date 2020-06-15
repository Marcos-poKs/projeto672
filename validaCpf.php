<?php  
    function validaCpf($cpfArray,$indice=8){
    $contador=2;
    $montante=0;
    for ($j=$indice; $j>=0 ; $j--) { 
        $montante += $cpfArray[$j] * $contador;
        $contador++;
        $resto=$montante%11;
    }
    
    if ($resto<2) {
           if ($cpfArray[$indice+1]==0) {
                return true;
            }
           else {
            return false; 
           }
    }
    else{
         if ($cpfArray[$indice+1]==(11-$resto)) {
            return true;
         } else {
            return false;
         }
         }
}
 



?>
