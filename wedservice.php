 
<?php


$operacion=$_GET['operacion'];
$numero=$_GET['numero'];


if($operacion=="db"){
    $decimalEntero = (int)$numero;
   
    echo json_encode(decbin($decimalEntero));
    
}else if($operacion=="bd"){
    $binarioEntero = (int)$numero;
    echo json_encode(bindec($binarioEntero));

}else if($operacion=="do"){
    $decimaldo = (int)$numero;
    echo json_encode(decoct($decimaldo));
}else if($operacion=="dh"){
    $decimaldh = (int)$numero;
    echo json_encode(dechex($decimaldh));
}else if($operacion=="bo"){
    $binarioo = (int)$numero;
    $aux= bindec($binarioo);
    $aux2 = (int)$aux;
    echo json_encode(decoct($aux2));
}else if($operacion=="bh"){
    $binariod = (int)$numero;
    $aux3= bindec($binariod);
    $aux4 = (int)$aux3;
    echo json_encode(dechex($aux4));
}else if($operacion=="ob"){
    $octalbinario = (int)$numero;
    $aux5= octdec($octalbinario);
    $aux6 = (int)$aux5;
    echo json_encode(decbin($aux6));
}else if($operacion=="hd"){
    echo json_encode(hexdec($numero));
}else if($operacion=="ho"){
  
    $aux7= hexdec($numero);
    $aux8 = (int)$aux7;
    echo json_encode(decoct($aux8));
}else if($operacion=="hb"){
    echo json_encode(base_convert($numero, 16, 2));
}else if($operacion=="od"){
    echo json_encode(base_convert($numero,8, 10));
}else if($operacion=="oh"){
    echo json_encode(base_convert($numero,8, 16));
}else{
    echo json_encode('ocurrio un error');
}

    
 















?>