<?php
    if($_SERVER['PHP_SELF']=='index.php'){
        header("Location: http://revisarpi.eastus.cloudapp.azure.com/iit/updateLabs.php");
        exit;
    }elseif($_SERVER['PHP_SELF']=='updateLabs.php'){
        header("Location: http://revisarpi.eastus.cloudapp.azure.com/iit/index.php");
        exit;
    }
?>