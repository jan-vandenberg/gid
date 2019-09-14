<?php
include "config.inc.php";
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // Get task id
    $task_id = $_POST['id'];
    $remove = array($task_id);
    $task_file = $todotxt; 

    // Add done task to top of done.txt file
    $dones = file($task_file); 
    $done = $dones[$task_id-1]; 
    $done_file = $donetxt;
    $date = date('Y-m-d');
    $current = 'x'. " " . $date . " " .  $done . file_get_contents($done_file);
    file_put_contents($done_file, $current);

    // Delete done task from the todo.txt file
    $lines = file($task_file);
    $lines = array_filter($lines, function($lineNumber) use ($remove) {
         return !in_array($lineNumber + 1, $remove);
         }, ARRAY_FILTER_USE_KEY);
    $output = implode('', $lines);
    // Write back to file
    file_put_contents($task_file, $output);
}
?>
