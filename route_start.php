<?php
if(!isset($_GET['site'])){
    $start = new panoramaFirm();
    echo $start->getStartSite();
} elseif ($_GET['site']=='pfdata'){
    //include('sites/panoramadane.php');
    $panoramadane = new panoramaFirm();
    echo $panoramadane->getDataSite();
} elseif ($_GET['site']=='pfcategories'){
    $panoramakategorie = new panoramaFirm();
    echo $panoramakategorie->getCategorySite();
} elseif ($_GET['site']=='pfinstruction'){
    $instruction = new panoramaFirm();
    echo $instruction->getInstructionSite();
} elseif ($_GET['site']=='pfdownloadeddata'){
    $panoramadata = new panoramaFirm();
    echo $panoramadata->getDownloadedDataSite();
} elseif ($_GET['site']=='contact'){
    $contact = new defaultController();
    echo $contact->getContactSite();
}  elseif ($_GET['site']=='pktcategories'){
    $pktcategories = new polskieKsiazkiTelefoniczne();
    echo $pktcategories->getCategorySite();
}  elseif ($_GET['site']=='pktdata'){
    $pktdata = new polskieKsiazkiTelefoniczne();
    echo $pktdata->getDataSite();
} else {
    include('sites/start.php');
}