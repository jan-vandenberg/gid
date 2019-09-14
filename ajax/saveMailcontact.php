<?php
include "config.inc.php";
  if(isset($_POST['mail']))
  {
      if ($_POST['mail'] == ""){
          //If the input is empty empty the file
          file_put_contents($mailtxt, '');
      } else { 
        // Get values
        $mailcontact = $_POST['mail'];
        $myfile = fopen($mailtxt, "w") or die("Unable to open file!");
        $txt = $mailcontact."\n";
        fwrite($myfile, $txt);
        fclose($myfile);
      }
  }
    else {
        return false;
    }
?>
