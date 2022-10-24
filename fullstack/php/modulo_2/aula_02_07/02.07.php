<?php
$test = true;

if($test){
    var_dump(true);

}else{
    var_dump(false);

}

$age = 78;

if($age < 20){
    var_dump("Bandas coloridas");
}else if($age > 20 && $age < 50){
    var_dump("Ótimas bandas");
}else{
    var_dump("Rock and roll raiz");
}

echo"<p>--------------------------------------------------------</p>";

$hour = 15;

if($hour >= 5 && $hour <23){
    if($hour < 7){
        var_dump("Bob Marley");
    }else{
        var_dump("After Bridge");
    }
}else{
    var_dump("ZzzzzZZZZ");
}

echo"<p>--------------------------------------------------------</p>";

$rock = "";

if(!isset($rock)){
    var_dump("Rock and Roll");
}else{
    var_dump("Die");
}


echo"<p>--------------------------------------------------------</p>";

$rockAndRoll = "AC/DC";

if(empty($rockAndRoll)){
    var_dump("Existe e toca {$rockAndRoll}");
}else{
    var_dump("Não existe ou não está tocando");
}

echo"<p>--------------------------------------------------------</p>";

$payment = "canceled";

switch($payment){
    case "billet_printed":
        var_dump("Boleto impresso");
        break;
    case "canceled":
        var_dump("Pagamento cancelado");
        break;
    case "past_due":
    case "pendding":
        var_dump("Aguardando pagamento");
        break;
    case "approved":
    case "completed":
        var_dump("Pagamento aprovado");
        break;
    default:
    var_dump("Erro ao processar o pagamento...");
    break;
}

