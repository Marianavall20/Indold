 <?php
    $enviar = $_POST['enviar'];                     
     if($boton_des != ""){
                                

    $cantidad = $_POST['cantidad'];
    $costo = $_POST['costo'];
    $costo_fijo= 1,383.35;
                                
                                
 
if ($cantidad > 0 and $costo > 0){
 
$consumo_final = ($consumo * $costo_fijo);                      
echo "$consumo_final ";

?>
