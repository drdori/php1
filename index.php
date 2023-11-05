<?php
include "classes\hirek.php";
echo "Friss hírek!";
$napihirek1 = new \classes\Hirek("Az első cikkem","tanulás");
//return this nélkül
//$napihirek1->setTartalom("Itt jeleneik eg az első cikkem tartalma...");
//$napihirek1->setTags("cikk")->setTags("tanulás");
//return this
$napihirek1->setTartalom("Itt jeleneik eg az első cikkem tartalma...")
    ->setTags("cikk")->setTags("tanulás");
//............................................................

$napihirek2 = new \classes\Hirek("Ez a második  cikkem","szorakozás");
$napihirek2->setTartalom("Tanulás után jöhet a szórakozás...")
    ->setTags("cikk")->setTags("szorakozás");
//............................................................
echo $napihirek1->HtmlEloNezet();
echo $napihirek2->HtmlEloNezet();