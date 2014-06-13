<?php

 function rrmdir($dir) { 
   if (is_dir($dir)) { 
     $objects = scandir($dir); 
     foreach ($objects as $object) { 
       if ($object != "." && $object != "..") { 
         if (filetype($dir."/".$object) == "dir") 
rrmdir($dir."/".$object); else unlink($dir."/".$object); 
       } 
     } 
     reset($objects); 
     rmdir($dir); 
   } 
 }

function logme($string, $exit = true) {
	file_put_contents("/tmp/statuttupload", date('r').' ('.$_SERVER['REMOTE_ADDR'].'): '.$string."\n", FILE_APPEND);
	if ($exit) die();
}

// kontroller at det er en forespørsel fra BS
if (substr($_SERVER['REMOTE_ADDR'], 0, 7) != "37.191.")
	logme("Ugyldig IP-adresse!");

if (isset($_FILES['statutter'])) {
	$dest = dirname(__FILE__) . "/statutter";
	$dest_tmp = dirname(__FILE__) . "/statutter_tmp";

	#@mkdir($dest);
	@mkdir($dest_tmp);
	
	if (!is_uploaded_file($_FILES['statutter']['tmp_name'])) {
		logme("Feil ved opplasting!");
	}

	@unlink($dest_tmp ."/statutter.zip");
	if (!move_uploaded_file($_FILES['statutter']['tmp_name'], $dest_tmp . "/statutter.zip")) {
		logme("Kunne ikke lagre dokumentet på serveren...");
	}

	$zip = new ZipArchive;
	$res = $zip->open($dest_tmp . "/statutter.zip");
	if ($res !== true) {
		logme("Kunne ikke åpne som zip...");
	}

	$zip->extractTo($dest_tmp);
	$zip->close();

	$time = date("Ymd_His", filectime($dest));
	$dest_arc = dirname(__FILE__) . "/statutter_arkiv/statutter_".$time;
	@rename($dest, $dest_arc);
	@rrmdir($dest);
	rename($dest_tmp, $dest);
	
	logme("OK!");

}

logme("Ugyldig forespørsel.");
