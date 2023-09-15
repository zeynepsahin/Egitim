<?php

function asalSayiMi($sayi){
    if($sayi <= 1){
        return false;
    }
    if($sayi == 2){
        return true;
    }

    for ($i = 2; $i <= $sayi / 2; $i++){
        if($sayi % $i == 0){
            return false;
        }
    }
    return true;
}

$sayi = 17;
if(asalSayiMi($sayi)){
    echo $sayi . " " . "sayısı asaldır";

}else{
    echo $sayi . " " . "sayısı asal değildir";
}

