<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
if(isset($_POST['submit_edit'])){
    $filename = 'gateaway/auto_reply_sms.php';
    if (file_exists("$filename")){
        $data = $_POST['konten_teks'];
        $newdata = stripslashes($data);
        if ($newdata != ''){
            $fw = fopen($filename, 'w') or die('Could not open file!');
            $fb = fwrite($fw,$newdata) or die('Could not write to file');
            fclose($fw);
        }
        header('location: admin.php?mod_apps=sms_gateaway&media_app=gateaway_editor');
    }
    else {
        echo "<center><h2>File tidak ditemukan</h2></center>";
    }
}
