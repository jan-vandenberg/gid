<?php
	if(isset($_POST['todo']) && $_POST['todo'] != "")
    {
		// get values 
		$todo = $_POST['todo'];

        $myfile = fopen("../todo.txt", "a") or die("Unable to open file!");
        $txt = $todo."\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }
    else {
        return false;
    }
?>
