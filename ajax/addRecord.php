<?php
include "config.inc.php";
	if(isset($_POST['todo']) && $_POST['todo'] != "")
    {
		// get values 
		$todo = $_POST['todo'];

        $myfile = fopen($todotxt, "a") or die("Unable to open file!");
        $txt = $todo."\n";
        fwrite($myfile, $txt);
        fclose($myfile);

        //Mail contact if exists
        if (filesize($mailtxt) != 0) {
            $myfile = file_get_contents($mailtxt);
            mail($myfile,"New task added to the list",$todo);
        } else {
            return false;
        }
    }
    else {
        return false;
    }
?>
